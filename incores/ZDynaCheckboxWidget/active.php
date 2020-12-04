<?php


use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\incores\ZDynaCheckboxWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 1);
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
                'bool_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZDynaCheckboxWidget::class,
                    'options' => [
                        'config' => [

                        ],
                    ]
                ],
            ]
        ],
    ],
]);


$this->activeEnd();

