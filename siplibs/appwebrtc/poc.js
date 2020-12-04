SipRTC = function (config) {
  config = config || {};
  var sip_config = config.sip_config || {};
  this.sip_config = {
    sockets: [socket],
     register: true,
    register_expires: 300,
    trace_sip: true,
    stun_servers: [],
    use_preloaded_route: false,
    log: '301' // works only on 'jssip-devel.js'i
  };

  socket = new JsSIP.WebSocketInterface("wss://zoft.uz:8089/ws");
  _ua = new JsSIP.UA(
      {
        uri: "sip:" + this.loginText.val() + "@94.158.52.244:7777",
        password: this.passwordText.val(),
        display_name: this.loginText.val(),
        sockets: [socket]
      });

  if (typeof sip_config.uri === 'string' && sip_config.uri !== '') {
    this.sip_config.uri = sip_config.uri;
    this.sip_config.display_name = sip_config.display_name || "SipRTC_User";
    this.sip_config.password = sip_config.password || '301';
  } else {
    var uid = sip_config.uid || '301';
    this.sip_config.uri = 'sip:'+uid+"@94.158.52.244:7777";
    this.sip_config.display_name = sip_config.display_name || 'SipRTC_'+uid;
    this.sip_config.password = sip_config.password || uid;
  }

  try {
    this.sip = new JsSIP.UA(this.sip_config);
  } catch (e) {
    console.log(e);
    throw(e);
    return this;
  }

  var eventHandlers = config.eventHandlers || {};
  eventHandlers.newRTCSession = eventHandlers.newRTCSession || function(e){console.log(e.data);};
  eventHandlers.connected = eventHandlers.connected || function(e){console.log(e.data);};
  eventHandlers.disconnected = eventHandlers.disconnected || function(e){console.log(e.data);};
  eventHandlers.newMessage = eventHandlers.newMessage || function(e){console.log(e.data);};
  eventHandlers.registered = eventHandlers.registered || function(e){console.log(e.data);};
  eventHandlers.unregistered = eventHandlers.unregistered || function(e){console.log(e.data);};
  eventHandlers.registrationFailed = eventHandlers.registrationFailed || function(e){console.log(e.data);};

  this.sip.on('newRTCSession', (function(e) {
    eventHandlers.newRTCSession(e);
    this.onCall(e);
  }).bind(this));
  this.sip.on('connected', eventHandlers.connected);
  this.sip.on('disconnected', eventHandlers.disconnected);
  this.sip.on('newMessage', eventHandlers.newMessage);
  this.sip.on('registered', eventHandlers.registered);
  this.sip.on('unregistered', eventHandlers.unregistered);
  this.sip.on('registrationFailed', eventHandlers.registrationFailed);
  this.sip.start();
  function VideoView (eid) {
    var self = this;
    this.view = document.getElementById(eid);
    this.on = false;
    this.start = function (session) {
      if (!self.on && session.getLocalStreams().length > 0) {
        self.view.src = window.URL.createObjectURL(session.getLocalStreams()[0]);
        self.view.play();
        self.on = true;
      }
    };
    this.stop = function () {
      if (self.on) {
        self.view.src = "";
        self.view.pause();
        self.on = false;
      }
    };
  }
  this.localVideo = new VideoView('my-video');
  this.remoteVideo = new VideoView('peer-video');
};

SipRTC.prototype.uri = function() {
  return this.sip_config.uri;
};

SipRTC.prototype.onCall = function(evt) { // TODO;
  // var request = evt.data.request;
  var session = evt.data.session;
  this.currentSession = session;
  if (session.direction === 'incoming') {
    console.log("incoming call from " + session.remote_identity.uri.user);
    session.answer({
      mediaConstraints: { audio: true, video: true }
    });
    this.localVideo.start(session);
  }
  session.on('progress', (function (e) {
    console.log("call " + e.type + ":");
    console.log(e.data);
    this.localVideo.start(session);
  }).bind(this));
  session.on('started', (function (e) {
    console.log("call " + e.type + ":");
    console.log(e.data);
    this.localVideo.start(session);
    this.remoteVideo.start(session);
  }).bind(this));
  session.on('failed', function (e) {
    console.log("call " + e.type + ":");
    console.log(e.data);
  });
  session.on('ended', (function (e) {
    console.log("call " + e.type + ":");
    console.log(e.data);
    this.remoteVideo.stop();
  }).bind(this));
};

SipRTC.prototype.sendMessage = function() {
  this.sip.sendMessage.apply(this.sip, arguments);
};

SipRTC.prototype.call = function() {
  this.sip.call.apply(this.sip, arguments);
};

// SipRTC.onXXX%
