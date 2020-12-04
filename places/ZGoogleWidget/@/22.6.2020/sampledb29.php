<!--Davlatmurod-->

<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\places\ZGoogleDb24Widget;
use zetsoft\widgets\places\ZGoogleNavigateWidget;
use zetsoft\widgets\places\ZGoogleDb29Widget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

/*echo "value first map";
echo "<pre>";
print_r($model->jsonb_10);
echo "</pre>";


echo "value second map";
echo "<pre>";
print_r($model->jsonb_7);
echo "</pre>";*/

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [

                'string_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHInputWidget::className(),
                    'options' => [
                        'config' => [

                        ],
                    ]
                ],
            ]
        ],
        [
            'attributes' => [

                'jsonb_10' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleDb29Widget::className(),
                    'options' => [
                        'config' => [
                            'data' => [3,21,16],
                            'height'                 => 500,
                            'width'                  => 800,
                            'searchAutoComplete'     => true,
                            'searchPlaceImageShow'   => false,
                            'zoom'                   => 12,
                            'markerCount'            => 5,
                            'limitWayPoints' => 3,
                            'draggable' => true,
                            'mapUseType' => 'write',
                            'depend' => 'coreinput-string_9',
                        ]
                    ]
                ],
            ]
        ],

/*
        [
            'attributes' => [

                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleDb20Widget::className(),
                    'options' => [
                        'config' => [
                            'height'          =>500,
                            'width'                 =>800,
                            'searchAutoComplete'     => true,
                            'searchPlaceImageShow'   => true,
                            'zoom'                   => '12',
                            'draggable' => true,
                            'depend'                 => [
                                'dependPlace' => true,
                                'depend_id' => 'coreinput-string_9',
                            ],
                        ]
                    ]
                ],
            ]
        ],*/


 ],

]);


/*echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [

                'jsonb_10' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleDb15Widget::className(),
                    'options' => [
                        'config' => [
                            'height'                 =>500,
                            'width'                 =>800,
                            'searchAutoComplete'     => true,
                            'searchPlaceImageShow'   => true,
                            'depend'                 => [
                                'dependPlace' => true,
                                'depend_id' => 'coreinput-string_9',
                            ],
                            'zoom'                   => '12',
                            'matkerCount'            => 1,
                            'draggable' => true
                        ]
                    ]
                ],
            ]
        ],
    ]
]);


/*echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [

                'jsonb_8' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleDb15Widget::className(),
                    'options' => [
                        'config' => [
                            'height'                 =>500,
                            'width'                 =>800,
                            'searchAutoComplete'     => true,
                            'searchPlaceImageShow'   => true,
                            'depend'                 => [
                                'dependPlace' => true,
                                'depend_id' => 'coreinput-string_9',
                            ],
                            'zoom'                   => '12',
                            'matkerCount'            => 1,
                            'draggable' => true
                        ]
                    ]
                ],
            ]
        ],
    ]
]);
*/

$this->activeEnd();




?>
