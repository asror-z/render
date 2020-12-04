<?php


use zetsoft\widgets\actions\ZEasySelectWidget;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);

/*echo ZEasySelectWidget::widget([

    'data' => [

    ],
    'config' => [

    ],
    'event' => [
        
    ]

]);*/

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [

                'bool_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZEasySelectWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'icon'=>'fas fa-user'
                        ],
                        'data' => [

                        ],
                    ]
                ],

            ]
        ]


    ]
]);

$this->activeEnd();



