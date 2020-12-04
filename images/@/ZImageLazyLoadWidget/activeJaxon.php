<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidget;
use zetsoft\widgets\market\ZMiniCardWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 12);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);
//$this->modelPost();
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
                            1 => ZMiniCardWidget::widget(),
                            2 => ZMiniCardWidget::widget(),
                            3 => ZMiniCardWidget::widget(),
                        ],

                        'config' => [
                            'radio' => true,


                        ]
                    ],
                ],
            ]
        ],
    ]
]);
$this->activeEnd();

