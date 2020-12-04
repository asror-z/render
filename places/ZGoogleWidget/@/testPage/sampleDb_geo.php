<?php


use kartik\builder\Form;
use yii\helpers\ArrayHelper;
use zetsoft\models\shop\ShopBrand;
use zetsoft\models\shop\ShopCategory;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\schema\ArrayExpression;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\places\ZGoogleDbWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\places\ZGoogleGeoWidget;


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

                    'jsonb_9' => [
                        'type' => Form::INPUT_WIDGET,
                        'widgetClass' => ZGoogleGeoWidget::className(),
                        'options' => [
                            'config' => [
                                'searchAutoComplete' => true,
                                'searchPlaceImageShow' => true,
                                //'mapType' => 'hybrid',
                                'zoom' => '12'
                            ]
                        ]
                    ],
                ]
            ],
        ]
    ]);

$this->activeEnd();
?>

<style>
    #map {
        height: 600px;
    }
</style>
