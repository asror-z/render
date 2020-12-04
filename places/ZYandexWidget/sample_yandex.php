<?php


use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\test\ZYandexRouteWidgetindex;
use zetsoft\widgets\places\ZGoogleDb15Widget;
use zetsoft\widgets\places\test\ZYandex10WidgetA;
use zetsoft\widgets\places\ZYandexW;
use zetsoft\widgets\places\ZYandexWidgetOld;
use zetsoft\widgets\places\ZYandexWidgetS;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class,7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';


$poits=$model::find()->orderBy(['id' => SORT_ASC])->all();

$coord=$poits[count($poits)-1]->jsonb_8;

   vd($coord);
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

                'jsonb_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZYandexRouteWidgetindex::className(),
                    'options' => [
                        'config' => [
                            //'data'       =>[17,18,3,19],
                            'waypoints'    => false,
                            //'MapUseType' => 'read',
                            'mapEditable'  =>true,
                            'coordinaties' => $coord,
                            'countMarker'  => 5,
                            'zoom'         => '12',
                            'points'       => 10,
                           
                        ]
                    ]
                ],
            ]
        ],
    ]
]);


$this->activeEnd();
