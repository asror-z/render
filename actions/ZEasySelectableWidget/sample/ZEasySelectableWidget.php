<?php


use zetsoft\widgets\actions\ZEasySelectableWidget;

echo ZEasySelectableWidget::widget([

    'config' => [
        'color' => ZEasySelectableWidget::color['blue lighten-3'],
        'tag' => ZEasySelectableWidget::Tag['li'],
    ],
    'items' => [
    ['name' => 'Item 1'],
    ['name' => 'Item 2'],
    ['name' => 'Item 3'],

    ]
    
]);
