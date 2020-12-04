<?php

use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZSelectableCheckboxWidget;

$model = $this->modelGet(CoreInput::class, 1);

$form = $this->activeBegin();
$this->modelSave($model);
//$this->modelPost();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelectableCheckboxWidget::class,
                    'options' => [

                        'data' =>
                        [
                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ2gfp1O65ZO5ew0WCy55wKFhmwypf2ok7pHJ-8uqhg5hVSgGCh&usqp=CAU'>",
                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ2gfp1O65ZO5ew0WCy55wKFhmwypf2ok7pHJ-8uqhg5hVSgGCh&usqp=CAU'>",
//                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ2gfp1O65ZO5ew0WCy55wKFhmwypf2ok7pHJ-8uqhg5hVSgGCh&usqp=CAU'>",
//                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ2gfp1O65ZO5ew0WCy55wKFhmwypf2ok7pHJ-8uqhg5hVSgGCh&usqp=CAU'>",
//                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ2gfp1O65ZO5ew0WCy55wKFhmwypf2ok7pHJ-8uqhg5hVSgGCh&usqp=CAU'>",
//                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ2gfp1O65ZO5ew0WCy55wKFhmwypf2ok7pHJ-8uqhg5hVSgGCh&usqp=CAU'>",


                        ],
                        

                        'config' =>
                        [
                          'contentText' => 'Hi',
                            //'menuBar'=> ZSelectableCheckboxWidget::devMenu['hide'],
                          
                        ]

                    ],

                ],
            ]
        ],
    ]
]);



$this->activeEnd();
