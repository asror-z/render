<?php

use zetsoft\widgets\navigat\ZKNavxWidget;

echo ZKNavxWidget::widget([
    'config' => [
        'options' => ['class' => 'nav nav-pills'],
        'items' => [
            ['label' => 'action', 'url' => '#'],
            ['label' => 'Submenu 1', 'active' => true, 'items' => [
                ['label' => 'action', 'url' => '#'],
                ['label' => 'Another action', 'url' => '#'],
                ['label' => 'Something else here', 'url' => '#'],
                '<div class="dropdown-divider"></div>',
                ['label' => 'Submenu 2', 'items' => [
                            //submenu items
                    ['label' => 'action', 'url' => '#'],
                    ['label' => 'Another action', 'url' => '#'],
                    ['label' => 'Something else here', 'url' => '#'],
                    '<div class="dropdown-divider"></div>',
                    ['label' => 'Separated link', 'items' => [
                            //separated Link
                        ['label' => 'action', 'url' => '#'],
                        ['label' => 'Another action', 'url' => '#'],
                        ['label' => 'Something else here', 'url' => '#']

                    ]],
                ]

                ],
            ]],
            ['label' => 'My Link', 'url' => '#'],
            ['label' => 'Disabled', 'linkOptions' => ['class' => 'disabled'], 'url' => '#'],
        ]
    ]
]);



