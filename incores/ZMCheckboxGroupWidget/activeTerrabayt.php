<?php
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;

$model = $this->modelGet(CoreInput::class, 7);
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();
$sposoboplata = [
    1 =>'Наличными',
    2 =>'Терминал'
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,

    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMCheckboxGroupWidget::class,
                    'options' => [
                        'data' => $sposoboplata,
                        'config' => [
                           
                        ]
                    ],
                ],
            ]
        ],
    ],
    'event' => [
        'formChange' => <<<JS
    function() {
        $(this).submit()
    }
JS,

    ]
]);

//echo ZFormWidget::widget([
//    'model' => $model,
//    'form' => $form,
//
//    'rows' => [
//        [
//            'attributes' => [
//                'jsonb_2' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZMCheckboxGroupWidget::class,
//                    'options' => [
//                        'data' => $sposoboplata,
//                        'config' => [
//
//                        ]
//                    ],
//                ],
//            ]
//        ],
//    ]
//]);
//
//echo ZFormWidget::widget([
//    'model' => $model,
//    'form' => $form,
//
//    'rows' => [
//        [
//            'attributes' => [
//                'jsonb_3' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZMCheckboxGroupWidget::class,
//                    'options' => [
//                        'data' =>$sposoboplata,
//                        'config' => [
//
//                        ]
//                    ],
//                ],
//            ]
//        ],
//    ]
//]);
$this->activeEnd();
