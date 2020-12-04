<?php


/*use zetsoft\widgets\places\ZYandexdbWidget;
use zetsoft\widgets\places\ZYandexWidgetOld;
use zetsoft\widgets\places\ZYandexWidgetS;   */

/*echo ZYandexDbSideBarWidget::widget([


    'config' => [
        'trafficControl' => true,
        'routeButtonControl' => true,
        'zoomControl' => true,
        'searchControl' => true,
        'typeSelector' =>  true,
        'geolocationControl' => true,
        'fullscreenControl' => true,
        'customControl' => true,
        'rulerControl' => true,

    ],
]); */
use kartik\builder\Form;
//use zetsoft\system\Az;
//use zetsoft\system\kernels\ZView;
//use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\places\ZYandexDbSideBarWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

echo "value";
echo "<pre>";
print_r($model->jsonb_8);
echo "</pre>";

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [

                'jsonb_8' => [
//                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\places\ZGoogleDbSideBarWidget::className(),
                    'options' => [
                    ]
                ],
            ]
        ],
    ]
]);

$this->activeEnd();
?>
