<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\system\Az;

$model = $this->modelGet(CoreInput::class, 6);
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
                'string_2' => [
                    'widgetClass' => ZInputWidget::class,
                    'type' => Form::INPUT_WIDGET,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'placeholder' => 'Value',
                            'changeSubmit' => true,
                            'type' => ZInputWidget::type['text'],
                        ]
                    ]
                ],
            ]
        ],
    ]
]);

$this->activeEnd();

