<?php

<<<<<<< HEAD
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inptest\ZImageCheckboxGroupWidget;
use zetsoft\widgets\inptest\ZMCheckboxImageWidget;
use zetsoft\widgets\inputes\ZImageCheckboxWidget;
use zetsoft\widgets\market\ZMiniCardWidget;
use zetsoft\widgets\market\ZDraggableNumber;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class);
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
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZDraggableNumber::class,
                    'options' => [

                        'value' => [
                        ],

                        'config' => [
                            'radio' => true,

                        ]
                    ],
                    vdd($model),
                ],
            ]
        ],
    ]
]);

$this->activeEnd();
=======

use zetsoft\widgets\market\ZDraggableNumber;

echo ZDraggableNumber::widget();
>>>>>>> parent of 7ac1fdfbb... 20-05-2020_17-50-19
