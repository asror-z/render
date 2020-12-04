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

use zetsoft\widgets\navigat\ZPillTabWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZTabWidget;

echo ZPillTabWidget::widget([
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
        'type' => ZTabWidget::Type['md'],
        'mdTabColor' => ZTabWidget::MdTabColor['blue'],
        'classicTabColor' => ZTabWidget::ClassicTabColor['tabs-primary'],
        'mdPills' => true,
        'tabPanelId' => 'tab-panel-id',
        'contentPanelId' => 'content-panel-id',
    ]
]);
