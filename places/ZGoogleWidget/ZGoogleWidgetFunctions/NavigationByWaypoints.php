<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb21Widget;
use zetsoft\widgets\places\ZGoogleDb22Widget;
use zetsoft\widgets\places\ZGoogleWidget;
use zetsoft\widgets\former\ZFormWidget;


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
                    'widgetClass' => ZGoogleDb22Widget::className(),
                    'options' => [
                        'config' => [
                            'height'          =>500,
                            'width'                 =>800,
                            'searchAutoComplete'     => false,
                            'searchPlaceImageShow'   => false,
                            'zoom'                   => '12',
                            'matkerCount'            => 5,
                            'limitWayPoints' => 5,
                            'optimizeWaypoints' => false,
                            'draggable' => true,
                            'mapUseType' => 'read',
                            'depend'                 => [
                                'dependPlace' => true,
                                'depend_id' => 'coreinput-string_9',
                            ],
                        ]
                    ]
                ],
            ]
        ],
 ],

]);


$this->activeEnd();




?>
