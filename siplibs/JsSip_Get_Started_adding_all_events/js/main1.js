let callButton   = document.querySelector('.callButton'), // Нахожу кнопку Call
    hangUpButton = document.querySelector('.hangUpButton'),  // Нахожу кнопку Hangup
    answerButton = document.querySelector('.answerButton'),  // Нахожу кнопку Answer
    inputNumber   = document.querySelector('#inputNumber');  // Нахожу инпут по ID InputNumber

    var views = {
        'selfView': document.getElementById('my-video'),
        'remoteView': document.getElementById('peer-video')
    };

    
// Create our JsSIP instance and run it:

var socket = new JsSIP.WebSocketInterface('wss://zoft.uz:8089/ws');
var configuration = {
  sockets  : [ socket ],
  uri      : 'sip:301@94.158.52.244:7777',
  password : '301'
};

var ua = new JsSIP.UA(configuration);

ua.start();

// Register callbacks to desired call events
var eventHandlers = {
  'progress': function(e) {
    console.log('call is in progress');
  },
  'failed': function(e) {
    console.log('call failed with cause: '+ e.data.cause);
  },
  'ended': function(e) {
    console.log('call ended with cause: '+ e.data.cause);
  },
  'confirmed': function(e) {
    console.log('call confirmed');
  }
};

var options = {
  'eventHandlers'    : eventHandlers,
  'mediaConstraints' : { 'audio': true, 'video': true }
};

var session = ua.call('sip:308@94.158.52.244:7777', options);
