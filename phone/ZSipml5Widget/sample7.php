<?php


use zetsoft\widgets\former\ZBootstrapModalWidget;
use zetsoft\widgets\phone\ZSipml5Widget44;
use zetsoft\widgets\phone\ZSipml5WidgetAbdulloh;

echo ZSipml5WidgetAbdulloh::widget([
       'config' => [
           'impi' => '333',
           'realm'=> '94.158.52.244:7777',
           'impu' => 'sip:333@94.158.52.244:7777',
           'password' => '333',
           'display_name'=> '333',
           'websocket_proxy_url'=> 'wss://10.10.3.41:8089/ws',
        ],
]);
