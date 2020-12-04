<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZDynaWidgetA;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = new EyufDocument();
$url = ZUrl::to([
    'test',
    'modelClassName' => $model->className
]);


echo ZButtonWidget::widget([
    'config' => [
        'url' => $url
    ]
]);

$button = ZCheckButtonWidget::widget([
     'config' => [
        'text' => 'Button',
        'class' => 'simple-Report',
        'url' => $url
     ]
]);




echo \zetsoft\widgets\former\ZDynaWidgetA::widget([
    'model' => $model,
    'id' => 'Report',
    'config' => [
        'toolbarButtons' => [
            [
                'content' => $button,
                'options' => ['class' => '']
            ],
        ],

    ]
]);
