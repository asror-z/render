<?php

use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZBootstrapImgCheckboxWidgetM;
use zetsoft\widgets\inputes\ZSelectableGroupWidget;
use zetsoft\widgets\inputes\ZSelectableWidget;
use zetsoft\widgets\inputes\ZSelectableSingleWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

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
                'jsonb_10' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelectableGroupWidget::class,
                    'options' => [

                        'data' =>
                        [
                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSRxlKwdCYkDZ5L9u6hqJ7xjjRww9auIPEmYY9_MqMERzAq4Wby&usqp=CAU'>",
                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQi7t3FYAtluqZnaiQlUkUpqiDLLPS7kEZlcTysID9X4pOcMlOO&usqp=CAU'>",
                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQi7t3FYAtluqZnaiQlUkUpqiDLLPS7kEZlcTysID9X4pOcMlOO&usqp=CAU'>",
                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSRxlKwdCYkDZ5L9u6hqJ7xjjRww9auIPEmYY9_MqMERzAq4Wby&usqp=CAU'>",
                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQi7t3FYAtluqZnaiQlUkUpqiDLLPS7kEZlcTysID9X4pOcMlOO&usqp=CAU'>",
                            "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQi7t3FYAtluqZnaiQlUkUpqiDLLPS7kEZlcTysID9X4pOcMlOO&usqp=CAU'>",

                            ZButtonWidget::widget([
                                'config' => [
                                    'text' => 'button',
                                    'title' => 'button',
                                    'btnStyle' => ZButtonWidget::btnStyle['btn-danger'],
                                ]
                            ])
                        ],

                        'config' =>
                        [
                          'contentText' => '',
                            'menuBar'=> ZSelectableGroupWidget::devMenu['hide'],
                          
                        ]

                    ],

                ],
            ]
        ],
    ]
]);



$this->activeEnd();
