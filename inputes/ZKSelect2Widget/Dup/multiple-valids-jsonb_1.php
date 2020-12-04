<?php
/** @var ZView $this */
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2WidgetMultiple;
use zetsoft\widgets\inptest\ZSelect2WidgetNew2;

$model = $this->modelGet(CoreInput::class, 3);


$data = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelPost();
$this->modelSave($model);


$model->configs->rulesAll = [
    [validatorEmail]
];


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelect2Widget::class,
                    'options' => [
                        'data' => $data,
                        'config' => [
                            'multiple' => true,
                        ]
                    ],
                ],
            
            ]
        ],
    ]
]);

$this->activeEnd();
