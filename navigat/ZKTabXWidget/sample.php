<?php

use kartik\tabs\TabsX;
use zetsoft\widgets\navigat\ZKTabXWidget;


$items = [
    [
        'label' => '<i class="fas fa-home"></i> Home My Home',
        'content' => "Content",
        'active' => true
    ],
    [
        'label' => '<i class="fas fa-save"></i> Home 2',
        'content' => "Content",
    ],
    [
        'label' => '<i class="fas fa-user"></i> Profile',
        'content' => "asdasd",
        'linkOptions' => ['data-url' => \yii\helpers\Url::to(['/eyuf/cores/main/index'])]
    ],
    [
        'label' => '<i class="fas fa-list-alt"></i> Menu',
        'items' => [
            [
                'label' => 'Option 1',
                'encode' => false,
                'content' => "content3",
            ],
            [
                'label' => 'Option 2',
                'encode' => false,
                'content' => "content4",
            ],
        ],
    ],
    [
        'label' => '<i class="fas fa-king"></i> Disabled',
        'linkOptions' => ['class' => 'disabled']
    ],
];

echo ZKTabXWidget::widget([
    'config' => [
        'items' => $items,
        'position' => ZKTabXWidget::position['above'],
    ]

]);
