<?php
/** @var ZView $this */
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKSelect2AjaxWidget;
use zetsoft\widgets\inptest\ZSelect2Widget;
use zetsoft\widgets\inptest\ZSelect2WidgetNew2;

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
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2AjaxWidget::class,
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
