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
use zetsoft\widgets\places\ZYandexWidgetD;
use zetsoft\widgets\places\ZYandexWidgetOld;
use zetsoft\widgets\places\ZYandexWidgetS;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';



print_r($model->jsonb_8);


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

                'jsonb_8' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZYandexWidgetD::className(),
                    'options' => [
                        'config' => [

                            'zoom'                   => '12',
                        ]
                    ]
                ],
            ]
        ],
    ]
]);


$this->activeEnd();
