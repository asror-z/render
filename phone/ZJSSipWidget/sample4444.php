<?php


use zetsoft\dbitem\eyuf\SIPMLItem;
use zetsoft\widgets\former\ZBootstrapModalWidget;
use zetsoft\widgets\phone\ZJsSipWidget;
use zetsoft\widgets\phone\ZSipml5Widget44;
use zetsoft\widgets\phone\ZSipml5WidgetSherzod;
use zetsoft\widgets\phone\ZSipml5WidgetX;

$sipml = [];
$item = new \zetsoft\dbitem\eyuf\SIPMLItem();
$item->impu = '@10.10.3.31:5060';
$item->impi = '314';
$item->password = 314;
$item->websocket_proxy_url = 'wss://zoft.uz:8089/ws';
$item->keypad = true;
$item->phoneInputDisplay = true;
$item->orderInputDisplay = true;
$item->autoAnswer = false;
$item->autoAnswerTimeOut = 5000;

$sipml[] = $item;

echo ZJsSipWidget::widget([
    'data' => $sipml
]);
