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

echo ZTabWidget::widget([
    'data' => [
        'First tab' => [
            'content' =>
             '<iframe src="/bozor/login/locationpage.aspx" width = "100%" height="1000px" scrolling="no"frameborder="no">

                 
            </iframe>',
            
            

            'pushUrl' => true,
        ],
        'Second tab' => 'asd',
        
        
    ],
    'config' => [
        'type' => ZTabWidget::Type['classic'],
        'mdTabColor' => ZTabWidget::MdTabColor['blue'],
        'classicTabColor' => ZTabWidget::ClassicTabColor['tabs-primary'],
        'mdPills' => true,
        'tabPanelId' => 'tab-panel-id',
        'contentPanelId' => 'content-panel-id',
    ]
]);

