<?php

use kartik\builder\Form;
use zetsoft\models\auto\ChatMessage;
use zetsoft\service\forms\Modelz;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZFileInputWidget_JK;
use zetsoft\widgets\inputes\ZFileInputWidgetNew;

$form = $this->activeBegin();
$model = new  ChatMessage();

/** @var \zetsoft\system\kernels\ZView $this */

$model->text = "Elnru";
$model->sender = 82;
$model->receiver = 4;


$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'file' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFileInputWidget::class,
                    'options' => [
                        'config' => [
                            'showCaption' => true,
                            'maxFileCount' => 5,
                        ],

                    ]

                ],
            ]

        ],


    ],
]);

$this->activeEnd();














