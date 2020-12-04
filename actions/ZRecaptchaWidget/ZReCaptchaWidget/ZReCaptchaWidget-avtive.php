<?php


use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inptest\ZReCaptchaWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inptest\ZCheckBoxWidget;


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
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZReCaptchaWidget::class,
                    'options' => [

                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();

