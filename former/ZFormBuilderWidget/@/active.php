<?php


use zetsoft\models\user\UserBlocked;
use zetsoft\widgets\former\ZFormBuildWidgetM;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
$model = new UserBlocked();
/** @var ZView $this */
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFormBuildWidgetM::class,
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
