<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\yandex\ZFeatureWidget;

echo ZFeatureWidget::widget([
    'config' => [
        'data' =>[
            'item1'=>'item2',
            'item2'=>'item3',
            'item3'=>'item4',
            'item4'=>'item5',
        ],
        
    ]
]);
