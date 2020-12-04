<?php


use zetsoft\dbitem\eyuf\SIPMLItem;
use zetsoft\widgets\phone\ZJsSipGetWidgetSherzod;


$sipItem = [];
$JSSIPItem = new SIPMLItem();
$JSSIPItem->impu = '301@10.10.3.31:5060';
$JSSIPItem->impi = '301';
$JSSIPItem->password = 301;
$JSSIPItem->websocket_proxy_url = 'wss://zoft.uz:8089/ws';
$JSSIPItem->keypad = true;

$sipItem[] = $JSSIPItem;

echo ZJsSipGetWidgetSherzod::widget([
    'data' => $sipItem
]);
