<?php

//layout => default ,switch ,icon ,def-toggle ,icon-toggle ,def-radio ,icon-radio
//style => p-fill -p-thick
//animation => p-smooth , p-jelly , p-tada ,p-rotate ,p-pulse
use rmrevin\yii\fontawesome\FA;
use zetsoft\widgets\inptest\ZPrettyCheckboxWidgetOLd;
use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inptest\ZHFileInputWidget;
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
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPrettyCheckboxWidgetOLd::class,
                    'options' => [
                         'data'=>[
                             '1'=>'1',
                             '2'=>'2',
                             '3'=>'3',
                             '4'=>'4',
                             '5'=>'5',
                             '6'=>'6',
                         ],
                        'config' => [
                            'hasIcon' => false,
                            'icon' => 'fas fa-'. FA::_USERS
                        ]
                    ],

                ],
            ]
        ],
    ],
]);

$this->activeEnd();
