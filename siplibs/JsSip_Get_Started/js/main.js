// ----------------------------------------------- Мои переменные --------------------------------------------

let callButton    = document.querySelector('.callButton'), // Нахожу кнопку Call
hangUpButton  = document.querySelector('.hangUpButton'),  // Нахожу кнопку Hangup
answerButton  = document.querySelector('.answerButton'),  // Нахожу кнопку Answer
inputNumber   = document.querySelector('#inputNumber');  // Нахожу инпут для звонкапо ID InputNumber
logInDiv      = document.querySelector('.logIn');// Нахожу div авторизации 
loginUri      = document.querySelector('#uri');  // Нахожу инпут  URI по ID uri
uriSecret     = document.querySelector('#secret');  // Нахожу инпут  Secret по ID secret
buttonAuth    = document.querySelector('#button_auth');  // Нахожу кнопку button_auth  по ID для авторизации 






// Create our JsSIP instance and run it:
var socket = new JsSIP.WebSocketInterface('wss://zoft.uz:8089/ws');
var configuration = {
sockets  : [ socket ],
uri      : 'sip:204@94.158.52.244:7777',
password : '204'
};

var ua = new JsSIP.UA(configuration);

console.log(ua);

ua.start();
var remoteAudio = new window.Audio()
remoteAudio.autoplay = true;

const mediaSource = new MediaSource();


// Это встроенный объект его нужно переназначить (сюда должны идут потоки видео свои и собеседника)
//var views = {
//        'selfView' : document.getElementById('my-video'),
//        'remoteView' : document.getElementById('peer-video'),
//        'remoteAudio': document.getElementById('peer-audio')
//    };
var selfView = document.getElementById('selfView');
var remoteView = document.getElementById('remoteView');

// Register callbacks to desired call events
var eventHandlers = {
'connecting': function(e) {
    console.log('connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting connecting')
    console.log(e);
    
},
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
    
                
    //selfView.src = window.URL.createObjectURL(session.connection.getLocalStreams()[0]);
},
'addstream':  function(e) {
    //var stream = e.stream;

    // Attach remote stream to remoteView
    //remoteView.src = window.URL.createObjectURL(stream);
},
'ended':      function(e){ /* Your code here */ }
};

var options = {
'eventHandlers'    : eventHandlers,
'extraHeaders': [ 'X-Foo: foo', 'X-Bar: bar' ],
'pcConfig': {
'rtcpMuxPolicy': 'require',
'iceServers': [
                                    ]
                            },
                    };
// pcConfig:
// {
//     hackStripTcp: true, // Важно для хрома, чтоб он не тупил при звонке
//     rtcpMuxPolicy: 'negotiate', // Важно для хрома, чтоб работал multiplexing. Эту штуку обязательно нужно включить на астере.
//     iceServers: []
// },
// mediaConstraints:
// {
//     audio: true, // Поддерживаем только аудио
//     video: true,
// },
// rtcOfferConstraints:
// {
//     offerToReceiveAudio: 1, // Принимаем только аудио
//     offerToReceiveVideo: 1
// }
// };




//var session = ua.call('sip:308@94.158.52.244:7777', options);



// ----------------------------------------------- Мои Функции -----------------------------------------------

ua.on('newRTCSession', (data) => {
var newSession = data.session;
var session = newSession;

console.log("ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE ORGINATE");
console.log(newSession);
console.log(session);


if (newSession.direction == 'incoming'){
    //Поднимаем трубку при нажатии на кнопку Answer 
    answerButton.addEventListener('click', function(){
        newSession.answer(options);
        console.log(session.connection);
        add_stream(session);
    });              
}
});
function add_stream(sessionKey, stream){
console.log("add Stream func")
console.log(sessionKey);
var copySession = sessionKey ; 
sessionKey.connection.addEventListener('addstream',function(e) {
    let peerconnection = this.copySession;
    let localStream = stream;
    console.log("MediaStream")
    console.log(MediaStream[1]);
    console.log("end media stream");

    remoteAudio.srcObject = (e.stream);
    remoteView.srcObject = (e.stream);
    selfView.srcObject = (sessionKey.getLocalStreams()[0]);
})


};




//Создаем звонок при нажатии на кнопку Call на номер из инпута 
callButton.addEventListener('click',function(){
console.log(inputNumber.value);

console.log(ua);
ua.call('sip:' + inputNumber.value + '@94.158.52.244:7777', options)
});

//сбрасываем звонок при нажатии на HangUP 
hangUpButton.addEventListener('click', function(){
ua.terminateSessions()

});

















console.log("hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world ");
console.log(remoteView.srcObject);