
<?php

use kartik\builder\Form;
use yii\helpers\Url;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
//use zetsoft\widgets\places\ZGoogleDb22Widget;
//use zetsoft\widgets\places\ZGoogleDb22WidgetZoir;
use zetsoft\widgets\places\ZGoogleNavigationJamWidget;
use zetsoft\widgets\places\ZGoogleZoirNavigation;
use zetsoft\widgets\former\ZFormWidgetJ;
use zetsoft\widgets\places\ZGoogleZoirNavigationUpdated;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';


echo ZFormWidgetJ::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleZoirNavigationUpdated::className(),
                    'options' => [
                        'config' => [
                            'data'                   => [130,131,140],
                            //'data'                 => file_get_contents("/api/core/app/service.aspx?namespace=market&service=wares&method=coordinates&args=24"),
                            'height'                 => 500,
                            'width'                  => 800,
                            'searchAutoComplete'     => true,
                            'searchPlaceImageShow'   => false,
                            'zoom'                   => 12,
                            'markerCount'            => 5,
                            'limitWayPoints'         => 10,
                            'draggable'              => true,
                            'mapUseType'             => 'read',
                            'depend'                 => 'coreinput-string_9',
                        ]
                    ]
                ],
            ]
        ],



    ],

]);



$this->activeEnd();
?>
