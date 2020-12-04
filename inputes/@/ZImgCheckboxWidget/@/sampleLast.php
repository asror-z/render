<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidgetA;



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
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZImageCheckboxGroupWidgetA
                    ::class,
                    'options' => [
                        
                    ],
                ],
            ]
        ],
    ]
]);
$this->activeEnd();

