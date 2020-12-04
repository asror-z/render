jssip.min.js:9 JsSIP:WebSocketInterface received WebSocket message +12s
jssip.min.js:9 JsSIP:Transport received text message:INVITE sip:4bfgqu4k@f395i2k39bgr.invalid;transport=ws SIP/2.0
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK117f0940;rport
Max-Forwards: 70
From: "303" <sip:303@10.10.3.60>;tag=as6ea0b430
To: <sip:4bfgqu4k@f395i2k39bgr.invalid;transport=ws>
Contact: <sip:303@10.10.3.60:5060;transport=ws>
Call-ID: 5665ca340738d1674e3fee682e313d9d@10.10.3.60:5060
CSeq: 102 INVITE
User-Agent: FPBX-15.0.16.42(16.6.2)
Date: Mon, 10 Aug 2020 12:50:45 GMT
Allow: INVITE, ACK, CANCEL, OPTIONS, BYE, REFER, SUBSCRIBE, NOTIFY, INFO, PUBLISH, MESSAGE
Supported: replaces, timer
P-Asserted-Identity: "303" <sip:303@10.10.3.60>
Content-Type: application/sdp
Content-Length: 836

v=0
o=root 1284795014 1284795014 IN IP4 10.10.3.60
s=Asterisk PBX 16.6.2
c=IN IP4 10.10.3.60
t=0 0
m=audio 10620 RTP/SAVPF 0 8 3 111 9 18 101
a=crypto:1 AES_CM_128_HMAC_SHA1_80 inline:hJocBW+rxH9W+44r5EUQVpUilCGwcVtvCthpHgO7
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
a=ice-ufrag:37a101284753926e1070423a61c8b634
a=ice-pwd:06f7d42035b4281700b95024544bfc39
a=candidate:Ha0a033c 1 UDP 2130706431 10.10.3.60 10620 typ host
a=candidate:Hac1f0223 1 UDP 2130706431 172.31.2.35 10620 typ host
a=candidate:Ha0a033c 2 UDP 2130706430 10.10.3.60 10621 typ host
a=candidate:Hac1f0223 2 UDP 2130706430 172.31.2.35 10621 typ host
a=rtcp-mux
a=sendrecv
+12s
jssip.min.js:9 JsSIP:Transport send() +2ms
jssip.min.js:9 JsSIP:Transport sending message:SIP/2.0 100 Trying
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK117f0940;rport
To: <sip:4bfgqu4k@f395i2k39bgr.invalid;transport=ws>
From: "303" <sip:303@10.10.3.60>;tag=as6ea0b430
Call-ID: 5665ca340738d1674e3fee682e313d9d@10.10.3.60:5060
CSeq: 102 INVITE
Supported: ice,replaces,outbound
Content-Length: 0

+1ms
jssip.min.js:9 JsSIP:WebSocketInterface send() +6ms
jssip.min.js:9 JsSIP:RTCSession new +12s
jssip.min.js:9 JsSIP:RTCSession init_incoming() +1ms
jssip.min.js:9 JsSIP:Dialog new UAS dialog created with status EARLY +12s
jssip.min.js:9 JsSIP:RTCSession newRTCSession() +1ms
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:420 t {_events: {…}, _maxListeners: undefined, _id: "5665ca340738d1674e3fee682e313d9d@10.10.3.60:5060as6ea0b430", _ua: t, _status: 4, …}
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:421 INCOMING
jssip.min.js:9 JsSIP:Transport send() +37ms
jssip.min.js:9 JsSIP:Transport sending message:SIP/2.0 180 Ringing
Via: SIP/2.0/WS 10.10.3.60:5060;branch=z9hG4bK117f0940;rport
To: <sip:4bfgqu4k@f395i2k39bgr.invalid;transport=ws>;tag=o2qb0l5o4a
From: "303" <sip:303@10.10.3.60>;tag=as6ea0b430
Call-ID: 5665ca340738d1674e3fee682e313d9d@10.10.3.60:5060
CSeq: 102 INVITE
Contact: <sip:4bfgqu4k@f395i2k39bgr.invalid;transport=ws>
Supported: ice,replaces,outbound
Content-Length: 0

+1ms
jssip.min.js:9 JsSIP:WebSocketInterface send() +39ms
jssip.min.js:9 JsSIP:RTCSession session progress +37ms
jssip.min.js:9 JsSIP:RTCSession emit "progress" +0ms
main.aspx?path=render/phone/ZJSSipWidget/local31-sher/cleanVideoX.php:436 progress
