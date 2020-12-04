/**
 *
 * Author:  Asror Zakirov
 * Created: 5/25/2020 4:19 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */
setTimeout(function () {
    webrtcPhone.initAndLogin({
        server: 'zoft.uz',
        name: '202',
        exten: '202',
        password: '202',
        audioId: 'remote-stream-audio',
        localVideoId: 'local-stream-video',
        remoteVideoId: 'remote-stream-video'
    });
}, 1000)

function dis(val) {
    document.getElementById("call-to").value += val
}

function clr() {
    document.getElementById("call-to").value = ""
}


