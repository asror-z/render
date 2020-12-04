<!--Davlatmurod-->
<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\widgets\places\ZGoogleModesWidgetD;
use zetsoft\widgets\former\ZFormWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_10' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' =>ZGoogleModesWidgetD::className(),
                    'options' => [
                        'config' => [
                            'height'                 => 500,
                            'width'                  => 800,
                            'searchAutoComplete'     => true,
                            'searchPlaceImageShow'   => false,
                            'zoom'                   => '12',
                            'matkerCount'            => 1,
                            'draggable'              => true
                        ]
                    ]
                ],
            ]
        ],

    ],

]);


$this->activeEnd();




?>
