<?php

use zetsoft\widgets\menus\ZSmartMenuWidget;


echo ZSmartMenuWidget::widget([
    'config' => [
        'data' => [
            'Item1' => '#',
            'Item2' => '#',
            'Item3' => [
                'Item31' => '#',
                'Item32' => '#',
                'Item33' => '#'
            ],
            'Item4' => '#',
            ]
    ]

]);
