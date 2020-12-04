window.Templater = {
  chatThumbnail({ id, avatar, name, message, status, read }) {
    const statusBemModifiers = {
      online: 'online',
      offline: 'offline',
    };

    const readStatusIconClassName = message === null
      ? ''
      : read
        ? message.from === window.chat.me
          ? 'fal fa-check-double'
          : ''
        : message.from === window.chat.me
          ? 'fal fa-check'
          : 'fas fa-circle text-success';

    return `
      <li class="users-list__item">
        <div class="user-chat media" data-chat-thumbnail="${id}" onclick="State.activeChat = ${id}">
          <img class="user-chat__avatar shadow-sm mr-2" src="${Statics.user(id).avatar(avatar)}" alt="">
          <div class="media-body">
            <h5 class="user-chat__name mb-0">${name === null ? Messages['no-name'] : name}</h5>
            <div class="user-chat__message">
              <p class="mb-0">
                  ${message === null ? Messages['no-messages'] : message.text}
              </p>
              <span class="read-icon ${readStatusIconClassName} ml-2"></span>
            </div>
            <span class="user-chat__status user-chat__status--${statusBemModifiers[status]}">
              ${Messages.statuses[status]}
            </span>
          </div>
        </div>
      </li>
    `;
  },

  chatMessage({ chat_id: chatId, text, time, from, read }) {
    const isMine = from === window.chat.me;
    const { avatar = null, name = null } = State.chats.find(({ id }) => id === from) || {};

    const readIconClassName = read ? 'fal fa-check-double' : 'fal fa-check';

    return `
      <li class="messages-list__item ${isMine ? 'messages-list__item--mine' : ''}">
        <div class="message ${isMine ? 'message--mine' : ''}" data-id="${chatId}">
          ${!isMine ? `<img class="message__avatar shadow-sm mr-2" src="${Statics.user(from).avatar(avatar)}" alt="">` : ''}
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
              ${time ? moment(time).format('lll') : 'Some time'}
              ${isMine ? `| <span class="read-icon ${readIconClassName}"></span>` : ''}
            </div>
          </div>
        </div>
      </li>
    `;
  },

  request({ id, name, status }) {
    const user = State.contacts.find(({ id: userId }) => userId === id) || {};

    return `
      <li class="users-list__item">
        <div class="user-chat media d-flex align-items-center">
          <img
            class="user-chat__avatar shadow-sm"
            src="${Statics.user(id).avatar(user.avatar)}"
            alt=""
            onclick="showUserInfo(${id})"
          >
          <div class="user-chat__body media-body" onclick="showUserInfo(${id})">
            <h5 class="user-chat__name mb-0 ml-2">${name}</h5>
          </div>
          <div class="d-flex">
            <button type="button" class="btn btn-primary rounded-pill px-2 btn-sm" onclick="acceptFriendRequest(${id})">
              Принять
            </button>
            <button type="button" class="btn btn-danger rounded-pill px-2 btn-sm" onclick="rejectFriendRequest(${id})">
              Отклонить
            </button>
          </div>
        </div>
      </li>
    `;
  },

  contact({ id, name, avatar, role, status }) {
    let buttonHtml = null;

    if (status === 'none') {
      buttonHtml = `
        <button type="button" class="btn btn-primary rounded-pill px-2 btn-sm" onclick="sendFriendRequest(${id})">
          Отправить приглашение
        </button>
      `;
    } else if (status === 'await') {
      buttonHtml = `
        <button type="button" class="btn btn-outline-primary rounded-pill px-2 btn-sm" onclick="cancelFriendRequest(${id})">
          Отправлено
        </button>
      `;
    } else if (status === 'accepted') {
      buttonHtml = `
        <span class="fp-14">Вы друзья</span>
      `;
    } else if (status === 'rejected') {
      buttonHtml = `
        <button class="btn btn-outline-danger rounded-pill px-2 btn-sm" disabled>
          Отказано
        </button>
      `;
    }

    return `
      <li class="users-list__item">
        <div class="user-chat media d-flex align-items-center">
          <img
            class="user-chat__avatar shadow-sm"
            src="${Statics.user(id).avatar(avatar)}" alt=""
            onclick="showUserInfo(${id})"
          >
          <div class="user-chat__body media-body" onclick="showUserInfo(${id})">
            <h5 class="user-chat__name mb-0 ml-2">${name || Messages['no-name']}</h5>
          </div>
          <div class="d-flex">
            ${buttonHtml}
          </div>
        </div>
      </li>
    `;
  },
};

function showUserInfo(id) {
  State.profileModalData = State.contacts.find(({ id: userId }) => userId === id);
  State.isProfileModalOpen = true;
}

function sendFriendRequest(id) {
  socket.emit('request', window.chat.me, id, 'new');
}

function cancelFriendRequest(id) {
  socket.emit('request', window.chat.me, id, 'cancel');
}

function acceptFriendRequest(id) {
  socket.emit('request', window.chat.me, id, 'accept');
}

function rejectFriendRequest(id) {
  socket.emit('request', window.chat.me, id, 'reject');
}
