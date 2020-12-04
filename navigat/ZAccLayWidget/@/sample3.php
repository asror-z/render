<?php


use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZAccLayWidget3;



echo ZAccLayWidget3::widget([
    'config' => [
        'bgColor' => ZAccLayWidget3::bgColor['bg-info'],
        'textColor' => ZAccLayWidget3::textColor['text-dark'],
        'name' => 'Lorem',
        'icon' => '',
        'text' => $value,
    ]
]);
