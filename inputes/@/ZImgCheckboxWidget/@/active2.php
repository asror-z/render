<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZImgCheckboxWidgetAz;

$model = $this->modelGet(CoreInput::class, 6);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();
?>

<?php

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZImgCheckboxWidgetAz::class,
                    'options' => [
                        'data' => [
                            1 => '<img src="https://picsum.photos/seed/1/100" alt="asd" />',
                            2 => '<img src="https://picsum.photos/seed/2/100" alt="asd" />',
                            3 => '<img src="https://picsum.photos/seed/3/100" alt="asd" />',
                            4 => '<img src="https://picsum.photos/seed/4/100" alt="asd" />',
                        ],
                        'config' => [
                            'type' => ZImgCheckboxWidgetAz::type['radio'],
                        ]
                    ],
                ],
            ]
        ],
    ]
]);
$this->activeEnd();

