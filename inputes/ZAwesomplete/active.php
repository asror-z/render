<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZAwesompleteWidget;
use zetsoft\widgets\inputes\ZCheckRadioListWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 8);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZAwesompleteWidget::class,
                     'options' => [
                            'data' => $items,
                            'config' => [
                                'hasIcon' => true,
                                'icon' => 'fas fa-'. FA::_USERS
                            ],
                            
                     ],
                ],

            ]
        ]


    ]
]);


$this->activeEnd();

