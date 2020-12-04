<?php
/**
 * @author Muminov Umid
 */

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$form = $this->activeBegin();
$this->modelSave($model);
?>

<?php

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZKSliderIonWidget::class,
                    'options' => [
                        'config' => [
                            'start' => [10],
                            'range' => [
                                'min' => 10,
                                'max' => 150
                            ],
                            'format' => [
                                'suffix' => " so'm"
                            ]
                        ]
                    ],
                ],
            ]
        ],




    ]
]);


$this->activeEnd();
