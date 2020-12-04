<?php

/**
 *
 *
 * Author:  Daho
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\navigat\ZPillWidget;
use zetsoft\widgets\themes\ZCardWidget;

echo ZPillWidget::widget([
    'data' => [
        'First tab' => 'Первый',
        'Second tab' => 'Второй',
        'New tab' => ZCardWidget::widget([
                        'config' => [
                            'title' => 'New Tab',
                            'type' => ZCardWidget::type['venCard']
                        ],
                    ]),
        'Last' => [
            'Something',
            'disabled' => true
        ]
    ],
    'config' => [
        'tabPanelId' => 'tab-panel-id',
        'contentPanelId' => 'content-panel-id',
    ]
]);
