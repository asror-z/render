
<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb22Widget;
use zetsoft\widgets\places\ZGoogleDb22WidgetZoir;
use zetsoft\widgets\places\ZGoogleReadyNavigationWidget;
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

          /*
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
                    'widgetClass' => \zetsoft\widgets\places\ZGoogleDbWidgetZ::className(),
                    'options' => [
                        'config' => [
                            'data' => ['3',26],
                            'height'                 =>500,
                            'width'                  =>800,
                            'searchAutoComplete'     => false,
                            'searchPlaceImageShow'   => false,
                            'zoom'                   => '12',
                            'markerCount'            => 0,
                            'limitWayPoints'         => 2,
                            'optimizeWaypoints'      => true,
                            'draggable'              => true,
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
