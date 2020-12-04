<?php

use zetsoft\dbitem\eyuf\CheckboxItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\actions\ZRecaptchaWidgetX;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZBootstrapBorderGroupWidgetM;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 1);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'int_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZRecaptchaWidgetX::class,
                    'options' => [
                        'config' => [
                        ],
                    ]
                ],
            ]
        ]
    ]
]);


$this->activeEnd();
