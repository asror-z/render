/*
 * How To Use:
 * 1. fill in valid credentials in the config below
 * 2. run the JsFiddle and enjoy
 */
var configuration = {
    'uri': 'sip:301@94.158.52.244:7777', // FILL SIP URI HERE like sip:sip-user@your-domain.bwapp.bwsip.io
    'password': '301', // FILL PASSWORD HERE,
    'ws_servers': 'wss://zoft.uz:8089/ws'
};

/*var incomingCallAudio = new window.Audio('https://code.bandwidth.com/media/incoming_alert.mp3');*/
var incomingCallAudio = new window.Audio('render/siplibs/ZSipml5Widget/demo/sounds/ringbacktone.wav');
incomingCallAudio.loop = true;
var remoteAudio = new window.Audio();
remoteAudio.autoplay = true;

var callOptions = {
    mediaConstraints: {audio: true, video: false}
};

var phone;
if(configuration.uri && configuration.password){
    JsSIP.debug.enable('JsSIP:*'); // more detailed debug output
    phone = new JsSIP.UA(configuration);
    phone.on('registrationFailed', function(ev){
        alert('Registering on SIP server failed with error: ' + ev.cause);
        configuration.uri = null;
        configuration.password = null;
        updateUI();
    });
    phone.on('newRTCSession',function(ev){
        var newSession = ev.session;
        if(session){ // hangup any existing call
            session.terminate();
        }
        session = newSession;
        var completeSession = function(){
            session = null;
            updateUI();
        };
        session.on('ended', completeSession);
        session.on('failed', completeSession);
        session.on('accepted',updateUI);
        session.on('confirmed',updateUI);
        session.on('addstream', function(e){
            incomingCallAudio.pause();
            remoteAudio.src = window.URL.createObjectURL(e.stream);
        });
        if(session.direction === 'incoming'){
            incomingCallAudio.play();
        }
        updateUI();
    });
    phone.start();
}

var session;
updateUI();

$('#connectCall').click(function () {
    var dest = $('#toField').val();
    phone.call(dest, callOptions);
    updateUI();
	console.log("Hello World");
});
$('#connectCall').on("click", function (){
	console.log("hello world");
})


$('#answer').click(function(){
    session.answer(callOptions);
});

var hangup = function(){
    session.terminate();
};

$('#hangUp').click(hangup);
$('#reject').click(hangup);

$('#mute').click(function(){
    console.log('MUTE CLICKED');
    if(session.isMuted().audio){
        session.unmute({audio: true});
    }else{
        session.mute({audio: true});
    }
    updateUI();
});
$('#toField').keypress(function(e){
    if(e.which === 13){//enter
        $('#connectCall').click();
    }
});
$('#inCallButtons').on('click', '.dialpad-char', function (e) {
    var $target = $(e.target);
    var value = $target.data('value');
    session.sendDTMF(value.toString());
});
function updateUI(){
    if(configuration.uri && configuration.password){
        $('#errorMessage').hide();
        $('#wrapper').show();
        if(session){
            if(session.isInProgress()){
                if(session.direction === 'incoming'){
                    $('#incomingCallNumber').html(session.remote_identity.uri);
                    $('#incomingCall').show();
                    $('#callControl').hide()
                    $('#incomingCall').show();
                }else{
                    $('#callInfoText').html('Ringing...');
                    $('#callInfoNumber').html(session.remote_identity.uri.user);
                    $('#callStatus').show();
                }

            }else if(session.isEstablished()){
                $('#callStatus').show();
                $('#incomingCall').hide();
                $('#callInfoText').html('In Call');
                $('#callInfoNumber').html(session.remote_identity.uri.user);
                $('#inCallButtons').show();
                incomingCallAudio.pause();
            }
            $('#callControl').hide();
        }else{
            $('#incomingCall').hide();
            $('#callControl').show();
            $('#callStatus').hide();
            $('#inCallButtons').hide();
            incomingCallAudio.pause();
        }
        //microphone mute icon
        if(session && session.isMuted().audio){
            $('#muteIcon').addClass('fa-microphone-slash');
            $('#muteIcon').removeClass('fa-microphone');
        }else{
            $('#muteIcon').removeClass('fa-microphone-slash');
            $('#muteIcon').addClass('fa-microphone');
        }
    }else{
        $('#wrapper').hide();
        $('#errorMessage').show();
    }
}
