jssip.min.js:9 JsSIP:WebSocketInterface received WebSocket message +32s
jssip.min.js:9 JsSIP:Transport received text message:INVITE sip:gvom3690@n5j0ubmaa14c.invalid;transport=ws SIP/2.0
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK4add14f5;rport
Max-Forwards: 70
From: "303" <sip:303@10.10.3.60>;tag=as0c77d3be
To: <sip:gvom3690@n5j0ubmaa14c.invalid;transport=ws>
Contact: <sip:303@10.10.3.60:5060;transport=ws>
Call-ID: 4a5259df388e2e324572922a5c7d547e@10.10.3.60:5060
CSeq: 102 INVITE
User-Agent: FPBX-15.0.16.42(16.6.2)
Date: Mon, 10 Aug 2020 12:41:32 GMT
Allow: INVITE, ACK, CANCEL, OPTIONS, BYE, REFER, SUBSCRIBE, NOTIFY, INFO, PUBLISH, MESSAGE
Supported: replaces, timer
P-Asserted-Identity: "303" <sip:303@10.10.3.60>
Content-Type: application/sdp
Content-Length: 836

v=0
o=root 1652891600 1652891600 IN IP4 10.10.3.60
s=Asterisk PBX 16.6.2
c=IN IP4 10.10.3.60
t=0 0
m=audio 16574 RTP/SAVPF 0 8 3 111 9 18 101
a=crypto:1 AES_CM_128_HMAC_SHA1_80 inline:zdmWp34CwhBMFUrpaopDnkgiRpasmgOCx3oylii0
a=rtpmap:0 PCMU/8000
a=rtpmap:8 PCMA/8000
a=rtpmap:3 GSM/8000
a=rtpmap:111 G726-32/8000
a=rtpmap:9 G722/8000
a=rtpmap:18 G729/8000
a=fmtp:18 annexb=no
a=rtpmap:101 telephone-event/8000
a=fmtp:101 0-16
a=maxptime:150
a=ice-ufrag:583513ee437a54346b5461ed75dae425
a=ice-pwd:3c142db12530fbea1b34a852386ab03e
a=candidate:Ha0a033c 1 UDP 2130706431 10.10.3.60 16574 typ host
a=candidate:Hac1f0223 1 UDP 2130706431 172.31.2.35 16574 typ host
a=candidate:Ha0a033c 2 UDP 2130706430 10.10.3.60 16575 typ host
a=candidate:Hac1f0223 2 UDP 2130706430 172.31.2.35 16575 typ host
a=rtcp-mux
a=sendrecv
+32s
jssip.min.js:9 JsSIP:Transport send() +4ms
jssip.min.js:9 JsSIP:Transport sending message:SIP/2.0 100 Trying
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK4add14f5;rport
To: <sip:gvom3690@n5j0ubmaa14c.invalid;transport=ws>
From: "303" <sip:303@10.10.3.60>;tag=as0c77d3be
Call-ID: 4a5259df388e2e324572922a5c7d547e@10.10.3.60:5060
CSeq: 102 INVITE
Supported: ice,replaces,outbound
Content-Length: 0

+1ms
jssip.min.js:9 JsSIP:WebSocketInterface send() +7ms
jssip.min.js:9 JsSIP:RTCSession new +1m
jssip.min.js:9 JsSIP:RTCSession init_incoming() +1ms
jssip.min.js:9 JsSIP:Dialog new UAS dialog created with status EARLY +1m
jssip.min.js:9 JsSIP:RTCSession newRTCSession() +2ms
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:420 t {_events: {…}, _maxListeners: undefined, _id: "4a5259df388e2e324572922a5c7d547e@10.10.3.60:5060as0c77d3be", _ua: t, _status: 4, …}
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:421 INCOMING
jssip.min.js:9 JsSIP:Transport send() +6ms
jssip.min.js:9 JsSIP:Transport sending message:SIP/2.0 180 Ringing
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK4add14f5;rport
To: <sip:gvom3690@n5j0ubmaa14c.invalid;transport=ws>;tag=8qroe9gh6b
From: "303" <sip:303@10.10.3.60>;tag=as0c77d3be
Call-ID: 4a5259df388e2e324572922a5c7d547e@10.10.3.60:5060
CSeq: 102 INVITE
Contact: <sip:gvom3690@n5j0ubmaa14c.invalid;transport=ws>
Supported: ice,replaces,outbound
Content-Length: 0

+1ms
jssip.min.js:9 JsSIP:WebSocketInterface send() +17ms
jssip.min.js:9 JsSIP:RTCSession session progress +23ms
jssip.min.js:9 JsSIP:RTCSession emit "progress" +1ms
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:436 progress
