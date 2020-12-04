
var cbVideoDisable;
var cbAVPFDisable;
var txtWebsocketServerUrl;
var txtSIPOutboundProxyUrl;
var txtInfo;

window.onload = function () {
    cbVideoDisable = document.getElementById("cbVideoDisable");
    cbRTCWebBreaker = document.getElementById("cbRTCWebBreaker");
    txtWebsocketServerUrl = document.getElementById("txtWebsocketServerUrl");
    txtSIPOutboundProxyUrl = document.getElementById("txtSIPOutboundProxyUrl");
    txtInfo = document.getElementById("txtInfo");

    //txtWebsocketServerUrl.disabled = !window.WebSocket || navigator.appName == "Microsoft Internet Explorer"; // Do not use WS on IE
    document.getElementById("btnSave").disabled = !window.localStorage;
    document.getElementById("btnRevert").disabled = !window.localStorage;

    if(window.localStorage){
        settingsRevert(true);
    }
}

function settingsSave() {
    window.localStorage.setItem('org.doubango.expert.disable_video', cbVideoDisable.checked ? "true" : "false");
    window.localStorage.setItem('org.doubango.expert.enable_rtcweb_breaker', cbRTCWebBreaker.checked ? "true" : "false");
    if (!txtWebsocketServerUrl.disabled) {
        window.localStorage.setItem('org.doubango.expert.websocket_server_url', txtWebsocketServerUrl.value);
    }
    window.localStorage.setItem('org.doubango.expert.sip_outboundproxy_url', txtSIPOutboundProxyUrl.value);
    window.localStorage.setItem('org.doubango.expert.ice_servers', txtIceServers.value);
    window.localStorage.setItem('org.doubango.expert.bandwidth', txtBandwidth.value);
    window.localStorage.setItem('org.doubango.expert.video_size', txtSizeVideo.value);
    window.localStorage.setItem('org.doubango.expert.disable_early_ims', cbEarlyIMS.checked ? "true" : "false");
    window.localStorage.setItem('org.doubango.expert.disable_debug', cbDebugMessages.checked ? "true" : "false");
    window.localStorage.setItem('org.doubango.expert.enable_media_caching', cbCacheMediaStream.checked ? "true" : "false");
    window.localStorage.setItem('org.doubango.expert.disable_callbtn_options', cbCallButtonOptions.checked ? "true" : "false");

    txtInfo.innerHTML = '<i>Saved</i>';
}

function settingsRevert(bNotUserAction) {
    cbVideoDisable.checked = (window.localStorage.getItem('org.doubango.expert.disable_video') == "true");
    cbRTCWebBreaker.checked = (window.localStorage.getItem('org.doubango.expert.enable_rtcweb_breaker') == "true");
    txtWebsocketServerUrl.value = (window.localStorage.getItem('org.doubango.expert.websocket_server_url') || "");
    txtSIPOutboundProxyUrl.value = (window.localStorage.getItem('org.doubango.expert.sip_outboundproxy_url') || "");
    txtIceServers.value = (window.localStorage.getItem('org.doubango.expert.ice_servers') || "");
    txtBandwidth.value = (window.localStorage.getItem('org.doubango.expert.bandwidth') || "");
    txtSizeVideo.value = (window.localStorage.getItem('org.doubango.expert.video_size') || "");
    cbEarlyIMS.checked = (window.localStorage.getItem('org.doubango.expert.disable_early_ims') == "true");
    cbDebugMessages.checked = (window.localStorage.getItem('org.doubango.expert.disable_debug') == "true");
    cbCacheMediaStream.checked = (window.localStorage.getItem('org.doubango.expert.enable_media_caching') == "true");
    cbCallButtonOptions.checked = (window.localStorage.getItem('org.doubango.expert.disable_callbtn_options') == "true");


    if (!bNotUserAction) {
        txtInfo.innerHTML = '<i>Reverted</i>';
    }
}