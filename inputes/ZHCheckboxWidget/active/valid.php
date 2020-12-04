<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZTextareaWidget;

$model = $this->modelGet(CoreInput::class, 10);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
    ['zetsoft\\system\\validate\\ZRequiredValidator']
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'bool_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHCheckboxWidget::class,
                     'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-'. FA::_USERS
                         ]
                     ],
                ],
            ]
        ]
    ]
]);

$this->activeEnd();

