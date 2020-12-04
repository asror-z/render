<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZSelectableTablePlugin;
use zetsoft\widgets\inputes\ZSelectableTableWidgetX;
use zetsoft\widgets\inputes\ZSelectableTablePluginX;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelectableTableWidgetX::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-'. FA::_USERS
                        ],

                        'data' => [

                            'Monday' =>  '1',


                            'Thuesday' =>  '2',


                            'Wednesday' =>  '3',


                            'Thursday' =>  '4',


                            'Friday' =>  '5',


                            'Saturday' =>  '6',


                            'Sunday' => '7',

                        ]
                    ]
                ],
            ]
        ],
    ]
]);

$this->activeEnd();

