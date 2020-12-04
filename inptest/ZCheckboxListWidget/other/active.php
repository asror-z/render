<?php


use kartik\builder\Form;
use zetsoft\system\Az;
use rmrevin\yii\fontawesome\FA;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inptest\ZCheckboxListWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
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
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCheckboxListWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                         'hasIcon' => true,
                        'icon' => 'fas fa-'. FA::_USERS,
                        ]
                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();
