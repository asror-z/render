//window.socket = io(`http://127.0.0.1:${window.chat.port}/chat`);
window.socket = io(`http://${window.chat.ip}:${window.chat.port}/chat`);

State.isLoading = false;

socket.on('connect', () => {
  console.log('Connected successfully!');
  socket.emit('login', window.chat.me);

  State.isLoading = false;
});

socket.on('disconnect', () => {
  console.log('Disconnected!');

  State.reset();
  State.isLoading = true;
});

socket.on('chat-list', (chats) => {
  console.log('chat-list', chats);

  chats = Object.values(chats).map((chat) => ({
    ...chat,
    status: chat.status || 'offline',
  }));

  State.chats = chats;
});

socket.on('requests-list', (requests) => {
  console.log('requests-list', requests);

  State.requests = requests;
});

socket.on('user-list', (users) => {
  console.log('user-list', users);

  State.contacts = Object.values(users);
});

socket.on('chat-click', (payload) => {
  console.log('chat-click', payload);

  if (payload.friend.id !== State.activeChat) {
    return;
  }

  payload.messages = Object.values(payload.messages);
  State.activeChatData = payload;
});

socket.on('new-message', (message) => {
  console.log('new-message', message);
});

socket.on('message-read', (chatId) => {
  console.log('message-read', chatId);
});

socket.on('user-data', (data) => {
  console.log('user-data', data);

  if (data.id !== State.activeChat) {
    return;
  }

  State.profileModalData = data;
});

State.subscribe((isLoading) => {
  Renderer.setLoading(isLoading);
}, 'isLoading');

State.subscribe((chats) => {
  Renderer.chatsList(chats);
}, 'chats');

State.subscribe((requests) => {
  Renderer.requestsList(requests);
}, 'requests');

State.subscribe((contacts) => {
  Renderer.contactsList(contacts);
}, 'contacts');

State.subscribe((activeChat) => {
  if (activeChat === null) {
    Renderer.closeChat();
    Renderer.emptyChat();
    return;
  }

  Renderer.openChat(activeChat);
  socket.emit('chat list', window.chat.me, activeChat);
  socket.emit('user inform', activeChat);
}, 'activeChat');

State.subscribe((activeChatData) => {
  if (activeChatData === null) {
    Renderer.closeChat();
    Renderer.emptyChat();
    return;
  }

  Renderer.chat(activeChatData);
  Renderer.scrollChatToBottom({ checkCurrentPosition: true });
}, 'activeChatData');

State.subscribe((ongoingMessage) => {
  Renderer.setOngoingMessage(ongoingMessage);
}, 'ongoingMessage');

State.subscribe((isProfileModalOpen) => {
  Renderer.setProfileModalOpen(isProfileModalOpen);
}, 'isProfileModalOpen');

State.subscribe((profileModalData) => {
  Renderer.setProfileModalData(profileModalData);
}, 'profileModalData');
