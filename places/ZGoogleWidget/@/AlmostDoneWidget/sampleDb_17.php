<?php
use kartik\builder\Form;
use yii\helpers\ArrayHelper;
use zetsoft\models\shop\ShopBrand;
use zetsoft\models\shop\ShopCategory;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb15Widget;
use zetsoft\widgets\places\ZGoogleDbWidget;
use zetsoft\widgets\former\ZFormWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();

$action->title = Azl . 'Веб-действия';

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
                            'value' => 'salom0',
                        ],
                    ]
                ],
            ]
        ],
        [
            'attributes' => [

                'jsonb_10' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleDb15Widget::className(),
                    'options' => [
                        'config' => [
                            'searchAutoComplete' => true,
                            'searchPlaceImageShow' => true  ,
                            'depend' => [
                                'dependPlace' => true,
                                'depend_id' => 'string_9',
                            ],
                            'zoom' => '12',
                            'draggable' => true,
                            'matkerCount' => 1
                        ]
                    ]
                ],
            ]
        ],
    ]
]);

$this->activeEnd();
?>

