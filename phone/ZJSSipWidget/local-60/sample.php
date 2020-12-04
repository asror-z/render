<?php


use zetsoft\dbitem\App\eyuf\SIPMLItem;
use zetsoft\widgets\former\ZBootstrapModalWidget;
use zetsoft\widgets\phone\ZJsSipWidget;
use zetsoft\widgets\phone\ZJsSipWidgetX;
use zetsoft\widgets\phone\ZSipml5Widget44;
use zetsoft\widgets\phone\ZSipml5WidgetSherzod;
use zetsoft\widgets\phone\ZSipml5WidgetX;

$sipml = [];
$item = new SIPMLItem();
$item->impu = '@10.10.3.60:5060';
$item->impi = '600';
$item->password = 600;
$item->websocket_proxy_url = 'wss://10.10.3.60:8089/ws';
$item->keypad = true;
$item->phoneInputDisplay = true;
$item->orderInputDisplay = true;
$item->autoAnswer = true;
$item->autoAnswerTimeOut = 5000;

$sipml[] = $item;

echo ZJsSipWidgetX::widget([
    'data' => $sipml
]);
