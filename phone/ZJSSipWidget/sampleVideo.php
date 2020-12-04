<?php


use zetsoft\dbitem\eyuf\SIPMLItem;
use zetsoft\widgets\former\ZBootstrapModalWidget;
use zetsoft\widgets\phone\ZJsSipVideoWidget;
use zetsoft\widgets\phone\ZJsSipWidget;
use zetsoft\widgets\phone\ZJsSipWidgetX;
use zetsoft\widgets\phone\ZSipml5Widget44;
use zetsoft\widgets\phone\ZSipml5WidgetSherzod;
use zetsoft\widgets\phone\ZSipml5WidgetX;

$sipml = [];
$item = new \zetsoft\dbitem\eyuf\SIPMLItem();
$item->impu = '@10.10.3.60:5060';
$item->impi = '301';
$item->password = 301;
$item->websocket_proxy_url = 'wss://10.10.3.60:8089/ws';
$item->keypad = true;
$item->phoneInputDisplay = true;
$item->orderInputDisplay = true;
$item->autoAnswer = true;
$item->autoAnswerTimeOut = 5000;
$item->videoCallBtn = true;
$item->video = true;

$sipml[] = $item;

echo ZJsSipVideoWidget::widget([
    'data' => $sipml,
    'config' => [
        'jsPanel' => true,
        
    ]
]);
