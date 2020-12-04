'use strict';

let webrtcPhone = (() => {

  const DEBUG = true;
  let server;
  let url;
  let password;
  let exten;
  let phone;
  let name;
  let counterpartNum;
  let rtcSession;
  let socket;
  let remoteStreamAudio;

  let initAndLogin = data => {
    if (DEBUG) {
      JsSIP.debug.enable('JsSIP:*');
    } else {
      JsSIP.debug.disable('JsSIP:*');
    }
    remoteStreamAudio = $('#' + data.audioId).get(0);
    name = data.name;
    exten = data.exten;
    server = data.server;
    password = data.password;
    url = 'wss://' + server + ':8089/ws';
    try {
      socket = new JsSIP.WebSocketInterface(url);
    } catch (error) {
      console.error(error);
      return;
    }
    let configuration = {
      realm: server,
      sockets: [socket],
      password: password,
      display_name: name,
      uri: 'sip:' + exten + '@' + server,
      no_answer_timeout: 10,
      user_agent: 'sip client JsSIP',
      authorization_user: exten,
      contact_uri: 'sip:' + exten + '@' + server,
      registrar_server: server
    };
    try {
      phone = new JsSIP.UA(configuration);
    } catch (error) {
      console.error(error);
      return;
    }
    phone.on('connecting', e => {
      console.log('connecting...');
      console.log(e);
    });
    phone.on('connected', e => {
      console.log('connected');
      console.log(e);
    });
    phone.on('disconnected', e => {
      console.log('disconnected');
      console.log(e);
    });
    phone.on('registered', e => {
      console.log('registered');
      console.log(e);
      $(document).trigger('registered');
    });
    phone.on('unregistered', e => {
      console.log('unregistered');
      console.log(e);
      $(document).trigger('unregistered');
    });
    phone.on('registrationFailed', e => {
      console.log('registrationFailed');
      console.log(e);
    });
    // commented because default using of re-register function
    // phone.on('registrationExpiring', e => {
    //   console.log('registrationExpiring');
    //   console.log(e);
    // });
    phone.on('sipEvent', e => {
      console.log('sipEvent');
      console.log(e);
    });
    phone.on('newMessage', e => {
      console.log('newMessage');
      console.log(e);
    });
    phone.on('newRTCSession', e => {
      console.log('newRTCSession');
      console.log(e);














      rtcSession = e.session;
      rtcSession.on('peerconnection', e => {
        console.log('peerconnection');
        console.log(e);
      });
      rtcSession.on('connecting', e => {
        console.log('rtcSession connecting');
        console.log(e);
      });
      rtcSession.on('sending', e => {
        console.log('sending');
        console.log(e);
      });
      rtcSession.on('progress', e => {
        console.log('progress');
        console.log(e);
        $(document).trigger('calling');
      });
      rtcSession.on('accepted', e => {
        console.log('accepted');
        console.log(e);
        $(document).trigger('callaccepted');
      });
      rtcSession.on('confirmed', e => {
        console.log('confirmed');
        console.log(e);
        console.log(rtcSession);
        console.log(remoteStreamAudio);
        remoteStreamAudio.srcObject = rtcSession.connection.getRemoteStreams()[0];
        $(document).trigger('callaccepted');
      });
      rtcSession.on('ended', e => {
        console.log('ended');
        console.log(e);
        $(document).trigger('hangup');
      });
      rtcSession.on('failed', e => {
        console.log('failed');
        console.log(e);
        phone.terminateSessions();
        $(document).trigger('hangup');
      });
      rtcSession.on('newDTMF', e => {
        console.log('newDTMF');
        console.log(e);
      });
      rtcSession.on('newInfo', e => {
        console.log('newInfo');
        console.log(e);
      });
      rtcSession.on('hold', e => {
        console.log('hold');
        console.log(e);
      });
      rtcSession.on('unhold', e => {
        console.log('unhold');
        console.log(e);
      });
      rtcSession.on('muted', e => {
        console.log('muted');
        console.log(e);
      });
      rtcSession.on('unmuted', e => {
        console.log('unmuted');
        console.log(e);
      });
      rtcSession.on('reinvite', e => {
        console.log('reinvite');
        console.log(e);
      });
      rtcSession.on('update', e => {
        console.log('update');
        console.log(e);
      });
      rtcSession.on('refer', e => {
        console.log('refer');
        console.log(e);
      });
      rtcSession.on('replaces', e => {
        console.log('replaces');
        console.log(e);
      });
      rtcSession.on('sdp', e => {
        console.log('sdp');
        console.log(e);
      });
      rtcSession.on('icecandidate', e => {
        console.log('icecandidate');
        console.log(e);
      });
      rtcSession.on('getusermediafailed', e => {
        console.log('getusermediafailed');
        console.log(e);
      });
      rtcSession.on('peerconnection:createofferfailed', e => {
        console.log('peerconnection:createofferfailed');
        console.log(e);
      });
      rtcSession.on('peerconnection:createanswerfailed', e => {
        console.log('peerconnection:createanswerfailed');
        console.log(e);
      });
      rtcSession.on('peerconnection:setlocaldescriptionfailed', e => {
        console.log('peerconnection:setlocaldescriptionfailed');
        console.log(e);
      });
      rtcSession.on('peerconnection:setremotedescriptionfailed', e => {
        console.log('peerconnection:setremotedescriptionfailed');
        console.log(e);
      });












      if (e.originator === 'remote') {
        $(document).trigger('incomingcall', counterpartNum);
      }
    });
    phone.start();
  };

  let logout = () => {
    // phone.unregister();
    phone.stop(); // includes phone.unregister()
  };

  let call = (to, video) => {
    let options = {
      mediaConstraints: {
        audio: true,
        video: video
      },
      pcConfig: {
        iceServers: []
        // iceServers: [{ 'url': 'stun:stun1.l.google.com' }]
      },
      rtcpMuxPolicy: 'negotiate',
      rtcOfferConstraints: {
        'offerToReceiveAudio': true
      },
      mandatory: [{
          OfferToReceiveAudio: true,
          OfferToReceiveVideo: true
        },
        {
          'DtlsSrtpKeyAgreement': true
        }
      ]
    };
    counterpartNum = to;
    try {
      rtcSession = phone.call('sip:' + to + '@' + server, options);
    } catch (error) {
      console.error(error);
    }
  };

  let answer = () => {
    try {
      let options = {
        mediaConstraints: {
          audio: true,
          video: false
        }
      };
      rtcSession.answer(options);
      $(document).trigger('callaccepted');
    } catch (error) {
      console.error(error);
    }
  };

  let hangup = e => {
    phone.terminateSessions();
    $(document).trigger('hangup');
  };

  let getCounterpartNum = () => {
    return rtcSession.remote_identity._uri._user;
  };

  let getRTCSession = () => {
    return rtcSession;
  };

  return {
    call: call,
    logout: logout,
    answer: answer,
    hangup: hangup,
    initAndLogin: initAndLogin,
    getRTCSession: getRTCSession,
    getCounterpartNum: getCounterpartNum
  };

})();