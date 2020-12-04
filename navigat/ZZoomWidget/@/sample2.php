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

use zetsoft\system\Az;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZPillWidget;
use zetsoft\widgets\themes\ZInterPillWidget;

Az::$app->params['widget'] = true;

echo ZInterPillWidget::widget([
    'data' => [
        'First tab' => [
            'url' => '/core/tester/ajaxify/content.aspx',
            'pushUrl' => false
        ],
        'Second tab' => [
            'url' => '/core/tester/ajaxify/sample_1.aspx',
            'pushUrl' => false
        ],
        'Uchinchi tab' => [
            'url' => '/core/tester/ajaxify/sample_3.aspx',
            'pushUrl' => false
        ],
        'Tortinchi tab' => [
            'url' => '/core/tester/ajaxify/sample_2.aspx',
            'pushUrl' => false
        ],
        'Last' => [
            'Something',
            'disabled' => true
        ]
    ],
    'config' => []
]);
