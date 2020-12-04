<?php

use zetsoft\widgets\blocks\ZCollapseWidgetOLD;

echo ZCollapseWidgetOLD::widget([

    'config' => [

        'links' => [
            'Link 1',
            'Link 2',
            'Link 3',
            'Link 4',
        ],

        'contents' => [
            'Content of Link 1',
            'Content of Link 2',
            'Content of Link 3',
            'Content of Link 4',
        ]

    ]

]);
