<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidgetX;
use zetsoft\widgets\market\ZMiniCardWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);
$items = [

1 => ['1' => '<span class="imgCheckbox0">' . ZMiniCardWidget::widget() . '</span>',
    '2' => "<img src='/render/inputes/ZImageCheckboxWidget/demo/demo_files/image1.jpg' class='checkable'>",
    '3' => "<img src='/render/inputes/ZImageCheckboxWidget/demo/demo_files/image1.jpg' class='checkable'>"],

    

    '2' => [1 => '<div class="rounded-circle d-flex p-3 mb-3 bg-primary text-white"></div>',
        2 => '<div class="rounded-circle d-flex p-3 mb-3 bg-danger text-white"></div>',
        3 => '<div class="rounded-circle d-flex p-3 mb-3 bg-warning text-white"></div>',],
];
foreach ($items as $key => $val)

     $item[] = $val;

vdd($item);

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
                    'widgetClass' => ZImageCheckboxGroupWidgetX::class,
                    'options' => [
                    'data' => $val,

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

