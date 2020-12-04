<?php


use zetsoft\widgets\navigat\ZAccLayWidget;

echo ZAccLayWidget::widget([
    'config' => [
        'bgColor' => ZAccLayWidget::bgColor['bg-info'],
        'textColor' => ZAccLayWidget::textColor['text-dark'],
        'icon' => 'fa fa-home',
        'title' => 'lorem',
        'content' => 'Menu',
    ]
]);