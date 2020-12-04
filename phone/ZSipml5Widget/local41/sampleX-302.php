<?php


use zetsoft\widgets\former\ZBootstrapModalWidget;
use zetsoft\widgets\phone\ZSipml5Widget44;
use zetsoft\widgets\phone\ZSipml5WidgetSherzod;
use zetsoft\widgets\phone\ZSipml5WidgetX;

$sipml = [];
$SIPMLItem = new \zetsoft\dbitem\eyuf\SIPMLItem();
$SIPMLItem->realm = '10.10.3.41:5060';
$SIPMLItem->impi = '302';
$SIPMLItem->impu = 'sip:302@10.10.3.41:5060';
$SIPMLItem->password = '302';
$SIPMLItem->websocket_proxy_url = 'wss://wss41.zoft.uz:8089/ws';
$SIPMLItem->display_name = '302';
$SIPMLItem->keypad = true;
$SIPMLItem->callBtn = true;
$SIPMLItem->videoCallBtn = false;
$SIPMLItem->btnHangUp = true;

$sipml[] = $SIPMLItem;

echo ZSipml5WidgetSherzod::widget([
    'data' => $sipml
]);
