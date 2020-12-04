<?php


use kartik\builder\Form;
use zetsoft\system\Az;
use yii\web\JsExpression;
use yii\web\View;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSelect2WidgetNew;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 3);
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

                'string_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                        'id' => 'PageAction-id',
                        'data' => \yii\helpers\ArrayHelper::map(\zetsoft\models\page\PageModule::find()->all(), 'id', 'name'),
                    ]
                ],
            ]
        ],
        [
            'attributes' => [

                'string_8' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZKDepDropDbWidget::class,

                    'options' => [
                        'config' => [
                            'id' => 'PageAction-data',
                            'initialize' => true,
                            'depend' => ['PageAction-id'],
                            'initDepends' => ['PageAction-id'],
                            'parent' => \zetsoft\models\page\PageModule::class,
                            'target' => \zetsoft\models\page\PageControl::class,
                        ],

                    ]
                ],
            ]
        ],
        [
            'attributes' => [

                'string_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZKDepDropDbWidget::class,

                    'options' => [
                        'config' => [
                            'id' => 'PageAction-check',
                            'db_config' => 'false',
                            'initialize' => true,
                            'depend' => ['PageAction-data'],
                            'parent' => \zetsoft\models\page\PageControl::class,
                            'target' => \zetsoft\models\page\PageAction::class,
                        ],

                    ]
                ],
            ]
        ],
    ],
]);



$this->activeEnd();

