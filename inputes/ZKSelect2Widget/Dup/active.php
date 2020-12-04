<?php
/** @var ZView $this */
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZSelect2Widget;


$model = $this->modelGet(CoreInput::class, 3);


$data = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);



echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelect2Widget::class,
                    'options' => [
                        'data' => $data,
                        'config' => [

                        ]
                    ],
                ],
              /*  'zselect2widgetmultiple' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelect2Widget::class,
                    'options' => [
                        'data' => $data,
                        'config' => [
                            'multiple' => true
                        ]
                    ],
                ],*/
            ]
        ],
    ]
]);

$this->activeEnd();
