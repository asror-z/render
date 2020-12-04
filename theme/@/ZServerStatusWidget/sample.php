<?php

/**
 *
 *
 * Author:  Dilshodjon Olimov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZPillWidget;
use zetsoft\widgets\themes\ZServerStatusWidget;
use zetsoft\widgets\themes\ZTabWidget;

echo ZServerStatusWidget::widget([
    'data' => [
        'First tab' => 'Первый',
        'Second tab' => 'Второй',
        'New tab' => ZCardWidget::widget([
                        'config' => [
                            'title' => 'New Tab',
                            'type' => ZCardWidget::type['dynCard']
                        ],
                    ]),
        'Last' => [
            'Something',
            'disabled' => true
        ]
    ],
    'config' => [
      //  'type' => ZServerStatusWidget::Type['dynCard'],
     //   'mdTabColor' => ZServerStatusWidget::MdTabColor['pills-peach-gradient'],
     //   'classicTabColor' => ZServerStatusWidget::ClassicTabColor['pills-purple-gradient'],
        'tabPanelId' => 'tab-panel-id',
        'contentPanelId' => 'content-panel-id',
    ]
]);
