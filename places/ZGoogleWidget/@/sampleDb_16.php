<?php
use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb7Widget;
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
                            'value' => 'salom0',
                        ],
                    ]
                ],
            ]
        ],
        [
            'attributes' => [

                'jsonb_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleDb7Widget::className(),
                    'options' => [
                        'config' => [
                            'searchAutoComplete' => true,
                            'searchPlaceImageShow' => true  ,
                            'depend' => [
                                'dependPlace' => true,
                                'depend_id' => 'coreinput-string_9',
                            ],
                            'zoom' => '12',
                            'matkerCount' => 10,
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
        position: fixed;
    }
</style>
