<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKDateRangePickerWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
    [validatorEmail],
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_10' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDateRangePickerWidget::class,
                    'options' => [
                        'config' => [
                            'attributeStart' => 'string_4',
                            'attributeEnd' => 'string_4',
                            'hasIcon' => true,
                            'icon' => 'fas fa-' . FA::_USERS,
                        ]
                    ]
                ],

            ]
        ],


    ]
]);

$this->activeEnd();
