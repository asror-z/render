<?php


use zetsoft\widgets\navigat\ZKContextMenuWidget;

$items = [
    ['label' => 'action', 'url' => '#', 'items' => [
        ['label' => 'action', 'url' => '#'],
        ['label' => 'Another action', 'url' => '#'],
        ['label' => 'Something else here', 'url' => '#'],
        '<li class="divider"></li>',
        ['label' => 'Separated link', 'url' => '#'],
    ]],
    ['label' => 'Another action', 'url' => '#'],
    ['label' => 'Something else here', 'url' => '#'],
    '<li class="divider"></li>',
    ['label' => 'Separated link', 'url' => '#'],
];


echo ZKContextMenuWidget::widget([
    'items' => [
        ['label' => 'menu', 'url' => 'path', 'items' => [
            ['label' => 'action', 'url' => '#'],
            ['label' => 'Another action', 'url' => '#'],
            ['label' => 'Something else here', 'url' => '#'],
            '<li class="divider"></li>',
            ['label' => 'Separated link', 'url' => '#'],
        ]],
        ['label' => 'menu', 'url' => 'path'],
        ['label' => 'menu', 'url' => 'path'],
    ]
]);

