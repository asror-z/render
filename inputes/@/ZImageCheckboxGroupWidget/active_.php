<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZImageCheckboxGroupWidgetX_18052020;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidget;
use zetsoft\widgets\cards\ZMiniCardWidget;
//ZMiniCardWidget



$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
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
                    'widgetClass' => ZImageCheckboxGroupWidgetX_18052020::class,
                    'options' => [

                        'config' => [
                            'radio' => true,
                        ],

                        'data' =>[
                            '1' => '<span class="imgCheckbox0">' . ZMiniCardWidget::widget() . '</span>',
                            '2' => "<img src='/render/inputes/ZImageCheckboxWidget/demo/demo_files/image1.jpg' class='checkable'>",
                            '3' => "<img src='/render/inputes/ZImageCheckboxWidget/demo/demo_files/image1.jpg' class='checkable'>"
                        ]
                    ],
                ],
            ]
        ],
    ]
]);
$this->activeEnd();

