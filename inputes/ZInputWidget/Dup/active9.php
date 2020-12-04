<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZInputUniverseWidget;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZHListBoxWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZICheckCheckboxListWidget;
use zetsoft\widgets\inputes\ZDynaCheckboxWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZInputMaskWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZInputWidget3;
use zetsoft\widgets\inputes\ZInputWidget_2;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZTextAreaWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


//$this->modelPost();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputWidget::class,
                    'options' => [
                        'data' => 'items',
                        'config' => [
                            'hasIcon' => true,
                            //'icon' => 'fas fa-' . FA::_USERS,
                            'placeholder' => 'fsdfds',
                            'changeSubmit' => true
                        ]
                    ]
                ],

                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTextAreaWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            //'icon' => 'fas fa-' . FA::_USERS,
                            'placeholder' => 'fsdfds',
                            'changeSubmit' => true
                        ],

                    ]
                ],

                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputMaskWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            //'icon' => 'fas fa-' . FA::_USERS,
                            'placeholder' => 'fsdfds',
                            'changeSubmit' => true
                        ],

                    ]
                ],

                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                        'data' => [
                            'btn' => 'btn',
                            'mt' => 'mt',
                            'mt-2' => 'mt-2',
                            'mt-3' => 'mt-3',
                            'btn-lg' => 'btn-lg',
                            'btn-sm' => 'btn-sm',
                            'btn-primary' => 'btn-primary',
                            'btn-success' => 'btn-success',
                            'btn-danger' => 'btn-danger',
                            'btn-warning' => 'btn-warning',
                            'btn-info' => 'btn-info',
                            'btn-dark' => 'btn-dark'
                        ],
                        'config' => [
                            //'icon' => 'fas fa-' . FA::_USERS,
                            'placeholder' => 'fsdfds',
                            'changeSubmit' => true
                        ],

                    ]
                ],


            ]
        ],

    ]
]);


$this->activeEnd();

