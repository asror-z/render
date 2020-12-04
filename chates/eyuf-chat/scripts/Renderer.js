window.Renderer = {
  _messagesScrollObserver: null,

  $chatFrame: document.getElementById('chat-frame'),
  $requestsBadge: document.getElementById('requests-badge'),
  $chatsList: document.getElementById('chats-list'),
  $requestsList: document.getElementById('requests-list'),
  $contactsList: document.getElementById('contacts-list'),
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
  $messageSendBtn: document.getElementById('message-send-btn'),
  $chatHeaderProfile: document.getElementById('chat-header-profile'),
  $userProfileModalAvatar: document.getElementById('user-profile-modal-avatar'),
  $userProfileModalName: document.getElementById('user-profile-modal-name'),
  $userProfileModalRole: document.getElementById('user-profile-modal-role'),
  $userProfileModalCountry: document.getElementById('user-profile-modal-country'),
  $userProfileModalUnfriendBtn: document.getElementById('user-profile-modal-unfriend-btn'),
  $userProfileModalBlockBtn: document.getElementById('user-profile-modal-block-btn'),

  _init() {
    this._messagesScrollObserver = new IntersectionObserver(this._onMessagesScroll, { root: this.$activeChatMessagesList });

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

      if (State.activeChatData.friend.blocked) {
        return;
      }

      if (State.getOngoingMessage() === '') {
        return;
      }

      socket.emit('send message', window.chat.me, State.activeChat, State.getOngoingMessage());

      State.setOngoingMessage('');
    });

    this.$chatHeaderProfile.addEventListener('click', () => {
      State.isProfileModalOpen = true;
    });

    this.$userProfileModalUnfriendBtn.addEventListener('click', () => {
      socket.emit('request', window.chat.me, State.profileModalData.id, 'cancel');
    });

    this.$userProfileModalBlockBtn.addEventListener('click', () => {
      socket.emit('block', window.chat.me, State.profileModalData.id);
    });

    $('#user-profile-modal').on('hide.bs.modal', (event) => {
      State.isProfileModalOpen = false;
    });
  },

  chatsList(chats) {
    this.$chatsList.innerHTML = chats.reduce((html, chat) => html + Templater.chatThumbnail(chat), '');
  },

  requestsList(requests) {
    this.$requestsBadge.textContent = requests.length;
    this.$requestsList.innerHTML = requests.reduce((html, request) => html + Templater.request(request), '');
  },

  contactsList(contacts) {
    this.$contactsList.innerHTML = contacts.reduce((html, contact) => html + Templater.contact(contact), '');
  },

  closeChat() {
    this.$chatFrame.classList.remove('chat-frame--open');

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
    this.$chatFrame.classList.add('chat-frame--open');

    if (friend.blocked) {
      this.$messageInput.disabled = true;
      this.$messageSendBtn.disabled = true;
    } else {
      this.$messageInput.disabled = false;
      this.$messageSendBtn.disabled = false;
    }

    this._messagesScrollObserver.disconnect();

    this.$activeChatArea.classList.toggle('d-none', false);
    this.$emptyChat.classList.toggle('d-none', true);

    const { avatar = null } = State.chats.find(({ id }) => id === friend.id) || {};

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

      this.$activeChatMessagesList.innerHTML = '';
    } else {
      this.$activeChatEmptyConversationArea.classList.toggle('d-none', true);
      this.$activeChatConversationArea.classList.toggle('d-none', false);

      this.$activeChatMessagesList.innerHTML = messages.reduce((html, message) => html + Templater.chatMessage(message), '');
    }

    this.$activeChatMessagesList.querySelectorAll('.message:not(.message--mine)').forEach(($message) => {
      this._messagesScrollObserver.observe($message);
    });
  },

  setOngoingMessage(message) {
    this.$messageInput.value = message;
  },

  setProfileModalData(data) {
    if (!data) {
      return;
    }

    const { id, avatar, name, role, country, blocked } = data;

    this.$userProfileModalAvatar.src = Statics.user(id).avatar(avatar);
    this.$userProfileModalName.textContent = name || Messages['no-name'];
    this.$userProfileModalRole.textContent = role || Messages['no-role'];
    this.$userProfileModalCountry.textContent = country || Messages['no-country'];

    const isFriend = !!State.chats.find((({ id: friendId }) => friendId === id));
    if (isFriend) {
      this.$userProfileModalUnfriendBtn.style.display = 'inline-block';
      this.$userProfileModalBlockBtn.style.display = 'inline-block';
    } else {
      this.$userProfileModalUnfriendBtn.style.display = 'none';
      this.$userProfileModalBlockBtn.style.display = 'none';
    }

    const isBlocked = !!blocked;
    const isBlockedByMe = isBlocked && blocked === window.chat.me;

    const blockBtnText = isBlocked ? isBlockedByMe ? 'Разблокировать' : 'Вы заблокированы' : 'Заблокировать';
    this.$userProfileModalBlockBtn.textContent = blockBtnText;

    if (isBlocked) {
      this.$userProfileModalBlockBtn.classList.remove('btn-danger');
      this.$userProfileModalBlockBtn.classList.add('btn-outline-danger');
      this.$userProfileModalBlockBtn.disabled = !isBlockedByMe;
    } else {
      this.$userProfileModalBlockBtn.classList.add('btn-danger');
      this.$userProfileModalBlockBtn.classList.remove('btn-outline-danger');
      this.$userProfileModalBlockBtn.disabled = false;
    }
  },

  setProfileModalOpen(isOpen) {
    const action = isOpen ? 'show' : 'hide';
    $('#user-profile-modal').modal(action);
  },

  scrollChatToBottom({ checkCurrentPosition = false } = {}) {
    if (checkCurrentPosition && this.$activeChatMessagesList.scrollTop + this.$activeChatMessagesList.clientHeight - this.$activeChatMessagesList.scrollHeight <= 20) {
      this.scrollChatToBottom();
    }

    this.$activeChatMessagesList.scrollTo(0, this.$activeChatMessagesList.scrollHeight);
  },

  setLoading(isLoading) {
    [...document.getElementsByClassName('skeleton')].forEach(($skeleton) => {
      $skeleton.classList.toggle('animated-background', isLoading);
    });

    [...document.getElementsByClassName('skeleton-hide')].forEach(($skeletonHide) => {
      $skeletonHide.classList.toggle('d-none', isLoading);
    });
  },

  _onMessagesScroll(messages, observer) {
    const $messages = messages.map(({ target }) => target);

    $messages.forEach(observer.unobserve.bind(observer));

    const messageIds = $messages.map(($message) => Number($message.dataset.id));
    const unreadMessageIds = messageIds.filter((id) => {
      const message = State.activeChatData.messages.find(({ chat_id: chatId }) => chatId === id);

      return message && !message.read;
    });

    if (unreadMessageIds.length > 0) {
      socket.emit('read', unreadMessageIds, State.activeChat);
    }
  },
};

Renderer._init();
