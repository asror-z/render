<?php


use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZYandex10WidgetA;
use zetsoft\widgets\places\ZYandex11WidgetA;
use zetsoft\widgets\places\ZYandexW;
use zetsoft\widgets\places\ZYandexWidget12;
use zetsoft\widgets\places\ZYandexWidgetA;
use zetsoft\widgets\places\ZYandexWidgetOld;
use zetsoft\widgets\places\ZYandexWidgetS;
use zetsoft\widgets\places\ZYandexWidgetZ;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

echo " value";
echo "<pre> ";
//print_r($model->jsonb_8);
$this->modelPost();
echo "</pre>";
$poits=$model::find()->orderBy(['id' => SORT_ASC])->all();
/*vd($dfdf[0]->jsonb_8);
vd($dfdf[1]->jsonb_8);
vd($dfdf[2]->jsonb_8);
vd($dfdf[3]->jsonb_8);
vd($dfdf[4]->jsonb_8);
vd(count($dfdf));
$json=json_encode($dfdf[count($dfdf)-1]->jsonb_8);
$json=json_decode($json);
vd($json);*/
$coord=$poits[count($poits)-1]->jsonb_8;
//vd($coord);
//$coord=json_decode($coord);
//vd($coord);
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
                        "id" => "testing",
                        'config' => [
                        ],
                    ]
                ],
            ]
        ],
        [
            'attributes' => [

                'jsonb_8' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZYandexWidgetZ::className(),
                    'options' => [
                        "id" => "testing",
                        'config' => [
                            'zoom' => '12',
                            'coordinaties' => $coord,
                            'countMarker' => 1,
                            'depend' => [
                                'dependPlace' => true,
                                'depend_id' => 'coreinput-string_9',
                            ],
                        ]
                    ]
                ],
            ]
        ],
    ]
]);


$this->activeEnd();
