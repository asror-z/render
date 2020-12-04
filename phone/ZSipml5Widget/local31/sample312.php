<?php


use zetsoft\widgets\phone\ZSipml5WidgetSherzod;

$sipml = [];
$SIPMLItem = new \zetsoft\dbitem\eyuf\SIPMLItem();
$SIPMLItem->realm = '10.10.3.31:5060';
$SIPMLItem->impi = '312';
$SIPMLItem->impu = 'sip:312@10.10.3.31:5060';
$SIPMLItem->password = '312';
$SIPMLItem->websocket_proxy_url = 'wss://zoft.uz:8089/ws';
$SIPMLItem->display_name = '312';
$SIPMLItem->keypad = true;
$SIPMLItem->callBtn = true;
$SIPMLItem->videoCallBtn = false;
$SIPMLItem->btnHangUp = true;

$sipml[] = $SIPMLItem;



echo ZSipml5WidgetSherzod::widget([
    'data' => $sipml
]);
