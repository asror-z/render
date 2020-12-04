<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb21Widget;
use zetsoft\widgets\places\ZGoogleDb22Widget;
use zetsoft\widgets\places\ZGoogleReadyRefactoringWidget;
use zetsoft\widgets\places\ZGoogleReadyWidget;
use zetsoft\widgets\places\ZGoogleDb23Widget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\places\ZGoogleWidgetD;



$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

/*echo "value first map";
echo "<pre>";
print_r($model->jsonb_10);
echo "</pre>";


echo "value second map";
echo "<pre>";
print_r($model->jsonb_7);
echo "</pre>";*/

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

                'jsonb_10' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGoogleReadyRefactoringWidget::className(),
                    'options' => [
                        'config' => [
                            'data' => [3,21,16],
                            'height'                 => 500,
                            'width'                  => 800,
                            'searchAutoComplete'     => true,
                            'searchPlaceImageShow'   => false,
                            'zoom'                   => 12,
                            'markerCount'            => 2,
                            'limitWayPoints' => 10,
                            'draggable' => true,
                            'mapUseType' => 'read',
                            'depend' => 'coreinput-string_9',
                        ]
                    ]
                ],
            ]
        ],
 ],

]);


$this->activeEnd();




?>
