<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCKeditorJsWidget;
use zetsoft\system\Az;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 8);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$model->configs->rulesAll = [
    [validatorEmail]
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'jsonb_3' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCKeditorJsWidget::class,
                     'options' => [
                            'config' => [
                                'data' => $items,
                            ],
                            'layout' => [],
                     ],
                ),

            ]
        ]


    ]
]);


$this->activeEnd();

