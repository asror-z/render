jssip.min.js:9 JsSIP:WebSocketInterface received WebSocket message +17s
jssip.min.js:9 JsSIP:Transport received text message:INVITE sip:gvom3690@n5j0ubmaa14c.invalid;transport=ws SIP/2.0
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK58aa6eb0;rport
Max-Forwards: 70
From: "303" <sip:303@10.10.3.60>;tag=as74ad7c53
To: <sip:gvom3690@n5j0ubmaa14c.invalid;transport=ws>
Contact: <sip:303@10.10.3.60:5060;transport=ws>
Call-ID: 5fc4228e7c6f43db11ed959b2c0ac6e4@10.10.3.60:5060
CSeq: 102 INVITE
User-Agent: FPBX-15.0.16.42(16.6.2)
Date: Mon, 10 Aug 2020 12:39:27 GMT
Allow: INVITE, ACK, CANCEL, OPTIONS, BYE, REFER, SUBSCRIBE, NOTIFY, INFO, PUBLISH, MESSAGE
Supported: replaces, timer
P-Asserted-Identity: "303" <sip:303@10.10.3.60>
Content-Type: application/sdp
Content-Length: 1448

v=0
o=root 1502157134 1502157134 IN IP4 10.10.3.60
s=Asterisk PBX 16.6.2
c=IN IP4 10.10.3.60
b=CT:384
t=0 0
m=audio 12982 RTP/SAVPF 0 8 3 111 9 18 101
a=crypto:1 AES_CM_128_HMAC_SHA1_80 inline:+9WQID1p0HYjWqlYRhMsxLoYkNMO5D5tGbe9roWL
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
a=ice-ufrag:79f70f694520323277f66aaf6ff97621
a=ice-pwd:7c484da3391aefce30437fc55485a041
a=candidate:Ha0a033c 1 UDP 2130706431 10.10.3.60 12982 typ host
a=candidate:Hac1f0223 1 UDP 2130706431 172.31.2.35 12982 typ host
a=candidate:Ha0a033c 2 UDP 2130706430 10.10.3.60 12983 typ host
a=candidate:Hac1f0223 2 UDP 2130706430 172.31.2.35 12983 typ host
a=rtcp-mux
a=sendrecv
m=video 13634 RTP/SAVPF 99 104
a=ice-ufrag:31f1348679c078e3125708776877c0b4
a=ice-pwd:4ce445fd64a266fb18759acf11176301
a=candidate:Ha0a033c 1 UDP 2130706431 10.10.3.60 13634 typ host
a=candidate:Hac1f0223 1 UDP 2130706431 172.31.2.35 13634 typ host
a=candidate:Ha0a033c 2 UDP 2130706430 10.10.3.60 13635 typ host
a=candidate:Hac1f0223 2 UDP 2130706430 172.31.2.35 13635 typ host
a=rtpmap:99 H264/90000
a=fmtp:99 packetization-mode=1;profile-level-id=42E01E
a=rtpmap:104 MP4V-ES/90000
a=rtcp-mux
a=sendrecv
a=crypto:1 AES_CM_128_HMAC_SHA1_80 inline:8sxH9DGODOVEWddrobgI+OuvFgcf9pgyymVqVGa7
 +17s
jssip.min.js:9 JsSIP:Transport send() +5ms
jssip.min.js:9 JsSIP:Transport sending message:SIP/2.0 100 Trying
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK58aa6eb0;rport
To: <sip:gvom3690@n5j0ubmaa14c.invalid;transport=ws>
From: "303" <sip:303@10.10.3.60>;tag=as74ad7c53
Call-ID: 5fc4228e7c6f43db11ed959b2c0ac6e4@10.10.3.60:5060
CSeq: 102 INVITE
Supported: ice,replaces,outbound
Content-Length: 0

 +1ms
jssip.min.js:9 JsSIP:WebSocketInterface send() +8ms
jssip.min.js:9 JsSIP:RTCSession new +0ms
jssip.min.js:9 JsSIP:RTCSession init_incoming() +3ms
jssip.min.js:9 JsSIP:Dialog new UAS dialog created with status EARLY +0ms
jssip.min.js:9 JsSIP:RTCSession newRTCSession() +5ms
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:420 t {_events: {…}, _maxListeners: undefined, _id: "5fc4228e7c6f43db11ed959b2c0ac6e4@10.10.3.60:5060as74ad7c53", _ua: t, _status: 4, …}
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:421 INCOMING
jssip.min.js:9 JsSIP:Transport send() +15ms
jssip.min.js:9 JsSIP:Transport sending message:SIP/2.0 180 Ringing
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK58aa6eb0;rport
To: <sip:gvom3690@n5j0ubmaa14c.invalid;transport=ws>;tag=q76nldobcf
From: "303" <sip:303@10.10.3.60>;tag=as74ad7c53
Call-ID: 5fc4228e7c6f43db11ed959b2c0ac6e4@10.10.3.60:5060
CSeq: 102 INVITE
Contact: <sip:gvom3690@n5j0ubmaa14c.invalid;transport=ws>
Supported: ice,replaces,outbound
Content-Length: 0

 +0ms
jssip.min.js:9 JsSIP:WebSocketInterface send() +16ms
jssip.min.js:9 JsSIP:RTCSession session progress +7ms
jssip.min.js:9 JsSIP:RTCSession emit "progress" +0ms
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:436 progress
