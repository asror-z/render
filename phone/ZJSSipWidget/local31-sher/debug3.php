jssip.min.js:9 JsSIP:WebSocketInterface received WebSocket message +5s
jssip.min.js:9 JsSIP:Transport received text message:INVITE sip:4bfgqu4k@f395i2k39bgr.invalid;transport=ws SIP/2.0
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK53318dfe;rport
Max-Forwards: 70
From: "303" <sip:303@10.10.3.60>;tag=as685b3be5
To: <sip:4bfgqu4k@f395i2k39bgr.invalid;transport=ws>
Contact: <sip:303@10.10.3.60:5060;transport=ws>
Call-ID: 288fc3060d0f43c8225f0f715800833b@10.10.3.60:5060
CSeq: 102 INVITE
User-Agent: FPBX-15.0.16.42(16.6.2)
Date: Mon, 10 Aug 2020 12:49:55 GMT
Allow: INVITE, ACK, CANCEL, OPTIONS, BYE, REFER, SUBSCRIBE, NOTIFY, INFO, PUBLISH, MESSAGE
Supported: replaces, timer
P-Asserted-Identity: "303" <sip:303@10.10.3.60>
Content-Type: application/sdp
Content-Length: 1448

v=0
o=root 1363841806 1363841806 IN IP4 10.10.3.60
s=Asterisk PBX 16.6.2
c=IN IP4 10.10.3.60
b=CT:384
t=0 0
m=audio 13024 RTP/SAVPF 0 8 3 111 9 18 101
a=crypto:1 AES_CM_128_HMAC_SHA1_80 inline:j60ukGGC/zb6pnn4GW9Pw07FYIQ0pqhGfVTG9xpR
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
a=ice-ufrag:2a1898d154dd5d0b1d7e7dd9036847b2
a=ice-pwd:113441e86dd7eef70a4b77cf03db516e
a=candidate:Ha0a033c 1 UDP 2130706431 10.10.3.60 13024 typ host
a=candidate:Hac1f0223 1 UDP 2130706431 172.31.2.35 13024 typ host
a=candidate:Ha0a033c 2 UDP 2130706430 10.10.3.60 13025 typ host
a=candidate:Hac1f0223 2 UDP 2130706430 172.31.2.35 13025 typ host
a=rtcp-mux
a=sendrecv
m=video 17856 RTP/SAVPF 99 104
a=ice-ufrag:29ebaaa3678be2015a3a51996b57699e
a=ice-pwd:14b24ce71f9289aa436dcfd12c10d46c
a=candidate:Ha0a033c 1 UDP 2130706431 10.10.3.60 17856 typ host
a=candidate:Hac1f0223 1 UDP 2130706431 172.31.2.35 17856 typ host
a=candidate:Ha0a033c 2 UDP 2130706430 10.10.3.60 17857 typ host
a=candidate:Hac1f0223 2 UDP 2130706430 172.31.2.35 17857 typ host
a=rtpmap:99 H264/90000
a=fmtp:99 packetization-mode=1;profile-level-id=42E01E
a=rtpmap:104 MP4V-ES/90000
a=rtcp-mux
a=sendrecv
a=crypto:1 AES_CM_128_HMAC_SHA1_80 inline:3Kb9WC4IHu7FGMoV511BoS8MqwZ2c+UvHihg+cFd
+5s
jssip.min.js:9 JsSIP:Transport send() +4ms
jssip.min.js:9 JsSIP:Transport sending message:SIP/2.0 100 Trying
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK53318dfe;rport
To: <sip:4bfgqu4k@f395i2k39bgr.invalid;transport=ws>
From: "303" <sip:303@10.10.3.60>;tag=as685b3be5
Call-ID: 288fc3060d0f43c8225f0f715800833b@10.10.3.60:5060
CSeq: 102 INVITE
Supported: ice,replaces,outbound
Content-Length: 0

+1ms
jssip.min.js:9 JsSIP:WebSocketInterface send() +8ms
jssip.min.js:9 JsSIP:RTCSession new +6s
jssip.min.js:9 JsSIP:RTCSession init_incoming() +1ms
jssip.min.js:9 JsSIP:Dialog new UAS dialog created with status EARLY +6s
jssip.min.js:9 JsSIP:RTCSession newRTCSession() +1ms
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:420 t {_events: {…}, _maxListeners: undefined, _id: "288fc3060d0f43c8225f0f715800833b@10.10.3.60:5060as685b3be5", _ua: t, _status: 4, …}
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:421 INCOMING
jssip.min.js:9 JsSIP:Transport send() +7ms
jssip.min.js:9 JsSIP:Transport sending message:SIP/2.0 180 Ringing
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK53318dfe;rport
To: <sip:4bfgqu4k@f395i2k39bgr.invalid;transport=ws>;tag=dckseek0b5
From: "303" <sip:303@10.10.3.60>;tag=as685b3be5
Call-ID: 288fc3060d0f43c8225f0f715800833b@10.10.3.60:5060
CSeq: 102 INVITE
Contact: <sip:4bfgqu4k@f395i2k39bgr.invalid;transport=ws>
Supported: ice,replaces,outbound
Content-Length: 0

+1ms
jssip.min.js:9 JsSIP:WebSocketInterface send() +8ms
jssip.min.js:9 JsSIP:RTCSession session progress +6ms
jssip.min.js:9 JsSIP:RTCSession emit "progress" +0ms
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:436 progress
