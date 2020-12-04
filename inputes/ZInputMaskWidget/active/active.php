<?php

use zetsoft\system\Az;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZInputMaskWidget;

$model = $this->modelGet(CoreInput::class, 6);
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
                'string_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputMaskWidget::class,
                    'options' => ['config' => [
                        'hasIcon' => true,
                        'icon' => 'fas fa-' . FA::_USERS
                    ]
                    ]
                ],

            ]
        ],

    ]
]);


$this->activeEnd();

