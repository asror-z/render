<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidget;
use zetsoft\widgets\inptest\ZMCheckboxImageWidget;
use zetsoft\widgets\inputes\ZImageCheckboxWidget;
use zetsoft\widgets\market\ZMiniCardWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 12);
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
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZImageCheckboxGroupWidget::class,
                    'options' => [
                        'data' => [
                            1 => '<div class="rounded-circle d-flex p-3 mb-3 bg-primary text-white"></div>',
                            2 => '<div class="rounded-circle d-flex p-3 mb-3 bg-danger text-white"></div>',
                            3 => '<div class="rounded-circle d-flex p-3 mb-3 bg-warning text-white"></div>',
                        ],
                        'config' => [
                            'radio' => true,
                            'multiple' => true,

                        ]
                    ],
                ],

                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZImageCheckboxGroupWidget::class,
                    'options' => [
                        'data' => [
                            4 => '<div class="rounded-circle d-flex p-3 mb-3 bg-primary text-white"></div>',
                            5 => '<div class="rounded-circle d-flex p-3 mb-3 bg-danger text-white"></div>',
                            6 => '<div class="rounded-circle d-flex p-3 mb-3 bg-warning text-white"></div>',
                        ],
                        'config' => [
                            'radio' => true,
                            'multiple' => true,

                        ]
                    ],
                ],
            ]
        ],
    ]
]);
$this->activeEnd();

