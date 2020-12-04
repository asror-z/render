<?php

use yii\helpers\ArrayHelper;
use kartik\builder\Form;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\system\kernels\ZView;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKDepDropWidget;
use zetsoft\models\user\User;


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

                'int_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                        'id' => 'user-id',
                        'data' => ArrayHelper::map(\zetsoft\models\user\User::find()->all(), 'id', 'name'),
                        'options' => [
                            'placeholder' => 'Select...',
                        ],
                    ]
                ],
            ]
        ],


        [
            'attributes' => [

                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDepDropWidget::class,

                    'options' => [
                        'config' => [
                            'id' => 'attribute-id',
                            'depend' => 'user-id',
                            'method' => 'ajax',
                            'args' => User::class,
                        ],
                    ],
                ],
            ]
        ],
    ],
]);


$this->activeEnd();
