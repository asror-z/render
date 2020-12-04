<?php


use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\images\ZJQueryLoadWidget;

$model = $this->modelGet(CoreInput::class, 1);
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
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZJQueryLoadWidget::class,
                    'options' => [
                        'config' => [

                        ],
                    ],
                ],
            ],
        ],
    ],
]);

$this->activeEnd();



