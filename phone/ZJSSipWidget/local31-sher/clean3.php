<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\eyuf\SIPMLItem;
use zetsoft\system\Az;

if (!isset($item)) {
    $item = new SIPMLItem();
    $item->impu = '@10.10.3.31:5060';
    $item->impi = '400';
    $item->password = 400;
    $item->websocket_proxy_url = 'wss://zoft.uz:8089/ws';
    $item->keypad = true;
}

?>
<link rel="stylesheet" href="/render/phone/ZSipml5Widget/fayzullo/css/light2.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jssip/3.1.2/jssip.min.js"></script>


<div class="no_pad">
    <div class="phone">
        <div class="number text-center border">
            <div class="mb-2 mt-2 control_btn">
                <button id="callButton" class="btn btn-md btnCall btn1 py-2" title="Call">
                    <i class="fa fa-phone fa-2x text-success"></i>
                </button>
                <button id="answerButton" class="btn btn-md answerButton btn1 py-2" title="Call">
                    <i class="fa fa-phone fa-2x text-dark"></i>
                </button>
                <button class="btn btn-md btnHangUp btn1 hangupBtn py-2 " id="btnHangUp" title="Hangup">
                    <i class="fas red-ic  fa-phone-slash fa-2x"></i>
                </button>

            </div>
            <div class="ml-4 mr-4">
                <div id="txtCallStatus" class="h-25"></div>
                <div id="txtRegStatus"></div>

                <div class=" md-form input-with-post-icon">
                    <i class="fas fa-user fa-2x input-prefix text-center"></i>
                    <input type="text" id="txtPhoneNumber" class="form-control text-dark text-center">
                    <label for="txtPhoneNumber"></label>
                </div>
            </div>
            <div class="buuton-goup <?= $item->keypad ? '' : 'd-none' ?> mb-lg-4 mb-3">
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="1">1</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="2">2</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="3">3</a>
                <br>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="4">4</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="5">5</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="6">6</a>
                <br>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="7">7</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="8">8</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="9">9</a>
                <br>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="+">+</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-glow" value="0">0</a>
                <a type="button" class="btn-floating backspace-btn mx-1 hvr-glow" value="c">
                    <i class="fas red-ic fa-backspace"></i></a>

            </div>
        </div>
    </div>
</div>


<audio id="ringing" src="/render/phone/ZWebrtcPhoneWidget/demo/sounds/ringing.mp3" loop></audio>
<audio id="calling" src="/render/phone/ZWebrtcPhoneWidget/demo/sounds/calling.mp3" loop></audio>

<script>

    /*function ringtone(key){
        let ringPlay = $('#ringing');
        let ringCall = $('#calling');


        if (key == 'ringing'){
            console.log(key);
            ringCall.pause();
            ringPlay.play();
        }
        if (key == 'calling'){
            console.log(key);
            ringPlay.pause();
            ringCall.play();
        }
        if (key == 'pause') {
            console.log(key);
            ringPlay.pause();
            ringCall.pause();
        }

    }*/


    $('.number-btn').on("click", function () {
        var numberBtnVal = $(this).html();
        dis(numberBtnVal);
    })

    $('.backspace-btn').on("click", function () {
        clr();
    })

    function dis(val) {
        console.log('clicked');
        document.getElementById("txtPhoneNumber").value += val
        //console.log($('#txtPhoneNumber').val());
    }


    function clr() {
        document.getElementById("txtPhoneNumber").value = ""
    }

    let callButton = document.querySelector('.callButton'), // Нахожу кнопку Call
        hangUpButton = document.querySelector('.hangUpButton'),  // Нахожу кнопку Hangup
        answerButton = document.querySelector('.answerButton'),  // Нахожу кнопку Answer
        txtPhoneNumber = document.querySelector('#txtPhoneNumber');
    txtRegStatus = document.getElementById('txtRegStatus');
    calling = document.getElementById('calling');
    ringing = document.getElementById('ringing');

    var options = {
        'mediaConstraints': {'audio': true, 'video': false},
        'pcConfig': {
            'rtcpMuxPolicy': 'require',
            'iceServers': []
        },
        'rtcOfferConstraints': {
            'offerToReceiveAudio': 1, // Принимаем только аудио
            'offerToReceiveVideo': 0
        }
    };

    var socket = new JsSIP.WebSocketInterface('<?=$item->websocket_proxy_url?>');

    //Create HTML Audio Object
    var remoteAudio = new window.Audio()
    remoteAudio.autoplay = true;

    const mediaSource = new MediaSource();

    var selfView = document.getElementById('selfView');
    var remoteView = document.getElementById('remoteView');


    var userAgent = JsSIP.version;
    console.log(socket);

    /**/

    var configuration = {
        'uri': 'sip:<?= $item->impi . $item->impu?>',
        'password': <?=$item->password?>, // FILL PASSWORD HERE,
        'sockets': [socket],
        'register_expires': 5,
        'session_timers': false,
        'user_agent': 'JsSip-' + userAgent
    };

    var user = configuration.uri;
    var pass = configuration.password;
    var phone;
    if (user && pass) {
        /*JsSIP.debug.enable('JsSIP:*');*/
        phone = new JsSIP.UA(configuration);
        phone.on('registrationFailed', function (ev) {
            alert('Registering on SIP server failed with error: ' + ev.cause);
            configuration.uri = null;
            configuration.password = null;
        });

        phone.on('newRTCSession', (data) => {
            var newSession = data.session;


            if (session) { // hangup any existing call
                console.log('hangup any existing call ');
                session.terminate();
                phone.stop();
            }
            session = newSession;
            var completeSession = function () {

                console.log('completeSession');
                console.log('terminated');
                txtRegStatus.innerHTML = 'Call ended';
                setTimeout(function () {
                    txtRegStatus.innerHTML = 'Connected';
                }, 2000);
                callButton.disabled = false;
                answerButton.disabled = false;
                calling.pause();
                session = null;
            };
            let ringPlay = $('#ringing'); //рингтоне
            let ringCall = $('#calling'); //гудки

            var playingRingtone = function () {
                console.log('playingRingtone');

                ringCall.pause();
                ringPlay.play();
            }
            var playingCalling = function () {
                console.log('playingCalling');
                ringPlay.pause();
                ringCall.play();
            }
            var playingPause = function () {
                console.log('playingPause');
                ringCall.pause();
                ringPlay.pause();
            }

            /*function completeSessionFunc(key) {
                console.log('Call ' + key);
                txtRegStatus.innerHTML = 'Call ' + key ;
                callButton.disabled = false;
                session = null;



            }
*/
            function cnslg(key) {
                console.log(key);
            }


            if (session.direction == 'outgoing') {
                console.log('stream outgoing  -------->');
                txtRegStatus.innerHTML = 'Outgoing call';
                callButton.disabled = true;
                answerButton.disabled = true;


                session.on('connecting', function (e) {
                    console.log('CONNECT');
                });
                session.on('peerconnection', function (e) {
                    console.log('1accepted');
                });
                session.on('sending', function (e) {
                    console.log('sending');
                });
                session.on('progress', function (e) {
                    //ringtone('ringing');
                    calling.play();
                    console.log('progress');
                });
                session.on('newDTMF', function (e) {
                    console.log('newDTMF');
                });
                session.on('newInfo', function (e) {
                    console.log('newInfo');
                });
                session.on('hold', function (e) {
                    console.log('hold');
                });
                session.on('unhold', function (e) {
                    console.log('unhold');
                });
                session.on('muted', function (e) {
                    console.log('muted');
                });
                session.on('unmuted', function (e) {
                    console.log('unmuted');
                });
                session.on('reinvite', function (e) {
                    //Протестить эту вещь очень важно
                    console.log('reinvite');
                });
                session.on('update', function (e) {
                    //Протестить эту вещь тоже очень  важно
                    console.log('update');
                });
                session.on('refer', function (e) {
                    //Протестить эту вещь тоже очень  важно
                    console.log('refer');
                });
                session.on('replaces', function (e) {
                    //Протестить эту вещь тоже очень  важно
                    console.log('replaces');
                });
                session.on('sdp', function (e) {
                    //Протестить эту вещь тоже очень  важно
                    console.log('sdp');

                });

                session.on('ended', completeSession);
                session.on('failed', completeSession);
                session.on('accepted', function (e) {
                    console.log('accepted');
                    txtRegStatus.innerHTML = 'In call';
                    calling.pause();
                });
                session.on('confirmed', function (e) {
                    console.log('CONFIRM STREAM');
                });
            } else if (session.direction == 'incoming') {
                console.log('stream incoming  -------->');
                txtRegStatus.innerHTML = 'Incoming Call';
                session.on('connecting', function () {
                    console.log('CONNECT');
                });
                session.on('peerconnection', function (e) {
                    console.log('1accepted');
                    txtRegStatus.innerHTML = 'In Call';
                    calling.pause();
                });
                session.on('sending', function (e) {
                    console.log('sending');
                });
                session.on('progress', function (e) {
                    console.log('progress');
                    ringing.play();
                });
                session.on('newDTMF', function (e) {
                    console.log('newDTMF');
                });
                session.on('newInfo', function (e) {
                    console.log('newInfo');
                });
                session.on('hold', function (e) {
                    console.log('hold');
                });
                session.on('unhold', function (e) {
                    console.log('unhold');
                });
                session.on('muted', function (e) {
                    console.log('muted');
                });
                session.on('unmuted', function (e) {
                    console.log('unmuted');
                });
                session.on('reinvite', function (e) {
                    //Протестить эту вещь очень важно
                    console.log('reinvite');
                });
                session.on('update', function (e) {
                    //Протестить эту вещь тоже очень  важно
                    console.log('update');
                });
                session.on('refer', function (e) {
                    //Протестить эту вещь тоже очень  важно
                    console.log('refer');
                });
                session.on('replaces', function (e) {
                    //Протестить эту вещь тоже очень  важно
                    console.log('replaces');
                });
                session.on('sdp', function (e) {
                    //Протестить эту вещь тоже очень  важно
                    console.log('sdp');
                });

                session.on('ended', completeSession);
                session.on('failed', completeSession);
                session.on('accepted', function (e) {
                    console.log('accepted')
                });
                session.on('confirmed', function (e) {
                    console.log('CONFIRM STREAM');
                });

                //Поднимаем трубку при нажатии на кнопку Answer
                answerButton.addEventListener('click', function () {
                    newSession.answer(options);
                    console.log(session.connection)
                    console.log(session.connection.stream);
                    ringing.pause()
                    add_stream()


                });
            }


            // if(session.direction === 'incoming'){
            //     console.log('stream incoming  -------->');
            // session.on('connecting', function() {
            //     console.log('CONNECT');
            //                 });
            // session.on('peerconnection', function (event) {
            //     console.log('1accepted');
            //     add_stream();
            //                 });
            // session.on('ended', completeSession);
            // session.on('failed', completeSession);
            // session.on('accepted',function (event) {
            //     console.log('accepted')
            //                 });
            // session.on('confirmed',function (event){
            //     console.log('CONFIRM STREAM');
            //                 });
            //                 var options = {
            // 'mediaConstraints' : { 'audio': true, 'video': true },
            // 'pcConfig': {
            //   'rtcpMuxPolicy': 'require',
            //   'iceServers': [
            //                                         ]
            //                                 },
            //                         };

            //     console.log('Incoming Call');
            //     session.answer(options);
            //    }
        });
        phone.on('connecting', (data) => {
            // let session = data.session;

            console.log('connecting');
            txtRegStatus.innerHTML = 'Connecting';
        });
        phone.on('connected', (data) => {
            //let session = data.session;

            console.log('connected');
            txtRegStatus.innerHTML = 'Connected';
        });
        phone.on('disconnected', (data) => {
            //let session = data.session;

            console.log('disconnected');
            txtRegStatus.innerHTML = 'Disconnected';

        });
        phone.on('registered', (data) => {
            //let session = data.session;

            console.log('registered')
        });
        phone.on('unregistered', (data) => {
            // let session = data.session;

            console.log('unregistered')
        });
        phone.on('registrationFailed', (data) => {
            // let session = data.session;

            console.log('registrationFailed');
            txtRegStatus.innerHTML = 'Registration failed';
        });
        phone.on('registrationExpiring', (data) => {

            //    let session = data.session;

            console.log('registrationExpiring')
        });
        phone.on('newMessage', (data) => {
            // let session = data.session;

            console.log('newMessage')
        });
        phone.start();
    }

    var session;

    function jssipCall() {

        callButton.addEventListener('click', function () {
            phone.call('sip:' + txtPhoneNumber.value + '<?=$item->impu?>', options)
            add_stream();
        });

    }


    function add_stream() {
        console.log(session);
        session.connection.addEventListener('addstream', function (e) {
            remoteAudio.srcObject = (e.stream);
            // remoteView.srcObject = (e.stream);
            // selfView.srcObject = (session.connection.getLocalStreams()[0]);
            //remoteView.srcObject = (session.connection.getRemoteStreams()[0]);
        })
    }


    //сбрасываем звонок при нажатии на HangUP
    hangUpButton.addEventListener('click', function () {
        phone.terminateSessions();
        ringing.pause();
        calling.pause();
    });

    // Отправка сообщений


</script>
