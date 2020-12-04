window.State = {
  __listeners: [],

  _chats: [],
  _contacts: [],
  _requests: [],
  _activeChat: null,
  _activeChatData: null,
  _ongoingMessages: {},
  _isProfileModalOpen: false,
  _profileModalData: null,
  _isLoading: false,

  set isLoading(value) {
    this.__mutateField('_isLoading', value);
  },

  get isLoading() {
    return this._isLoading;
  },

  set chats(chats) {
    this.__mutateField('_chats', chats);

    if (!chats.find(({ id }) => id === this.activeChat)) {
      this.activeChat = null;
    }

    this._ongoingMessages = Object.fromEntries(
      chats.map(({ id }) => [id, this._ongoingMessages[id] || '']),
    );
  },

  get chats() {
    return this._chats;
  },

  set requests(requests) {
    this.__mutateField('_requests', requests);
  },

  get requests() {
    return this._requests;
  },

  set contacts(contacts) {
    this.__mutateField('_contacts', contacts);
  },

  get contacts() {
    return this._contacts;
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

  set isProfileModalOpen(isOpen) {
    this.__mutateField('_isProfileModalOpen', isOpen);
  },

  get isProfileModalOpen() {
    return this._isProfileModalOpen;
  },

  set profileModalData(data) {
    this.__mutateField('_profileModalData', data);
  },

  get profileModalData() {
    return this._profileModalData;
  },

  get state() {
    return {
      chats: this.chats,
      requests: this.requests,
      contacts: this.contacts,
      activeChat: this.activeChat,
      activeChatData: this.activeChatData,
      ongoingMessages: this._ongoingMessages,
      ongoingMessage: this.getOngoingMessage(),
      isProfileModalOpen: this.isProfileModalOpen,
      profileModalData: this.profileModalData,
      isLoading: this.isLoading,
    };
  },

  reset() {
    this.chats = [];
    this.contacts = [];
    this.ongoingMessages = {};
    this.activeChat = null;
    this.activeChatData = null;
    this.isProfileModalOpen = false;
    this.profileModalData = null;
    this.isLoading = false;
  },

  subscribe(listener, path = null) {
    let transformedListener;

    if (path) {
      transformedListener = (state, previousState) => {
        const pathState = Utils.get(state, path);
        const pathPreviousState = Utils.get(previousState, path);

        if (Utils.deepEquals(pathState, pathPreviousState)) {
          return;
        }

        listener(pathState, pathPreviousState);
      };
    } else {
      transformedListener = (state, previousState) => {
        if (Utils.deepEquals(state, previousState)) {
          return;
        }

        listener(state, previousState);
      };
    }

    this.__listeners.push(transformedListener);
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
