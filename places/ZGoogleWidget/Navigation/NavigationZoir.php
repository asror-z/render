
<?php

use kartik\builder\Form;
use yii\helpers\Url;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
//use zetsoft\widgets\places\ZGoogleDb22Widget;
//use zetsoft\widgets\places\ZGoogleDb22WidgetZoir;
use zetsoft\widgets\places\ZGoogleNavigationJamWidget;
//use zetsoft\widgets\places\ZGoogleWidget;
use zetsoft\widgets\former\ZFormWidgetJ;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
//$this->modelPost();

$action->title = Azl . 'Веб-действия';
/*echo file_get_contents("/api/core/app/service.aspx?namespace=market&service=wares&method=coordinates&args=24");

 die;*/
 /*
echo "<pre>";
print_r($model->jsonb_7);
echo "</pre>";  */

          /*
echo "value second map";
echo "<pre>";
print_r($model->jsonb_7);
echo "</pre>";*/



echo ZFormWidgetJ::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [

        [
            'attributes' => [
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\places\ZGoogleZoirNavigation::className(),
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
