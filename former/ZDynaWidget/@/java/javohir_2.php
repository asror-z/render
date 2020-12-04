<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\models\test\TestDilshod;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZCheckButtonWidgetJavohir;
use zetsoft\widgets\former\ZCheckSelectWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetA;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = new TestDilshod();


$button = ZCheckButtonWidgetJavohir::widget([
    'config' => [
        'text' => 'Button',
        'class' => 'simple-Report',
        'url' => 'check',
        'attribute' => 'data',
        'modelClassName' => 'TestDilshod',
        'value' => 'rtedyu'
    ],
   /* 'event' => [
        'ajaxSuccess' => <<<JS
        function () {
            $('#{$model->className}_Grid_Reset').click();
                //$('#TestDilshod_Grid_Reset').click();
        }
JS,

    ]*/
]);


echo ZDynaWidget::widget([
    'model' => $model,
    'id' => 'Report',
    'button' => [
        'toolbarButtons' => [

            'content' => $button,
            'options' => ['class' => '']

        ],
    ]
]);
