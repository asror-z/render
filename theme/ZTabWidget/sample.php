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
use zetsoft\widgets\themes\ZTabWidget;

echo  ZTabWidget::widget([
    'data' => [
        'Наименование и фото товара' => [
            'content' => 'Первый',
            'pushUrl' => true,
            
        ],
        'Цена' => 'asd',
        'Количество' => ZCardWidget::widget([
                    'config' => [
                        'title' => 'New Tab lear',
                        'type' => ZCardWidget::type['venCard']
                    ],
        ]),
        'Тип доставки' => [
            'content' => 'Something',
        ]
        
    ],
    'config' => [
       /* 'type' => ZTabWidget::Type['classic'],
        'mdTabColor' => ZTabWidget::MdTabColor['white'],
        'classicTabColor' => ZTabWidget::ClassicTabColor['tabs-primary'],*/
        'mdPills' => true,
        'tabPanelId' => 'tab-panel-id',
        'contentPanelId' => 'content-panel-id',
    ]
]);
