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
use zetsoft\widgets\former\ZCheckButtonWidgetD;
use zetsoft\widgets\former\ZCheckButtonWidgetJavohir;
use zetsoft\widgets\former\ZCheckSelectNewWidget;
use zetsoft\widgets\former\ZCheckSelectWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetA;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = new TestDilshod();


$button = ZCheckSelectNewWidget::widget([
    'config' => [
        'text' => 'Buttons',
        'btnRounded' => false,
        'btnStyle' => 'btn btn-primary btn-sm pt-0 pl-2 pr-2 pb-0',
        'class' => 'simple-Report',
        'url' => ZUrl::to([
            '/api/core/app/check-new',
            'modelClassName' => $model->className,
        ]),
        'inputAttr' => 'data',
        'attr' => 'name',
        'value' => 'fgf',
        'modelClassName' => $model->className,
    ],
    'event' => [
        'ajaxSuccess' => <<<JS
function() {
    $('#{$model->className}_Grid_Reset').click();
}
JS,

    ]
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
