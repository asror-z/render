<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDbWidget;
use zetsoft\widgets\former\ZFormWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

echo "value";
echo "<pre>";
print_r($model->jsonb_9);
echo "</pre>";

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
                        'widgetClass' => ZGoogleDbWidget::className(),
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


$this->activeEnd();
?>
