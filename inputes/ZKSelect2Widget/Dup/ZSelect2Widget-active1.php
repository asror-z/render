<?php
/** @var ZView $this */
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZSelect2Widget;
use zetsoft\widgets\inptest\ZSelect2WidgetNew2;
use zetsoft\widgets\inptest\ZSelect2WidgetNew4;

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
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelect2WidgetNew4::class,
                    'options' => [
                        'data' => $data,
                        'config' => [                   

                        ]
                    ],
                ],

              
            ]
        ],
    ]
]);

$this->activeEnd();
