<?php

//layout => default ,switch ,icon ,def-toggle ,icon-toggle ,def-radio ,icon-radio
//style => p-fill -p-thick
//animation => p-smooth , p-jelly , p-tada ,p-rotate ,p-pulse
use zetsoft\widgets\inputes\ZKTimePickerWidget;
use zetsoft\widgets\inputes\ZBootstrapFileInputWidget_OLD;
use zetsoft\widgets\inputes\ZPrettyCheckboxWidget;
use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'zbootstrapfileinputwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZBootstrapFileInputWidget_OLD::class,
                    'options' => [
                       
                    ],

                ],
            ]
        ],
    ],
]);

$this->activeEnd();



