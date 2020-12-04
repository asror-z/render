const socket = io('http://localhost:2020/chat');

const Defaults = {
    avatar: 'https://avatars.dicebear.com/api/avataaars/varun.svg?mood[]=happy',
};

const Messages = {
    'no-messages': 'No messages',
    'no-name': 'Anonymous',
    statuses: {
        online: 'online',
        offline: 'offline',
    },
};

const Statics = {
    user(id) {
        return {
            avatar(fileName) {
                return !fileName ? Defaults.avatar : `/upload/uploaz/eyuf/User/Photo/${id}/${fileName}`;
            }
        };
    },
};

const Utils = {
    deepEquals(value1, value2) {
        return JSON.stringify(value1) === JSON.stringify(value2);
    },

    deepClone(value) {
        return JSON.parse(JSON.stringify(value));
    },

    dom: {
        findParentElement($element, predicate) {
            let $nextParent = $element.parentElement;

            while ($nextParent && !predicate($nextParent)) {
                $nextParent = $nextParent.parentElement;
            }

            return $nextParent;
        },
    },
};

const State = {
    __listeners: [],

    _users: null,
    _activeChat: null,
    _activeChatData: null,
    _ongoingMessages: {},

    set users(users) {
        this.__mutateField('_users', users);

        this._ongoingMessages = Object.fromEntries(
            users.map(({ id }) => [id, this._ongoingMessages[id] || ''])
        );
    },

    get users() {
        return this._users;
    },

    set activeChat(id) {
        if (!id) {
            this.activeChatData = null;
        }

        this.__mutateField('_activeChat', id);
    },

    get activeChat() {
        return this._activeChat;
    },

    set activeChatData(data) {
        this.__mutateField('_activeChatData', data);
    },

    get activeChatData() {
        return this._activeChatData;
    },

    set ongoingMessages(messages) {
        this.__mutateField('_ongoingMessages', messages);
    },

    get ongoingMessages() {
        return this._ongoingMessages;
    },

    setOngoingMessage(message) {
        if (!State.activeChat) {
            return;
        }

        this.ongoingMessages = {
            ...this.ongoingMessages,
            [State.activeChat]: message,
        };
    },

    getOngoingMessage() {
        if (!State.activeChat) {
            return '';
        }

        return this.ongoingMessages[State.activeChat];
    },

    get state() {
        return {
            users: this.users,
            activeChat: this.activeChat,
            activeChatData: this.activeChatData,
            ongoingMessages: this._ongoingMessages,
            ongoingMessage: this.getOngoingMessage(),
        };
    },

    subscribe(listener) {
        this.__listeners.push(listener);
    },

    __mutateField(field, value) {
        this.__mutate(() => {
            this[field] = value;
        });
    },

    __mutate(mutator) {
        const prevState = Utils.deepClone(this.state);

        mutator();

        this.__notify(prevState);
    },

    __notify(prevState) {
        this.__listeners.forEach((listener) => {
            listener(this.state, prevState);
        });
    },
};

const Templater = {
    chatThumbnail({ id, avatar, name, message, status }) {
        const statusBemModifiers = {
            online: 'online',
            offline: 'offline',
        };

        return `
            <li class="users-list__item">
                <div class="user-chat media" data-chat-thumbnail="${id}" onclick="State.activeChat = ${id}">
                    <img class="user-chat__avatar shadow-sm mr-2" src="${Statics.user(id).avatar(avatar)}" alt="">
                    <div class="media-body">
                        <h5 class="user-chat__name mb-0">${name === null ? Messages['no-name'] : name}</h5>
                        <p class="user-chat__message user-chat__message--sent mb-0">
                            ${message === null ? Messages['no-messages'] : message.text}
                        </p>
                        <span class="user-chat__status user-chat__status--${statusBemModifiers[status]}">
                            ${Messages.statuses[status]}
                        </span>
                    </div>
                </div>
            </li>
        `;
    },

    chatMessage({ chat_id: chatId, text, time, from }) {
        const isMine = from === window.chat.me;
        const { avatar = null, name = null } = State.users.find(({ id }) => id === from) || {};

        return `
            <li class="messages-list__item ${isMine ? 'messages-list__item--mine' : ''}">
                <div class="message ${isMine ? 'message--mine' : ''}">
                    ${!isMine ? `<img class="message__avatar shadow-sm mr-2" src="${Statics.user(chatId).avatar(avatar)}" alt="">` : ''}
                    <div class="message__body">
                        <div class="message__content">
                            ${!isMine ? `
                                <div class="message__author">
                                    ${name === null ? Messages['no-name'] : name}
                                </div>
                            ` : ''}
                            <div class="message__text">
                                ${text}
                            </div>
                        </div>
                        <div class="message__time mt-1">
                            ${time ? moment(time).format() : 'Some time'}
                        </div>
                    </div>
                </div>
            </li>
        `;
    },
};

const Renderer = {
    $usersList: document.getElementById('users-list'),
    $emptyChat: document.getElementById('empty-chat'),
    $activeChatArea: document.getElementById('active-chat-area'),
    $activeChatAvatar: document.getElementById('active-chat-avatar'),
    $activeChatName: document.getElementById('active-chat-name'),
    $activeChatStatus: document.getElementById('active-chat-status'),
    $activeChatEmptyConversationArea: document.getElementById('active-chat-empty-conversation-area'),
    $activeChatConversationArea: document.getElementById('active-chat-conversation-area'),
    $activeChatMessagesList: document.getElementById('active-chat-messages-list'),
    $activeChatCloseBtn: document.getElementById('active-chat-close-btn'),
    $messageForm: document.getElementById('message-form'),
    $messageInput: document.getElementById('message-input'),

    _init() {
        Renderer.emptyChat();

        this.$activeChatCloseBtn.addEventListener('click', () => {
            State.activeChat = null;
        });

        this.$messageInput.addEventListener('input', (event) => {
            const message = event.target.value;
            event.target.value = message.slice(0, -1);

            if (State.activeChat === null) {
                return;
            }

            State.setOngoingMessage(message);
        });

        this.$messageForm.addEventListener('submit', (event) => {
            event.preventDefault();

            if (State.getOngoingMessage() === '') {
                return;
            }

            socket.emit('send message', window.chat.me, State.activeChat, State.getOngoingMessage());
            socket.emit('chat list', window.chat.me, State.activeChat);

            State.setOngoingMessage('');
        });
    },

    usersList(users) {
        this.$usersList.innerHTML = users.reduce((html, user) => html + Templater.chatThumbnail(user), '');
    },

    closeChat() {
        const $activeChatThumbmail = document.querySelector('[data-chat-thumbnail].user-chat--active');

        if (!$activeChatThumbmail) {
            return;
        }

        $activeChatThumbmail.classList.remove('user-chat--active');
    },

    openChat(friend) {
        this.closeChat();

        const $activeChatThumbmail = document.querySelector(`[data-chat-thumbnail="${friend}"]`);

        if (!$activeChatThumbmail) {
            return;
        }

        $activeChatThumbmail.classList.toggle('user-chat--active', true);
    },

    emptyChat() {
        this.$activeChatArea.classList.toggle('d-none', true);
        this.$emptyChat.classList.toggle('d-none', false);
    },

    chat({ friend, messages }) {
        this.$activeChatArea.classList.toggle('d-none', false);
        this.$emptyChat.classList.toggle('d-none', true);

        const { avatar = null } = State.users.find(({ id }) => id === friend.id) || {};

        this.$activeChatAvatar.src = Statics.user(friend.id).avatar(avatar);
        this.$activeChatName.textContent = friend.name === null ? Messages['no-name'] : friend.name;

        const statusClassNames = {
            online: 'text-success',
            offline: 'text-danger',
        };

        this.$activeChatStatus.textContent = friend.status;
        this.$activeChatStatus.className = statusClassNames[friend.status];

        if (messages.length === 0) {
            this.$activeChatEmptyConversationArea.classList.toggle('d-none', false);
            this.$activeChatConversationArea.classList.toggle('d-none', true);
        } else {
            this.$activeChatEmptyConversationArea.classList.toggle('d-none', true);
            this.$activeChatConversationArea.classList.toggle('d-none', false);

            this.$activeChatMessagesList.innerHTML = messages.reduce((html, message) => html + Templater.chatMessage(message), '');
        }
    },

    setOngoingMessage(message) {
        this.$messageInput.value = message;
    },

    scrollChatToBottom({ checkCurrentPosition = false } = {}) {
        if (checkCurrentPosition && this.$activeChatMessagesList.scrollTop + this.$activeChatMessagesList.clientHeight - this.$activeChatMessagesList.scrollHeight <= 20) {
            this.scrollChatToBottom();
        }

        this.$activeChatMessagesList.scrollTo(0, this.$activeChatMessagesList.scrollHeight);
    }
};

Renderer._init();

socket.on('connect', () => {
    console.log('Connected successfully!');
    socket.emit('login', window.chat.me);
});

socket.on('disconnect', () => {
    console.log('Disconnected!');
});

socket.on('user-list', (users) => {
    console.log('user-list', users);
    State.users = users;
});

socket.on('chat-click', (payload) => {
    console.log('chat-click', payload);
    payload.messages = Object.values(payload.messages);
    State.activeChatData = payload;
    Renderer.scrollChatToBottom({ checkCurrentPosition: true })
});

socket.on('new-message', (message) => {
    console.log('new-message', message);
    socket.emit('chat list', window.chat.me, State.activeChat);
});

State.subscribe(({ users }, { users: prevUsers }) => {
    if (Utils.deepEquals(users, prevUsers)) {
        return;
    }

    Renderer.usersList(users);
});

State.subscribe(({ activeChat }, { activeChat: prevActiveChat }) => {
    if (activeChat === prevActiveChat) {
        return;
    }

    if (activeChat === null) {
        return;
    }

    Renderer.openChat(activeChat);
    socket.emit('chat list', window.chat.me, activeChat);
});

State.subscribe(({ activeChatData }, { activeChatData: prevActiveChatData }) => {
    if (Utils.deepEquals(activeChatData, prevActiveChatData)) {
        return;
    }

    if (activeChatData === null) {
        Renderer.closeChat();
        Renderer.emptyChat();
        return;
    }

    Renderer.chat(activeChatData);
});

State.subscribe(({ ongoingMessage }, { ongoingMessage: prevOngoingMessage }) => {
    if (ongoingMessage === prevOngoingMessage) {
        return;
    }

    Renderer.setOngoingMessage(ongoingMessage);
});
