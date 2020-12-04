<script src="/render/phone/ZSipml5Widget/fayzullo/release/SIPml-api.js"
        type="text/javascript"></script>
<!--<script src="/render/phone/ZSipml5Widget/fayzullo/release/SIPml-api.js" type="text/javascript"> </script>-->

<!--   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">-->
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

<!--<link rel="stylesheet" href="/render/phone/ZSipml5Widget/fayzullo/css/iStyleX.css">-->
<style>
    .video-controls::-webkit-media-controls{
        display: none;
    }
    .jsPanel-content::-webkit-scrollbar {
        display: none;
    }
</style>
<?php

use zetsoft\widgets\notifier\ZJspanelWidgetWebphone;

$SIPMLItem = new \zetsoft\dbitem\eyuf\SIPMLItem();
$SIPMLItem->realm = '10.10.3.60:5060';
$SIPMLItem->impi = '308';
$SIPMLItem->impu = 'sip:308@10.10.3.60:5060';
$SIPMLItem->password = '308';
$SIPMLItem->websocket_proxy_url = 'wss://wss60.zoft.uz:8089/ws';
$SIPMLItem->display_name = '308';

?>

<div class="container">
    <div class="row">

        <div class="col-md-3">

            <div class="text-center border">

                <button id="callBtn" class="btn btn-sm btnCall" title="Call"
                        onclick='sipCall("call-audio");'><i class="fa fa-phone fa-2x text-success"></i>
                </button>

                <button id="videoBtn" class="btn btn-sm" onclick='sipCall("call-audiovideo");'>
                    <i class="fas success-ic fa-video fa-2x"></i>
                </button>

                <button class="btn btn-sm btnHangUp hangupBtn" id="btnHangUp" title="Hangup"
                        onclick='sipHangUp();'>
                    <i class="fas red-ic  fa-phone-slash fa-2x"></i>
                </button>

                <div id="txtCallStatus" class="h-25"></div>
                <div id="txtRegStatus"></div>

                <div class=" md-form">
                    <i class="fas fa-user fa-2x input-prefix text-center "></i>
                    <input type="text" id="txtPhoneNumber" class="form-control text-dark text-center">
                    <label for="txtPhoneNumber"></label>
                </div>


                <a type="button" class="btn-floating pt-2 fp-20" value="1" onclick="dis('1')">1</a>
                <a type="button" class="btn-floating pt-2 fp-20" value="2" onclick="dis('2')">2</a>
                <a type="button" class="btn-floating pt-2 fp-20" value="3" onclick="dis('3')">3</a>
                <br>
                <a type="button" class="btn-floating pt-2 fp-20" value="4" onclick="dis('4')">4</a>
                <a type="button" class="btn-floating pt-2 fp-20" value="5" onclick="dis('5')">5</a>
                <a type="button" class="btn-floating pt-2 fp-20" value="6" onclick="dis('6')">6</a>
                <br>
                <a type="button" class="btn-floating pt-2 fp-20" value="7" onclick="dis('7')">7</a>
                <a type="button" class="btn-floating pt-2 fp-20" value="8" onclick="dis('8')">8</a>
                <a type="button" class="btn-floating pt-2 fp-20" value="9" onclick="dis('9')">9</a>
                <br>
                <a type="button" class="btn-floating pt-2 fp-20" value="+" onclick="dis('+')">+</a>
                <a type="button" class="btn-floating pt-2 fp-20" value="0" onclick="dis('0')">0</a>
                <a type="button" class="btn-floating" value="c" onclick="clr()">
                    <i class="fas red-ic fa-backspace"></i></a>
            </div>
        </div>

        <?php
        ZJspanelWidgetWebphone::begin([
            'grapesWrap' => false,
            'config' => [
                'id' => 'jspanel',
                'begin' => true,
                'height' => '42vh',
                'width' => '30vw',
                'my' => 'center',
                'at' => 'center',
                'autoposition' => 'down',
                'offsetX' => '-40',
                'offsetY' => '0',
                'headt' => ''
            ]
        ]);

        ?>
        <div class="w-100 position-relative">
            <video class="video bg-dark w-100" style="opacity: 0"
                   id="video_remote" autoplay="autoplay">
            </video>


            <video class="video bg-dark position-absolute" style="bottom: 10px; right: 10px; width: 25%; box-shadow: 0px 0px 17px 0px #f5f4f4; pointer-events: none;"
                   id="video_local" autoplay="autoplay" muted="true"></video>
        </div>


        <div id="divCallCtrl" class="p-0 m-0">
            <div id="tdVideo" class="tab-video">
                <div id="divVideo" class='div-video'>

                </div>
            </div>
            <div id='divCallOptions' class='call-options text-center'>
                <button class="btn px-3 py-2 " id="btnFullScreen" disabled onclick='toggleFullScreen();'><i class="fas fa-compress"></i></button>
                <button class="btn px-3 py-2 " id="btnMute" onclick='sipToggleMute();'><i class="fas fa-microphone-slash"></i></button>
                <button class="btn px-3 py-2 " id="btnHoldResume" onclick='sipToggleHoldResume();'><i class="fas fa-phone"></i></button>
                <button class="btn px-3 py-2 " id="btnTransfer" onclick='sipTransfer();'><i class="fas fa-random"></i></button>
                <button class="btn px-3 py-2 " id="btnLocalVid" onclick="localVidOn()"><i id="localVidIcon" class="fas fa-video"></i></button>
            </div>

        </div>

        <div id='divGlassPanel' class='glass-panel invisible'></div>


        <!-- Call button options -->
        <!--<ul id="ulCallOptions" class="dropdown-menu invisible">
            <li><a href="#" onclick='sipCall("call-audio");'>Audio</a></li>
            <li><a href="#" onclick='sipCall("call-audiovideo");'>Video</a></li>
            <li id='liScreenShare'><a href="#" onclick='sipShareScreen();'>Screen Share</a></li>
            <li class="divider"></li>
            <li><a href="#" onclick='uiDisableCallOptions();'><b>Disable these options</b></a></li>
        </ul>-->


        <?php


        ZJspanelWidgetWebphone::end();
        ?>



    </div>


</div>


<audio id="audio_remote" autoplay="autoplay"></audio>
<audio id="ringtone" loop src="/render/phone/ZSipml5Widget/fayzullo/sounds/ringtone.wav"></audio>
<audio id="ringbacktone" loop src="/render/phone/ZSipml5Widget/fayzullo/sounds/ringbacktone.wav"></audio>
<audio id="dtmfTone" src="/render/phone/ZSipml5Widget/fayzullo/sounds/dtmf.wav"></audio>


<input type="text" class="w-100 d-none" id="txtDisplayName" value=""
       placeholder="e.g. John Doe"/>

<input type="text" class="w-100 d-none" id="txtPrivateIdentity" value=""
       placeholder="e.g. +33600000000"/>

<input type="text" class="w-100 d-none" id="txtPublicIdentity" value=""
       placeholder="e.g. sip:+33600000000@doubango.org"/>

<input type="text" class="h-100 d-none" id="txtRealm" value=""
       placeholder="e.g. doubango.org"/>

<input type="button" class="btn btn-danger d-none" id="btnUnRegister"
       value="LogOut" disabled onclick='sipUnRegister();'/>


<ul id="ulCallOptions" class="dropdown-menu invisible d-none">
    <li><a href="#" onclick='sipCall("call-audio");'>Audio</a></li>
    <li><a href="#" onclick='sipCall("call-audiovideo");'>Video</a></li>
    <li id='liScreenShare'><a href="#" onclick='sipShareScreen();'>Screen Share</a></li>
    <li class="divider"></li>
    <li><a href="#" onclick='uiDisableCallOptions();'><b>Disable these options</b></a></li>
</ul>

<script type="text/javascript">
    
    function localVidOn() {
        document.getElementById("video_local").classList.toggle("d-none");
        document.getElementById("localVidIcon").classList.toggle("fa-video-slash");
    };

    var btnCall = document.getElementsByClassName('btnCall');
    var sTransferNumber;
    var oRingTone, oRingbackTone;
    var oSipStack, oSipSessionRegister, oSipSessionCall, oSipSessionTransferCall;
    var videoRemote, videoLocal, audioRemote;
    var bFullScreen = false;
    var oNotifICall;
    var bDisableVideo = false;
    var viewVideoLocal, viewVideoRemote, viewLocalScreencast; // <video> (webrtc) or <div> (webrtc4all);
    var oConfigCall;
    var oReadyStateTimer;
    var call_config = {
        realm: '<?=$SIPMLItem->realm?>',
        impi: '<?=$SIPMLItem->impi?>',
        impu: '<?=$SIPMLItem->impu?>',
        password: '<?=$SIPMLItem->password?>',
        display_name: '<?=$SIPMLItem->display_name?>',
        websocket_proxy_url: '<?=$SIPMLItem->websocket_proxy_url?>',
        outbound_proxy_url: null,
        ice_servers: '[]',
        enable_rtcweb_breaker: false,
        events_listener: {events: '*', listener: onSipEventStack},
        enable_early_ims: true, // Must be true unless you're using a real IMS network
        enable_media_stream_cache: false,
        bandwidth: null, // could be redefined a session-level
        video_size: {minWidth:640, minHeight:480, maxWidth:1920, maxHeight:1080}, // could be redefined a session-level
        sip_headers: [
            {name: 'User-Agent', value: 'IM-client/OMA1.0 sipML5-v1.2016.03.04'},
            {name: 'Organization', value: 'Doubango Telecom'}
        ]
    };

    C =
        {
            divKeyPadWidth: 220
        };




    window.onload = function () {
        window.console && window.console.info && window.console.info("location=" + window.location);

        videoLocal = document.getElementById("video_local");
        videoRemote = document.getElementById("video_remote");
        audioRemote = document.getElementById("audio_remote");

        document.onkeyup = onKeyUp;
        document.body.onkeyup = onKeyUp;
        divCallCtrl.onmousemove = onDivCallCtrlMouseMove;

        // set debug level
        /*SIPml.setDebugLevel((window.localStorage && window.localStorage.getItem('org.doubango.expert.disable_debug') == "true") ? "error" : "info");*/

        loadCredentials();
        loadCallOptions();

        // Initialize call button
        uiBtnCallSetText("Call");

        var getPVal = function (PName) {
            var query = window.location.search.substring(1);
            var vars = query.split('&');
            for (var i = 0; i < vars.length; i++) {
                var pair = vars[i].split('=');
                if (decodeURIComponent(pair[0]) === PName) {
                    return decodeURIComponent(pair[1]);
                }
            }
            return null;
        }

        var preInit = function () {
            // set default webrtc type (before initialization)
            var s_webrtc_type = getPVal("wt");
            var s_fps = getPVal("fps");
            var s_mvs = getPVal("mvs"); // maxVideoSize
            var s_mbwu = getPVal("mbwu"); // maxBandwidthUp (kbps)
            var s_mbwd = getPVal("mbwd"); // maxBandwidthUp (kbps)
            var s_za = getPVal("za"); // ZeroArtifacts
            var s_ndb = getPVal("ndb"); // NativeDebug

            if (s_webrtc_type) SIPml.setWebRtcType(s_webrtc_type);

            // initialize SIPML5
            SIPml.init(postInit);

            // set other options after initialization
            if (s_fps) SIPml.setFps(parseFloat(s_fps));
            if (s_mvs) SIPml.setMaxVideoSize(s_mvs);
            if (s_mbwu) SIPml.setMaxBandwidthUp(parseFloat(s_mbwu));
            if (s_mbwd) SIPml.setMaxBandwidthDown(parseFloat(s_mbwd));
            if (s_za) SIPml.setZeroArtifacts(s_za === "true");
            //if (s_ndb == "true") SIPml.startNativeDebug();

        }

        oReadyStateTimer = setInterval(function () {
                if (document.readyState === "complete") {
                    clearInterval(oReadyStateTimer);
                    // initialize SIPML5
                    preInit();
                }
            },
            500);
    };


    function postInit() {
        // check for WebRTC support
        if (!SIPml.isWebRtcSupported()) {
            // is it chrome?
            if (SIPml.getNavigatorFriendlyName() == 'chrome') {
                if (confirm("You're using an old Chrome version or WebRTC is not enabled. Do you want to see how to enable WebRTC?")) {
                    window.location = 'http://www.webrtc.org/running-the-demos';
                } else {
                    window.location = "index.html";
                }
                return null;
            } else {
                if (confirm("webrtc-everywhere extension is not installed. Do you want to install it? IMPORTANT: You must restart your browser after the installation.")) {
                    window.location = 'https://github.com/sarandogou/webrtc-everywhere';
                } else {

                }
            }
        }

        // checks for WebSocket support
        if (!SIPml.isWebSocketSupported()) {
            if (confirm("Your browser don't support WebSockets. Do you want to download a WebSocket-capable browser?")) {
                window.location = 'https://www.google.com/intl/en/chrome/browser/';
            } else {
                window.location = "index.html";
            }
            return null;
        }

        // FIXME: displays must be per session
        viewVideoLocal = videoLocal;
        viewVideoRemote = videoRemote;

        if (!SIPml.isWebRtcSupported()) {
            if (confirm("Your browser don't support WebRTC. audio/video calls will be disabled. Do you want to download a WebRTC-capable browser?")) {
                window.location = 'https://www.google.com/intl/en/chrome/browser/';
            }
        }

        //btnRegister.disabled = false;
        document.body.style.cursor = 'default';
        oConfigCall = {
            audio_remote: audioRemote,
            video_local: viewVideoLocal,
            video_remote: viewVideoRemote,
            screencast_window_id: 0x00000000, // entire desktop
            bandwidth: {audio: undefined, video: undefined},
            video_size: {minWidth:640, minHeight:480, maxWidth:1920, maxHeight:1080},
            events_listener: {events: '*', listener: onSipEventSession},
            sip_caps: [
                {name: '+g.oma.sip-im'},
                {name: 'language', value: '\"en,fr\"'}
            ]
        };
    }


    function loadCallOptions() {
        if (window.localStorage) {
            var s_value;
            if ((s_value = window.localStorage.getItem('org.doubango.call.phone_number'))) txtPhoneNumber.value = s_value;
            /*console.log($(txtPhoneNumber).val())*/
            bDisableVideo = (window.localStorage.getItem('org.doubango.expert.disable_video') == "true");

            txtCallStatus.innerHTML = '<i> ' + (bDisableVideo ? '' : '') + '</i>';  //video disabled enabled text
            //txtCallStatus.innerHTML = '<i>Video ' + (bDisableVideo ? 'disabled' : 'enabled') + '</i>';  //video disabled enabled text
        }
    }

    function saveCallOptions() {
        if (window.localStorage) {
            window.localStorage.setItem('org.doubango.call.phone_number', txtPhoneNumber.value);
            window.localStorage.setItem('org.doubango.expert.disable_video', bDisableVideo ? "true" : "false");
        }
    }

    function loadCredentials() {
        if (window.localStorage) {
            // IE retuns 'null' if not defined
            var s_value;
            if ((s_value = window.localStorage.getItem('org.doubango.identity.display_name'))) txtDisplayName.value = s_value;
            if ((s_value = window.localStorage.getItem('org.doubango.identity.impi'))) txtPrivateIdentity.value = s_value;
            if ((s_value = window.localStorage.getItem('org.doubango.identity.impu'))) txtPublicIdentity.value = s_value;
            //if ((s_value = window.localStorage.getItem('org.doubango.identity.password'))) txtPassword.value = s_value;
            if ((s_value = window.localStorage.getItem('org.doubango.identity.realm'))) txtRealm.value = s_value;
        } else {
            //txtDisplayName.value = "005";
            //txtPrivateIdentity.value = "005";
            //txtPublicIdentity.value = "sip:005@sip2sip.info";
            //txtPassword.value = "005";
            //txtRealm.value = "sip2sip.info";
            //txtPhoneNumber.value = "701020";
        }
    };

    function saveCredentials() {
        if (window.localStorage) {
            window.localStorage.setItem('org.doubango.identity.display_name', txtDisplayName.value);
            window.localStorage.setItem('org.doubango.identity.impi', txtPrivateIdentity.value);
            window.localStorage.setItem('org.doubango.identity.impu', txtPublicIdentity.value);
            //window.localStorage.setItem('org.doubango.identity.password', txtPassword.value);
            window.localStorage.setItem('org.doubango.identity.realm', txtRealm.value);
        }
    };

    // sends SIP REGISTER request to login
    function sipRegister() {
        // catch exception for IE (DOM not ready)
        try {
            // enable notifications if not already done
            if (window.webkitNotifications && window.webkitNotifications.checkPermission() != 0) {
                window.webkitNotifications.requestPermission();
            }

            // save credentials
            saveCredentials();

            // update debug level to be sure new values will be used if the user haven't updated the page
            /*SIPml.setDebugLevel((window.localStorage && window.localStorage.getItem('org.doubango.expert.disable_debug') == "true") ? "error" : "info");*/

            // create SIP stack
            oSipStack = new SIPml.Stack({
                    realm: call_config.realm,
                    impi: call_config.impi,
                    impu: call_config.impu,
                    password: call_config.password,
                    display_name: call_config.display_name,
                    websocket_proxy_url: call_config.websocket_proxy_url,
                    outbound_proxy_url: call_config.outbound_proxy_url,
                    ice_servers: call_config.ice_servers,
                    enable_rtcweb_breaker: call_config.enable_rtcweb_breaker,
                    events_listener: call_config.events_listener,
                    enable_early_ims: call_config.enable_early_ims, // Must be true unless you're using a real IMS network
                    enable_media_stream_cache: call_config.enable_media_stream_cache,
                    bandwidth: (window.localStorage ? tsk_string_to_object(window.localStorage.getItem('org.doubango.expert.bandwidth')) : null), // could be redefined a session-level
                    video_size: (window.localStorage ? tsk_string_to_object(window.localStorage.getItem('org.doubango.expert.video_size')) : null), // could be redefined a session-level
                    sip_headers: [
                        {name: 'User-Agent', value: 'IM-client/OMA1.0 sipML5-v1.2016.03.04'},
                        {name: 'Organization', value: 'Doubango Telecom'}
                    ]
                }
            );
            if (oSipStack.start() != 0) {
                txtRegStatus.innerHTML = '<b>Failed to start the SIP stack</b>';
            } else return null;
        } catch (e) {
            txtRegStatus.innerHTML = "<b>2:" + e + "</b>";
        }
        //btnRegister.disabled = false;
    }

    // sends SIP REGISTER (expires=0) to logout
    function sipUnRegister() {
        if (oSipStack) {
            oSipStack.stop(); // shutdown all sessions
        }
    }

    // makes a call (SIP INVITE)


    var callButton = document.getElementById("callBtn");
    callButton.addEventListener("click", function (){ sipCall("call-audio")});


    var videoButton = document.getElementById("videoBtn");
    videoButton.addEventListener("click", function (){
        $('#jspanel').show();
        $('#video_remote').css("opacity",1);
        $('#video_local').css("opacity",1);
        sipCall("call-audiovideo");


    });

    function sipCall(s_type,) {
        console.log(s_type);
        if (oSipStack && !oSipSessionCall && !tsk_string_is_null_or_empty(txtPhoneNumber.value)) {
            if (s_type == 'call-screenshare') {
                if (!SIPml.isScreenShareSupported()) {
                    alert('Screen sharing not supported. Are you using chrome 26+?');
                    return null;
                }
                if (!location.protocol.match('https')) {
                    if (confirm("Screen sharing requires https://. Do you want to be redirected?")) {
                        sipUnRegister();
                        window.location = 'https://ns313841.ovh.net/call.htm';
                    }
                    return null;
                }
            }
            btnCall.disabled = true;
            btnHangUp.disabled = false;

            if (window.localStorage) {
                //oConfigCall.bandwidth = tsk_string_to_object(window.localStorage.getItem('org.doubango.expert.bandwidth')); // already defined at stack-level but redifined to use latest values
                //oConfigCall.video_size = tsk_string_to_object(window.localStorage.getItem('org.doubango.expert.video_size')); // already defined at stack-level but redifined to use latest values
            }

            // create call session
            oSipSessionCall = oSipStack.newSession(s_type, oConfigCall);
            // make call
            if (oSipSessionCall.call(txtPhoneNumber.value) != 0) {
                oSipSessionCall = null;
                txtCallStatus.value = 'Failed to make call';
                btnCall.disabled = false;
                btnHangUp.disabled = true;
                return null;
            }


            console.log('Zvonok');
            saveCallOptions();

        } else if (oSipSessionCall) {
            txtCallStatus.innerHTML = '<i>Connecting...</i>';
            oSipSessionCall.accept(oConfigCall);

            console.log('Vizov')
        }
    }

    // Share entire desktop aor application using BFCP or WebRTC native implementation
    function sipShareScreen() {
        if (SIPml.getWebRtcType() === 'w4a') {
            // Sharing using BFCP -> requires an active session
            if (!oSipSessionCall) {
                txtCallStatus.innerHTML = '<i>No active session</i>';
                return null;
            }
            if (oSipSessionCall.bfcpSharing) {
                if (oSipSessionCall.stopBfcpShare(oConfigCall) != 0) {
                    txtCallStatus.value = 'Failed to stop BFCP share';
                } else {
                    oSipSessionCall.bfcpSharing = false;
                }
            } else {
                oConfigCall.screencast_window_id = 0x00000000;
                if (oSipSessionCall.startBfcpShare(oConfigCall) != 0) {
                    txtCallStatus.value = 'Failed to start BFCP share';
                } else {
                    oSipSessionCall.bfcpSharing = true;
                }
            }
        } else {
            sipCall('call-screenshare');
        }
    }

    // transfers the call
    function sipTransfer() {
        if (oSipSessionCall) {
            var s_destination = prompt('Enter destination number', '');
            if (!tsk_string_is_null_or_empty(s_destination)) {
                btnTransfer.disabled = true;
                if (oSipSessionCall.transfer(s_destination) != 0) {
                    txtCallStatus.innerHTML = '<i>Call transfer failed</i>';
                    btnTransfer.disabled = false;
                    return null;
                }
                txtCallStatus.innerHTML = '<i>Transfering the call...</i>';
            }
        }
    }

    // holds or resumes the call
    function sipToggleHoldResume() {
        if (oSipSessionCall) {
            var i_ret;
            btnHoldResume.disabled = true;
            txtCallStatus.innerHTML = oSipSessionCall.bHeld ? '<i>Resuming the call...</i>' : '<i>Holding the call...</i>';
            i_ret = oSipSessionCall.bHeld ? oSipSessionCall.resume() : oSipSessionCall.hold();
            if (i_ret != 0) {
                txtCallStatus.innerHTML = '<i>Hold / Resume failed</i>';
                btnHoldResume.disabled = false;
                return null;
            }
        }
    }

    // Mute or Unmute the call
    function sipToggleMute() {
        if (oSipSessionCall) {
            var i_ret;
            var bMute = !oSipSessionCall.bMute;
            txtCallStatus.innerHTML = bMute ? '<i>Mute the call...</i>' : '<i>Unmute the call...</i>';
            i_ret = oSipSessionCall.mute('audio'/*could be 'video'*/, bMute);
            if (i_ret != 0) {
                txtCallStatus.innerHTML = '<i>Mute / Unmute failed</i>';
                return null;
            }
            oSipSessionCall.bMute = bMute;
            btnMute.value = bMute ? "Unmute" : "Mute";
        }
    }

    function stopTimer() {
        clearTimeout(t);

    }

    // terminates the call (SIP BYE or CANCEL)
    /*$("#btnHangUp").on("click", function() {
        sipHangUp();
    })*/

    var buttonHangup = document.getElementById('btnHangUp');
    buttonHangup.addEventListener("click", function() { sipHangUp()});

    function sipHangUp() {
        if (oSipSessionCall) {
            txtCallStatus.innerHTML = '<i>Terminating the call...</i>';
            /*stopTimer();
            resetTimer();*/
            oSipSessionCall.hangup({events_listener: {events: '*', listener: onSipEventSession}});
            $('#jspanel').hide();
        }
    }

    // when remote hangup

    function x0000_Any_2_Terminated_X_iBYE(a) {
        var c = a[0];
        var b = a[1];
        c.set_last_error(tsip_event_code_e.DIALOG_TERMINATED, "Call terminated");
        $('#jspanel').hide();
        return c.send_response(b, 200, "OK", false)
    }

    function sipSendDTMF(c) {
        if (oSipSessionCall && c) {
            if (oSipSessionCall.dtmf(c) == 0) {
                try {
                    dtmfTone.play();
                } catch (e) {
                }
            }
        }
    }

    function startRingTone() {
        try {
            ringtone.play();
        } catch (e) {
        }
    }

    function stopRingTone() {
        try {
            ringtone.pause();
        } catch (e) {
        }
    }

    function startRingbackTone() {
        try {
            ringbacktone.play();
        } catch (e) {
        }
    }

    function stopRingbackTone() {
        try {
            ringbacktone.pause();
        } catch (e) {
        }
    }

    function toggleFullScreen() {
        if (videoRemote.webkitSupportsFullscreen) {
            fullScreen(!videoRemote.webkitDisplayingFullscreen);
        } else {
            fullScreen(!bFullScreen);
        }
    }

    /*function openKeyPad() {
        divKeyPad.style.visibility = 'visible';
        divKeyPad.style.left = ((document.body.clientWidth - C.divKeyPadWidth) >> 1) + 'px';
        divKeyPad.style.top = '70px';
        divGlassPanel.style.visibility = 'visible';
    }*/

    function closeKeyPad() {
        divKeyPad.style.left = '0px';
        divKeyPad.style.top = '0px';
        divKeyPad.style.visibility = 'hidden';
        divGlassPanel.style.visibility = 'hidden';
    }

    function fullScreen(b_fs) {
        bFullScreen = b_fs;
        if (tsk_utils_have_webrtc4native() && bFullScreen && videoRemote.webkitSupportsFullscreen) {
            if (bFullScreen) {
                videoRemote.webkitEnterFullScreen();
            } else {
                videoRemote.webkitExitFullscreen();
            }
        } else {
            if (tsk_utils_have_webrtc4npapi()) {
                try {
                    if (window.__o_display_remote) window.__o_display_remote.setFullScreen(b_fs);
                } catch (e) {
                    divVideo.setAttribute("class", b_fs ? "full-screen" : "normal-screen");
                }
            } else {
                divVideo.setAttribute("class", b_fs ? "full-screen" : "normal-screen");
            }
        }
    }

    function showNotifICall(s_number) {
        // permission already asked when we registered
        if (window.webkitNotifications && window.webkitNotifications.checkPermission() == 0) {
            if (oNotifICall) {
                oNotifICall.cancel();
            }
            oNotifICall = window.webkitNotifications.createNotification('images/sipml-34x39.png', 'Incaming call', 'Incoming call from ' + s_number);
            oNotifICall.onclose = function () {
                oNotifICall = null;
            };
            oNotifICall.show();
        }
    }

    function onKeyUp(evt) {
        evt = (evt || window.event);
        if (evt.keyCode == 27) {
            fullScreen(false);
        } else if (evt.ctrlKey && evt.shiftKey) { // CTRL + SHIFT
            if (evt.keyCode == 65 || evt.keyCode == 86) { // A (65) or V (86)
                bDisableVideo = (evt.keyCode == 65);
                txtCallStatus.innerHTML = '<i>Video ' + (bDisableVideo ? 'disabled' : 'enabled') + '</i>';
                window.localStorage.setItem('org.doubango.expert.disable_video', bDisableVideo);
            }
        }
    }

    function onDivCallCtrlMouseMove(evt) {
        try { // IE: DOM not ready
            if (tsk_utils_have_stream()) {
                btnCall.disabled = (!tsk_utils_have_stream() || !oSipSessionRegister || !oSipSessionRegister.is_connected());
                document.getElementById("divCallCtrl").onmousemove = null; // unsubscribe
            }
        } catch (e) {
        }
    }

    /*Stop Timer*/


    function uiOnConnectionEvent(b_connected, b_connecting) { // should be enum: connecting, connected, terminating, terminated
        // btnRegister.disabled = b_connected || b_connecting;
        btnUnRegister.disabled = !b_connected && !b_connecting;
        btnCall.disabled = !(b_connected && tsk_utils_have_webrtc() && tsk_utils_have_stream());
        btnHangUp.disabled = !oSipSessionCall;


        console.log('uiOnConnectionEvent');
        console.log('uiOnConnectionEvent');
        console.log('uiOnConnectionEvent');

    }

    function uiVideoDisplayEvent(b_local, b_added) {
        var o_elt_video = b_local ? videoLocal : videoRemote;

        if (b_added) {
            o_elt_video.style.opacity = 1;
            uiVideoDisplayShowHide(true);
        } else {
            o_elt_video.style.opacity = 0;
            fullScreen(false);
        }
    }

    function uiVideoDisplayShowHide(b_show) {
        if (b_show) {
            tdVideo.style.height = '100%';
            divVideo.style.height = navigator.appName == 'Microsoft Internet Explorer' ? '100%' : '100%';
            $('.tab-video').addClass('active_bot');
            $('.video_panel').addClass('active_left');
        } else {
            tdVideo.style.height = '0px';
            divVideo.style.height = '0px';
            $('.tab-video').removeClass('active_bot');
            $('.video_panel').removeClass('active_left');
        }
        btnFullScreen.disabled = !b_show;
    }

    function uiDisableCallOptions() {
        if (window.localStorage) {
            window.localStorage.setItem('org.doubango.expert.disable_callbtn_options', 'true');
            uiBtnCallSetText('Call');
            alert('Use expert view to enable the options again (/!\\requires re-loading the page)');
        }
    }

    function uiBtnCallSetText(s_text) {
        switch (s_text) {
            case "Call": {
                var bDisableCallBtnOptions = (window.localStorage && window.localStorage.getItem('org.doubango.expert.disable_callbtn_options') == "true");

                /*console.log(window.localStorage.getItem('org.doubango.expert.disable_callbtn_options'));*/
                btnCall.value = btnCall.innerHTML = bDisableCallBtnOptions ? 'Call' : 'Call <span id="spanCaret" class="caret">';
                /*btnCall.setAttribute("class", bDisableCallBtnOptions ? "btn btn-primary" : "btn btn-primary dropdown-toggle");*/
                btnCall.onclick = bDisableCallBtnOptions ? function () {
                    sipCall(bDisableVideo ? 'call-audio' : 'call-audiovideo');

                } : null;
                ulCallOptions.style.visibility = bDisableCallBtnOptions ? "hidden" : "visible";
                /* if (!bDisableCallBtnOptions && ulCallOptions.parentNode != divBtnCallGroup) {
                     divBtnCallGroup.appendChild(ulCallOptions);
                 } else if (bDisableCallBtnOptions && ulCallOptions.parentNode == divBtnCallGroup) {
                     document.body.appendChild(ulCallOptions);
                 }*/

                break;
            }
            default: {
                btnCall.value = btnCall.innerHTML = s_text;
                //btnCall.setAttribute("class", "btn btn-primary");
                btnCall.onclick = function () {
                    sipCall(bDisableVideo ? 'call-audio' : 'call-audiovideo');
                };
                ulCallOptions.style.visibility = "hidden";
                /*if (ulCallOptions.parentNode == divBtnCallGroup) {
                    document.body.appendChild(ulCallOptions);
                }*/
                break;
            }
        }
    }

    function uiCallTerminated(s_description) {
        uiBtnCallSetText("Call");
        btnHangUp.value = 'HangUp';
        btnHoldResume.value = 'hold';
        btnMute.value = "Mute";
        btnCall.disabled = false;
        btnHangUp.disabled = true;
        if (window.btnBFCP) window.btnBFCP.disabled = true;

        oSipSessionCall = null;

        stopRingbackTone();
        stopRingTone();

        txtCallStatus.innerHTML = "<i>" + s_description + "</i>";
        uiVideoDisplayShowHide(false);
        divCallOptions.style.opacity = 1;

        if (oNotifICall) {
            oNotifICall.cancel();
            oNotifICall = null;
        }

        uiVideoDisplayEvent(false, false);
        uiVideoDisplayEvent(true, false);

        setTimeout(function () {
            if (!oSipSessionCall) txtCallStatus.innerHTML = '';
        }, 2500);
    }

    // Callback function for SIP Stacks
    function onSipEventStack(e /*SIPml.Stack.Event*/) {
        tsk_utils_log_info('==stack event = ' + e.type);
        switch (e.type) {
            case 'started': {
                // catch exception for IE (DOM not ready)
                try {
                    // LogIn (REGISTER) as soon as the stack finish starting
                    oSipSessionRegister = this.newSession('register', {
                        expires: 200,
                        events_listener: {events: '*', listener: onSipEventSession},
                        sip_caps: [
                            {name: '+g.oma.sip-im', value: null},
                            //{ name: '+sip.ice' }, // rfc5768: FIXME doesn't work with Polycom TelePresence
                            {name: '+audio', value: null},
                            {name: 'language', value: '\"en,fr\"'}
                        ]
                    });
                    oSipSessionRegister.register();


                } catch (e) {
                    txtRegStatus.value = txtRegStatus.innerHTML = "<b>1:" + e + "</b>";
                    //btnRegister.disabled = false;


                }
                break;
            }
            case 'stopping':
            case 'stopped':
            case 'failed_to_start':
            case 'failed_to_stop': {
                var bFailure = (e.type == 'failed_to_start') || (e.type == 'failed_to_stop');
                oSipStack = null;
                oSipSessionRegister = null;
                oSipSessionCall = null;

                uiOnConnectionEvent(false, false);

                stopRingbackTone();
                stopRingTone();

                uiVideoDisplayShowHide(false);
                divCallOptions.style.opacity = 1;

                txtCallStatus.innerHTML = '';
                txtRegStatus.innerHTML = bFailure ? "<i>Disconnected: <b>" + e.description + "</b></i>" : "<i>Disconnected</i>";
                break;
            }

            case 'i_new_call': {
                if (oSipSessionCall) {
                    // do not accept the incoming call if we're already 'in call'
                    e.newSession.hangup(); // comment this line for multi-line support
                } else {
                    oSipSessionCall = e.newSession;
                    // start listening for events
                    oSipSessionCall.setConfiguration(oConfigCall);

                    uiBtnCallSetText('Answer');
                    btnHangUp.value = 'Reject';
                    btnCall.disabled = false;
                    btnHangUp.disabled = false;

                    startRingTone();

                    var sRemoteNumber = (oSipSessionCall.getRemoteFriendlyName() || 'unknown');
                    txtCallStatus.innerHTML = "<i>Incoming call from [<b>" + sRemoteNumber + "</b>]</i>";
                    showNotifICall(sRemoteNumber);

                    /*openIncomingModal(event)*/
                }
                break;
            }


            case 'm_permission_requested': {
                divGlassPanel.style.visibility = 'visible';

                break;
            }
            case 'm_permission_accepted':
            case 'm_permission_refused': {
                divGlassPanel.style.visibility = 'hidden';
                if (e.type == 'm_permission_refused') {
                    uiCallTerminated('Media stream permission denied');
                }
                break;
            }

            case 'starting':
            default:
                break;
        }
    };


    // Callback function for SIP sessions (INVITE, REGISTER, MESSAGE...)
    function onSipEventSession(e /* SIPml.Session.Event */) {

        tsk_utils_log_info('==session event = ' + e.type);


        console.log('tskSUCCESS')

        switch (e.type) {
            case 'connecting':
            case 'connected': {
                var bConnected = (e.type == 'connected');
                if (e.session == oSipSessionRegister) {
                    uiOnConnectionEvent(bConnected, !bConnected);
                    txtRegStatus.innerHTML = "<i>" + e.description + "</i>";

                } else if (e.session == oSipSessionCall) {
                    btnHangUp.value = 'HangUp';
                    btnCall.disabled = true;
                    btnHangUp.disabled = false;
                    btnTransfer.disabled = false;
                    if (window.btnBFCP) window.btnBFCP.disabled = false;

                    if (bConnected) {
                        stopRingbackTone();
                        stopRingTone();


                        if (oNotifICall) {
                            oNotifICall.cancel();
                            oNotifICall = null;
                        }
                    }

                    txtCallStatus.innerHTML = "<i>" + e.description + "</i>";
                    divCallOptions.style.opacity = bConnected ? 1 : 0;


                    if (SIPml.isWebRtc4AllSupported()) { // IE don't provide stream callback
                        uiVideoDisplayEvent(false, true);
                        uiVideoDisplayEvent(true, true);
                    }
                }
                break;
            } // 'connecting' | 'connected'
            case 'terminating':
            case 'terminated': {
                if (e.session == oSipSessionRegister) {
                    uiOnConnectionEvent(false, false);

                    oSipSessionCall = null;
                    oSipSessionRegister = null;

                    txtRegStatus.innerHTML = "<i>" + e.description + "</i>";
                } else if (e.session == oSipSessionCall) {
                    uiCallTerminated(e.description);
                }
                break;
            } // 'terminating' | 'terminated'

            case 'm_stream_video_local_added': {
                if (e.session == oSipSessionCall) {
                    uiVideoDisplayEvent(true, true);
                }
                break;
            }
            case 'm_stream_video_local_removed': {
                if (e.session == oSipSessionCall) {
                    uiVideoDisplayEvent(true, false);
                }
                break;
            }
            case 'm_stream_video_remote_added': {
                if (e.session == oSipSessionCall) {
                    uiVideoDisplayEvent(false, true);
                }
                break;
            }
            case 'm_stream_video_remote_removed': {
                if (e.session == oSipSessionCall) {
                    uiVideoDisplayEvent(false, false);
                }
                break;
            }

            case 'm_stream_audio_local_added': {
                console.log('sucess');
            }
            case 'm_stream_audio_local_removed':
            case 'm_stream_audio_remote_added': {

                console.log('SUCCESSadded');

            }
            case 'm_stream_audio_remote_removed': {
                break;
            }

            case 'i_ect_new_call': {
                oSipSessionTransferCall = e.session;
                console.log('SUCESSSSSS')
                break;
            }

            case 'i_ao_request': {
                if (e.session == oSipSessionCall) {
                    var iSipResponseCode = e.getSipResponseCode();
                    if (iSipResponseCode == 180 || iSipResponseCode == 183) {
                        startRingbackTone();
                        txtCallStatus.innerHTML = '<i>Remote ringing...</i>';
                    }
                }
                break;
            }

            case 'm_early_media': {
                if (e.session == oSipSessionCall) {
                    stopRingbackTone();
                    stopRingTone();
                    txtCallStatus.innerHTML = '<i>Early media started</i>';
                }
                break;
            }

            case 'm_local_hold_ok': {
                if (e.session == oSipSessionCall) {
                    if (oSipSessionCall.bTransfering) {
                        oSipSessionCall.bTransfering = false;
                        // this.AVSession.TransferCall(this.transferUri);
                    }
                    btnHoldResume.value = 'Resume';
                    btnHoldResume.disabled = false;
                    txtCallStatus.innerHTML = '<i>Call placed on hold</i>';
                    oSipSessionCall.bHeld = true;
                }
                break;
            }
            case 'm_local_hold_nok': {
                if (e.session == oSipSessionCall) {
                    oSipSessionCall.bTransfering = false;
                    btnHoldResume.value = 'Hold';
                    btnHoldResume.disabled = false;
                    txtCallStatus.innerHTML = '<i>Failed to place remote party on hold</i>';
                }
                break;
            }
            case 'm_local_resume_ok': {
                if (e.session == oSipSessionCall) {
                    oSipSessionCall.bTransfering = false;
                    btnHoldResume.value = 'Hold';
                    btnHoldResume.disabled = false;
                    txtCallStatus.innerHTML = '<i>Call taken off hold</i>';
                    oSipSessionCall.bHeld = false;

                    if (SIPml.isWebRtc4AllSupported()) { // IE don't provide stream callback yet
                        uiVideoDisplayEvent(false, true);
                        uiVideoDisplayEvent(true, true);
                    }
                }
                break;
            }
            case 'm_local_resume_nok': {
                if (e.session == oSipSessionCall) {
                    oSipSessionCall.bTransfering = false;
                    btnHoldResume.disabled = false;
                    txtCallStatus.innerHTML = '<i>Failed to unhold call</i>';
                }
                break;
            }
            case 'm_remote_hold': {
                if (e.session == oSipSessionCall) {
                    txtCallStatus.innerHTML = '<i>Placed on hold by remote party</i>';
                }
                break;
            }
            case 'm_remote_resume': {
                if (e.session == oSipSessionCall) {
                    txtCallStatus.innerHTML = '<i>Taken off hold by remote party</i>';
                }
                break;
            }
            case 'm_bfcp_info': {
                if (e.session == oSipSessionCall) {
                    txtCallStatus.innerHTML = 'BFCP Info: <i>' + e.description + '</i>';
                }
                break;
            }

            case 'o_ect_trying': {
                if (e.session == oSipSessionCall) {
                    txtCallStatus.innerHTML = '<i>Call transfer in progress...</i>';
                }
                break;
            }
            case 'o_ect_accepted': {
                if (e.session == oSipSessionCall) {
                    txtCallStatus.innerHTML = '<i>Call transfer accepted</i>';
                }
                break;
            }
            case 'o_ect_completed':
            case 'i_ect_completed': {
                if (e.session == oSipSessionCall) {
                    txtCallStatus.innerHTML = '<i>Call transfer completed</i>';
                    btnTransfer.disabled = false;
                    if (oSipSessionTransferCall) {
                        oSipSessionCall = oSipSessionTransferCall;
                    }
                    oSipSessionTransferCall = null;
                }
                break;
            }
            case 'o_ect_failed':
            case 'i_ect_failed': {
                if (e.session == oSipSessionCall) {
                    txtCallStatus.innerHTML = '<i>Call transfer failed</i>';
                    btnTransfer.disabled = false;
                }
                break;
            }
            case 'o_ect_notify':
            case 'i_ect_notify': {
                if (e.session == oSipSessionCall) {
                    txtCallStatus.innerHTML = "<i>Call Transfer: <b>" + e.getSipResponseCode() + " " + e.description + "</b></i>";
                    if (e.getSipResponseCode() >= 300) {
                        if (oSipSessionCall.bHeld) {
                            oSipSessionCall.resume();
                        }
                        btnTransfer.disabled = false;
                    }
                }
                break;
            }
            case 'i_ect_requested': {
                if (e.session == oSipSessionCall) {
                    var s_message = "Do you accept call transfer to [" + e.getTransferDestinationFriendlyName() + "]?";//FIXME
                    if (confirm(s_message)) {
                        txtCallStatus.innerHTML = "<i>Call transfer in progress...</i>";
                        oSipSessionCall.acceptTransfer();
                        break;
                    }
                    oSipSessionCall.rejectTransfer();
                }
                break;
            }
            case 'i_new_call':
                if (e.type == 'i_new_call') { // incoming audio/video call
                    acceptCall(e);


                }
        }
    }


    setTimeout(function () {
        sipRegister();
    }, 3000);

    //function for displaying values

    $('.number-btn').on("click", function() {
        var numberBtnVal = $(this).html();
        dis(numberBtnVal);
    })

    $('.backspace-btn').on("click", function() {
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

    try {
        var pageTracker = _gat._getTracker("UA-6868621-19");
        pageTracker._trackPageview();
    } catch (err) {
    }

    setTimeout(function () {
        sipRegister();
    }, 3000);


</script>










<!--*************-->

