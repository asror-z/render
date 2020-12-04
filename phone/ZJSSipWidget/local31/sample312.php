<?php


use zetsoft\dbitem\eyuf\SIPMLItem;
use zetsoft\widgets\phone\ZJsSipGetWidgetSherzod;

/*$sipml = [];
$SIPMLItem = new \zetsoft\dbitem\eyuf\SIPMLItem();
$SIPMLItem->realm = '94.158.52.244:7777';
$SIPMLItem->impi = '301';
$SIPMLItem->impu = 'sip:301@94.158.52.244:7777';
$SIPMLItem->password = '301';
$SIPMLItem->websocket_proxy_url = 'wss://zoft.uz:8089/ws';
$SIPMLItem->display_name = '301';
$SIPMLItem->keypad = true;
$SIPMLItem->callBtn = true;
$SIPMLItem->videoCallBtn = false;
$SIPMLItem->btnHangUp = true;*/

/*$sipml[] = $SIPMLItem;*/

$sipItem = [];
$JSSIPItem = new SIPMLItem();
$JSSIPItem->impu = '312@10.10.3.31:5060';
$JSSIPItem->impi = '312';
$JSSIPItem->password = 312;
$JSSIPItem->websocket_proxy_url = 'wss://zoft.uz:8089/ws';
$JSSIPItem->keypad = true;

$sipItem[] = $JSSIPItem;

echo ZJsSipGetWidgetSherzod::widget([
    'data' => $sipItem
]);
