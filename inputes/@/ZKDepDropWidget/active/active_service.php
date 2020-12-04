<?php

use yii\helpers\ArrayHelper;
use kartik\builder\Form;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\system\kernels\ZView;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKDepDropWidget;

$action->title = Azl . 'Веб-действия';


$model = new \zetsoft\models\core\CoreInput();
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [

                'int_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                        'data' => ArrayHelper::map(\zetsoft\models\page\PageModule::find()->all(), 'id', 'name'),
                        "id" => "int_1",
                    ]
                ],
            ]
        ],

        [
            'attributes' => [

                'int_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDepDropWidget::class,

                    'options' => [
                        'config' => [
                            'depend' => 'int_1',
                            'method' => 'ajax',
                            'args' =>  \zetsoft\models\page\PageControl::class.'|page_module_id',
//                            agrs1|agrs2|agrs3|args4
                        ],

                        /*
                         * =&=getDrops&=run&
                         * */
                    ]
                ],
            ]
        ],

        [
            'attributes' => [

                'int_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDepDropWidget::class,

                    'options' => [
                        'config' => [
                            'depend' => 'int_2',
                            'method' => 'ajax',
                            'args' => \zetsoft\models\page\PageAction::class.'|core_control_id',
                        ],
                    ]
                ],
            ]
        ],

        [
            'attributes' => [

                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDepDropWidget::className(),

                    'options' => [
                        'config' => [
                            'id' => 'attribute-id',
                            'depend' => 'int_3',
                            'method' => 'ajax',
                            'args' =>  \zetsoft\models\page\PageAction::class,
                        ],
                    ],
                ],
            ]
        ],
    ],
]);


$this->activeEnd();
