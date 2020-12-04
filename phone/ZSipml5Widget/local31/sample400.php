<?php


use zetsoft\widgets\former\ZBootstrapModalWidget;
use zetsoft\widgets\phone\ZSipml5Widget44;
use zetsoft\widgets\phone\ZSipml5WidgetSherzod;
use zetsoft\widgets\phone\ZSipml5WidgetX;

$sipml = [];
$SIPMLItem = new \zetsoft\dbitem\eyuf\SIPMLItem();
$SIPMLItem->realm = '10.10.3.31:5060';
$SIPMLItem->impi = '400';
$SIPMLItem->impu = 'sip:400@10.10.3.31:5060';
$SIPMLItem->password = '400';
$SIPMLItem->websocket_proxy_url = 'wss://zoft.uz:8089/ws';
$SIPMLItem->display_name = '400';
$SIPMLItem->keypad = true;
$SIPMLItem->callBtn = true;
$SIPMLItem->videoCallBtn = false;
$SIPMLItem->btnHangUp = true;

$sipml[] = $SIPMLItem;



echo ZSipml5WidgetSherzod::widget([
    'data' => $sipml
]);
