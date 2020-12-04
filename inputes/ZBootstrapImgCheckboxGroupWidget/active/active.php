<?php

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZBootstrapBorderGroupWidgetR;



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
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZBootstrapBorderGroupWidgetR::class,
                    'options' => [
                        'data' => [
                            1 => 'asdasd',
                            2 => 'asdasd',
                            3 => 'asdasd',
                            4 => 'asdasd',
                            5 => 'asdasd',
                            6 => 'asdasd',
                            7 => 'asdasd',
                            8 => 'asdasd',
                        ],
                        'config' => [
                        ],
                    ]
                ],
            ]
        ]
    ]
]);


$this->activeEnd();
