<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDbWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\places\ZGoogleDbWidgetA;
use zetsoft\widgets\places\ZGoogleDbWidgetAz;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();

$action->title = Azl . 'ZGoogleWidget Azimjon';


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

                'jsonb_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleDbWidgetAz::className(),
                    'options' => [
                        'config' => [
                            'height' => 500,
                            'width' => 800,
                            'searchAutoComplete' => true,
                            'searchPlaceImageShow' => true,
                            'depend' => [
                                'dependPlace' => true,
                                'depend_id' => 'coreinput-string_9',
                            ],
                            'zoom' => '12',
                            'matkerCount' => 1,
                            'draggable' => true
                        ]
                    ]
                ],
            ]
        ],
    ]
]);


$this->activeEnd();
?>
