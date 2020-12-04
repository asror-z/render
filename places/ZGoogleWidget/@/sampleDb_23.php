<?php
use kartik\builder\Form;
use yii\helpers\ArrayHelper;
use zetsoft\models\shop\ShopBrand;
use zetsoft\models\shop\ShopCategory;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb11Widget;
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
//print_r($model->string_9);
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
                    'widgetClass' => ZGoogleDb11Widget::className(),
                    'options' => [
                        'config' => [
                            'searchAutoComplete' => false,
                            'searchPlaceImageShow' => false,
                            'depend' => [
                                'dependPlace' => true,
                                'depend_id' => 'coreinput-string_9',
                            ],
                            'zoom' => '12',
                            'matkerCount' => 10,
                            'draggable' => true,
                            'mapUseType' => 'read',
                        ]
                    ]
                ],
            ]
        ],
    ]
]);

$this->activeEnd();

/*echo zetsoft\widgets\inputes\ZCheckRadioListWidget::widget([
    'id' => 'ZCheckRadioListWidget_265478',
    'data' => [
        '11111',
        '11111',
        '11111',
        '11111',
    ],
    'config' => [],
    'model' => new zetsoft\models\core\CoreInput(),
    'attribute' => 'string_2',
]);*/
?>

