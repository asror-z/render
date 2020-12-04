<?php
use kartik\builder\Form;
use yii\helpers\ArrayHelper;
use zetsoft\models\shop\ShopBrand;
use zetsoft\models\shop\ShopCategory;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb13Widget;
use zetsoft\widgets\former\ZFormWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

echo "value";
echo "<pre>";
print_r($model->jsonb_5);
//print_r($model->string_9);
echo "</pre>";

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [

                'jsonb_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleDb13Widget::className(),
                    'options' => [
                        'config' => [
                            'zoom' => '12',
                        ]
                    ]
                ],
            ]
        ],

        [
            'attributes' => [

                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleDb13Widget::className(),
                    'options' => [
                        'config' => [
                            'zoom' => '12',
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

