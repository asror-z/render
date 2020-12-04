<link rel="stylesheet" href="/render/phone/ZSipml5Widget/fayzullo/css/light.css">

<div class="no_pad">
    <div class="main_block mt-5">
        <div class="block_item or2">
            <div class="right_block">
                <div class="mt-3">
                    <div class="number text-center border w-10">
                        <div class="mb-2 mt-2 control_btn">
                            <button id="callButton" class="btn btnCall callButton btn1 py-2" title="Call">
                                <i class="fa fa-phone fa-2x text-success"></i>
                            </button>
                            <button id="answerButton" class="btn btnCall answerButton btn1 py-2" title="Call">
                                <i class="fa fa-phone fa-2x text-dark"></i>
                            </button>
                            <button class="btn btnHangUp hangUpButton btn1 hangupBtn py-2" id="btnHangUp" title="Hangup">
                                <i class="fas red-ic  fa-phone-slash fa-2x"></i>
                            </button>
                            
                        </div>
                        <div class="ml-4 mr-4">
                            <div id="txtCallStatus" class="h-25"></div>
                            <div id="txtRegStatus"></div>

                            <div class=" md-form input-with-post-icon mt-lg-1">
                                <i class="fas fa-user fa-2x input-prefix text-center "></i>
                                <input type="text" id="inputNumber" class="form-control text-dark text-center fp-25">
                                <label for="inputNumber"></label>
                            </div>
                        </div>
                        <div class="buuton-goup mb-lg-4 mb-3">
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="1">1</a>
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="2">2</a>
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="3">3</a>
                            <br>
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="4">4</a>
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="5">5</a>
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="6">6</a>
                            <br>
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="7">7</a>
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="8">8</a>
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="9">9</a>
                            <br>
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="+">+</a>
                            <a type="button" class="btn-floating pt-2 fp-20 number-btn" value="0">0</a>
                            <a type="button" class="btn-floating backspace-btn" value="c">
                                <i class="fas red-ic fa-backspace"></i></a>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


</div>

<audio id="audio_remote" autoplay="autoplay"></audio>
<audio id="ringtone" loop src="#"></audio>
<audio id="ringbacktone" loop src="#"></audio>
<audio id="dtmfTone" src="#"></audio>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jssip/3.1.2/jssip.min.js"></script>
<!-- <script src="jssip-3.4.6.js"> </script> -->
<script>

    $('.number-btn').on("click", function() {
        var numberBtnVal = $(this).html();
        dis(numberBtnVal);
    })

    $('.backspace-btn').on("click", function() {
        clr();
    })

    function dis(val) {
        console.log('clicked');
        document.getElementById("inputNumber").value += val
        //console.log($('#txtPhoneNumber').val());
    }


    function clr() {
        document.getElementById("txtPhoneNumber").value = ""
    }

    let callButton = document.querySelector('.callButton'), // Нахожу кнопку Call
        hangUpButton = document.querySelector('.hangUpButton'),  // Нахожу кнопку Hangup
        answerButton = document.querySelector('.answerButton'),  // Нахожу кнопку Answer
        inputNumber = document.querySelector('#inputNumber');  // Нахожу инпут для звонкапо ID InputNumber
        /*logInDiv = document.querySelector('.logIn'),// Нахожу div авторизации
        loginUri = document.querySelector('#uri'),  // Нахожу инпут  URI по ID uri
        uriSecret = document.querySelector('#secret'),  // Нахожу инпут  Secret по ID secret
        buttonAuth = document.querySelector('#button_auth'),  // Нахожу кнопку button_auth  по ID для авторизации
        inputNumberMsg = document.querySelector('#inputNumberMsg'),  // инпут для ввода номера получателя
        inputTextMsg = document.querySelector('#inputTextMsg'),  // инпут для ввода текста для получателя
        sendMsgButton = document.querySelector('#sendMsgButton');  // кнопка для отправки сообщения*/

    var options = {
        'mediaConstraints': {'audio': true, 'video': false},
        'pcConfig': {
            'rtcpMuxPolicy': 'require',
            'iceServers': []
        },
        'rtcOfferConstraints': {
            'offerToReceiveAudio': 1, // Принимаем только аудио
            'offerToReceiveVideo': 1
        }
    };


    var socket = new JsSIP.WebSocketInterface('wss://10.10.3.31:5060/ws');



    //Create HTML Audio Object
    var remoteAudio = new window.Audio()
    remoteAudio.autoplay = true;

    const mediaSource = new MediaSource();

    var selfView = document.getElementById('selfView');
    var remoteView = document.getElementById('remoteView');

    var user = "${{USERNAME}}";
    var pass = "${{PASSWORD}}";

    var userAgent = JsSIP.version;
    console.log(socket);

    console.log('12345sip:%s@${{SERVER}}', user);

    var configuration = {
        'uri': 'sip:304@10.10.3.31',
        'password': 304, // FILL PASSWORD HERE,
        'sockets': [socket],
        'register_expires': 180,
        'session_timers': false,
        'user_agent': 'JsSip-' + userAgent
    };

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
                session.terminate();
                phone.stop();
            }
            session = newSession;
            var completeSession = function () {
                session = null;
            };


            if (session.direction == 'outgoing') {
                console.log('stream outgoing  -------->');
                session.on('connecting', function () {
                    console.log('CONNECT');
                });
                session.on('peerconnection', function (e) {
                    console.log('1accepted');
                });
                session.on('sending', function (e) {
                    console.log('sending');
                });
                session.on('progress', function (e) {
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
                    console.log('accepted')
                });
                session.on('confirmed', function (e) {
                    console.log('CONFIRM STREAM');
                });
            }
            else if (newSession.direction == 'incoming') {
                console.log('stream incoming  -------->');
                session.on('connecting', function () {
                    console.log('CONNECT');
                });
                session.on('peerconnection', function (e) {
                    console.log('1accepted');
                });
                session.on('sending', function (e) {
                    console.log('sending');
                });
                session.on('progress', function (e) {
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
                    console.log('accepted')
                });
                session.on('confirmed', function (e) {
                    console.log('CONFIRM STREAM');
                });

                //Поднимаем трубку при нажатии на кнопку Answer 
                answerButton.addEventListener('click', function () {
                    newSession.answer(options);
                    console.log(session.connection)
                    console.log(session.connection.stream)
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
        phone.on('connecting', (data)=> {
            let session = data.session;

            console.log('connecting')
        });
        phone.on('connected', (data)=> {
            let session = data.session;

            console.log('connected')
        });
        phone.on('disconnected', (data)=> {
            let session = data.session;

            console.log('disconnected')
        });
        phone.on('registered', (data)=> {
            let session = data.session;

            console.log('registered')
        });
        phone.on('unregistered', (data)=> {
            let session = data.session;

            console.log('unregistered')
        });
        phone.on('registrationFailed', (data)=> {
            let session = data.session;

            console.log('registrationFailed')
        });
        phone.on('registrationExpiring', (data)=> {
            let session = data.session;

            console.log('registrationExpiring')
        });
        phone.on('newMessage', (data)=> {
            let session = data.session;

            console.log('newMessage')
        });
        phone.start();
    }

    var session;


    callButton.addEventListener('click', function () {
        phone.call('sip:' + inputNumber.value + '@94.158.52.244:7777', options)
        add_stream();
    });


    function add_stream() {
        console.log(session);
        session.connection.addEventListener('addstream', function (e) {
            remoteAudio.srcObject = (e.stream);
            remoteView.srcObject = (e.stream);
            selfView.srcObject = (session.connection.getLocalStreams()[0]);
            remoteView.srcObject = (session.connection.getRemoteStreams()[0]);
        })
    }


    //сбрасываем звонок при нажатии на HangUP
    hangUpButton.addEventListener('click', function () {
        phone.terminateSessions()
    });

    // Отправка сообщений
    sendMsgButton.addEventListener('click', function () {
        console.log('Send MSG');
        console.log(phone.Message)
        phone.sendMessage('sip:' + inputNumberMsg.value + '@10.10.3.31', inputTextMsg.value);


    })

</script>

