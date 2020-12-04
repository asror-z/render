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

if(!isset($item)){
    $item = new SIPMLItem();
    $item->impu = '@10.10.3.31:5060';
    $item->impi = '403';
    $item->password = 403;
    $item->websocket_proxy_url = 'wss://zoft.uz:8089/ws';
    $item->keypad = true;
}

?>
<link rel="stylesheet" href="/render/phone/ZSipml5Widget/fayzullo/css/light2.css">
<script src="https://jssip.net/download/releases/jssip-3.5.1.min.js"></script>


<div class="no_pad">
    <div class="main_block">
        <div class="block_item">
            <div class="right_block">
                <div class="number text-center border w-10">
                    <div class="mb-2 mt-2 control_btn">
                        <button id="callButton" class="btn btnCall callButton btn1 py-2" title="Call">
                            <i class="fa fa-phone fa-2x text-success"></i>
                        </button>
                        <!--<button id="answerButton" class="btn btnCall answerButton btn1 py-2" title="Call">
                            <i class="fa fa-phone fa-2x text-dark"></i>
                        </button>-->
                        <button class="btn btnHangUp hangUpButton btn1 hangupBtn py-2" id="btnHangUp" title="Hangup">
                            <i class="fas red-ic  fa-phone-slash fa-2x"></i>
                        </button>

                    </div>
                    <div class="ml-4 mr-4">
                        <!--<h6 id="timer">00:00</h6>
                        <script>
                            var timer = document.getElementById("timer");
                            var time = "00:00"
                            var seconds = 0;
                            var minutes = 0;
                            var t;

                            timer.textContent = time;

                            function buildTimer () {
                                seconds++;
                                if (seconds >= 60) {
                                    seconds = 0;
                                    minutes++;
                                    if (minutes >= 60) {
                                        minutes = 0;
                                        seconds = 0;
                                    }
                                }
                                timer.textContent = (minutes < 10 ? "0" + minutes.toString(): minutes) + ":" + (seconds < 10 ? "0" + seconds.toString(): seconds);
                            }
                            function startTimer () {

                                clearTimeout(t);
                                t = setInterval(buildTimer,1000);
                                ;
                            }
                            function resetTimer () {

                                timer.textContent = time;
                                seconds = 0; minutes = 0;
                            };
                            function stopTimer () {
                                clearTimeout(t);

                            }
                        </script>-->
                        <h6 id="timer">00:00</h6>
                        <div id="txtCallStatus" class="h-25"></div>
                        <div id="txtRegStatus"></div>

                <div class=" md-form input-with-post-icon">
                    <i class="fas fa-user fa-2x input-prefix text-center"></i>
                    <input type="number" id="txtPhoneNumber" class="form-control text-dark text-center">
                    <label for="txtPhoneNumber"></label>
                </div>
            </div>
            <div class="buuton-goup <?= $item->keypad ? '' : 'd-none' ?> mb-lg-4 mb-3">
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="1">1</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="2">2</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="3">3</a>
                <br>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="4">4</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="5">5</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="6">6</a>
                <br>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="7">7</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="8">8</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="9">9</a>
                <br>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="+">+</a>
                <a type="button" class="btn-floating pt-3 fp-20 number-btn mx-1 hvr-radial-out" value="0">0</a>
                <a type="button" class="btn-floating backspace-btn mx-1 hvr-radial-out" value="c">
                    <i class="fas red-ic fa-backspace"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<audio id="ringing" src="/render/phone/ZWebrtcPhoneWidget/demo/sounds/ringing.mp3" loop></audio>
<audio id="calling" src="/render/phone/ZWebrtcPhoneWidget/demo/sounds/calling.mp3" loop></audio>

<script>

    /*Timer*/

    var timer = document.getElementById("timer");
    var time = "00:00"
    var seconds = 0;
    var minutes = 0;
    var t;

    timer.textContent = time;

    function buildTimer () {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                seconds = 0;
            }
        }
        timer.textContent = (minutes < 10 ? "0" + minutes.toString(): minutes) + ":" + (seconds < 10 ? "0" + seconds.toString(): seconds);
    }
    function startTimer () {

        clearTimeout(t);
        t = setInterval(buildTimer,1000);

    }
    function resetTimer () {

        timer.textContent = time;
        seconds = 0; minutes = 0;
    }


    let callButton = document.querySelector('#callButton'), // Нахожу кнопку Call
        hangUpButton = document.querySelector('.hangUpButton'),  // Нахожу кнопку Hangup
        txtPhoneNumber = document.querySelector('#txtPhoneNumber');
        txtRegStatus = document.getElementById('txtRegStatus');
        calling = document.getElementById('calling');
        ringing = document.getElementById('ringing');

    function disableBtn(keyBtn){
        keyBtn.disabled = true;
    }

    function enableBtn(keyBtn){
        keyBtn.disabled = false;
    }

    $('.number-btn').on("click", function() {
        var numberBtnVal = $(this).html();
        dis(numberBtnVal);
        enableBtn(callButton);

    })

    $('.backspace-btn').on("click", function() {
        clr();
    })

    function dis(val) {
        console.log('clicked');
        document.getElementById("txtPhoneNumber").value += val
        //console.log($('#txtPhoneNumber').val());
    }

    checkIfEmpty()
    function clr() {
        document.getElementById("txtPhoneNumber").value = "";
        disableBtn(callButton);
    }

    document.body.onkeyup = function () {
        checkIfEmpty()
    }
    document.body.addEventListener('click', function () {
        checkIfEmpty();
        console.log('Check Empty');
    })

    /*window.onmouseup = function () {
        checkIfEmpty()
    }*/

    function checkIfEmpty() {
        if (document.getElementById('txtPhoneNumber').value.length == 0){
            /*txtPhoneNumber.placeholder = "vvedite nomer";*/
        } else  {
            callButton.disabled = false;
        }
    }

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
                txtRegStatus.innerHTML = '<?=Az::l('конец вызова')?>';

                var incomingPhoneNumber = session.remote_identity.display_name;
                var currentId = window.currentId;

                console.log(incomingPhoneNumber);
                

                console.log(currentId);


                var operatorNumber = "<?php echo $item->impi ?>";
                var clientNumber = document.getElementById("txtPhoneNumber").value;


                 var  arrayColumns = [];
                    arrayColumns['scr'] = operatorNumber;
                    arrayColumns['dst']=  clientNumber;

                $.ajax({
                    type: "POST",
                    url: '/api/core/app/cdr.aspx',
                    data:{
                        updateValue: currentId,
                        incomingPhoneNumber: incomingPhoneNumber,
                        modelClassName: 'cdr',
                        update: 'userfield',
                        columns: arrayColumns
                    },
                    success: function (data) {
                        console.log(data);
                    }
                });

                setTimeout(function(){ txtRegStatus.innerHTML = 'Подключено'; }, 2000);
                checkIfEmpty();
                /*enableBtn(answerButton);*/
                calling.pause();
                ringing.pause();
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
                txtRegStatus.innerHTML = '<?=Az::l('Исходящий вызов')?>';
                disableBtn(callButton);





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
                    txtRegStatus.innerHTML = '<?=Az::l('В вызове')?>';
                    calling.pause();
                });
                session.on('confirmed', function (e) {
                    console.log('CONFIRM STREAM');
                });
            }
            else if (session.direction == 'incoming') {

                console.log(session.remote_identity.display_name);
                console.log('session');
                console.log('session');
                console.log('session');
                console.log('session');
                console.log('session');
                console.log('session');

                session.remote_identity.display_name
                console.log('1111111111111111');
                console.log(session.start_time);
                console.log('1111111111111111');

                console.log('stream incoming  -------->');
                var remoteNumber = session.remote_identity.display_name;
                txtRegStatus.innerHTML = '<?=Az::l('Входящий звонок от ')?>'+ remoteNumber;
                enableBtn(callButton);
                session.on('connecting', function () {
                    console.log('CONNECT');
                });
                session.on('peerconnection', function (e) {
                    console.log('1accepted');
                    txtRegStatus.innerHTML = 'В вызове';
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
                /*answerButton.addEventListener('click', function () {
                    newSession.answer(options);
                    console.log(session.connection)
                    console.log(session.connection.stream);
                    ringing.pause()
                    add_stream()


                });*/
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
        phone.on('connecting', (data)=> {
           // let session = data.session;

            console.log('connecting');
            txtRegStatus.innerHTML = '<?=Az::l('Cоединительный')?>';
        });
        phone.on('connected', (data)=> {
            //let session = data.session;

            console.log('connected');
            txtRegStatus.innerHTML = '<?=Az::l('Подключено')?>'
        });
        phone.on('disconnected', (data)=> {
            //let session = data.session;

            console.log('disconnected');
            txtRegStatus.innerHTML = '<?=Az::l('Не подключено')?>';

        });
        phone.on('registered', (data)=> {
            //let session = data.session;

            console.log('registered')
        });
        phone.on('unregistered', (data)=> {
           // let session = data.session;

            console.log('unregistered')
        });
        phone.on('registrationFailed', (data)=> {
           // let session = data.session;

            console.log('registrationFailed');
            txtRegStatus.innerHTML = '<?=Az::l('Регистрация не удалась')?>';
        });
        phone.on('registrationExpiring', function () {
            console.log('registrationExpiring')
            phone.register();
            console.log('phoneregister');
        } );
        phone.on('newMessage', (data)=> {
           // let session = data.session;

            console.log('newMessage')
        });
        phone.start();
    }

    var session;
    
    callButton.addEventListener('click', function () {

        if (session == undefined){
            if (txtPhoneNumber.value == "" ){
                txtPhoneNumber.placeholder = "введите номер";

            } else {
                phone.call('sip:' + txtPhoneNumber.value + '<?=$item->impu?>', options)
                add_stream();
            }


        }
        else if (session.direction == "incoming") {
            session.answer(options);
            console.log(session.connection)
            console.log(session.connection.stream);
            ringing.pause();
            add_stream()
            /*console.log(data.session);*/
        }



    });


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

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        /* display: none; <- Crashes Chrome on hover */
        -webkit-appearance: none;
        margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
    }

    input[type=number] {
        -moz-appearance:textfield; /* Firefox */
    }
</style>
