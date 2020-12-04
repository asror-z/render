<?php


use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidgetJ;
//use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb15Widget;
use zetsoft\widgets\places\test\ZYandeSidebarWidget;
use zetsoft\widgets\places\ZYandexW;
use zetsoft\widgets\places\ZYandexWidgetOld;
use zetsoft\widgets\places\ZYandexWidgetS;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

/*echo " value";
echo "<pre> ";
print_r($model->jsonb_9);
echo "</pre>";*/

 echo ZFormWidgetJ::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
    //    [
    //        'attributes' => [
    //
    //            'string_9' => [
    //                'type' => Form::INPUT_WIDGET,
    //                'widgetClass' => ZHInputWidget::className(),
    //                'options' => [
    //                    'config' => [
    //
    //                    ],
    //                ]
    //            ],
    //        ]
    //    ],
        [
            'attributes' => [

                'jsonb_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZYandeSidebarWidget::className(),
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
