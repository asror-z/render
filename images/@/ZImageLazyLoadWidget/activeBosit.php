<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZImageCheckboxGroupWidgetOLD;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 8);
/** @var ZView $this */

$items = [
   'image' => "<img src='/render/inputes/ZImageCheckboxWidget/demo/demo_files/image1.jpg' class='checkable'>",
   'key' => '1',

];
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'int_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZImageCheckboxGroupWidgetOLD::class,
                    'options' => [
                        /*'data' => [],*/
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-'. FA::_USERS,
                            'src' => $items,
                        ],

                    ],
                ],

            ]
        ]


    ]
]);


$this->activeEnd();

