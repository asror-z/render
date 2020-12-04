<?php


use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inptest\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZKNumberWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

// start|MuminovUmid|2020-10-10
$model->configs->rules = [
    ['zetsoft\\system\\validate\\ZRequiredValidator']
];
// end|MuminovUmid|2020-10-10

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'int_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKNumberWidget::class,
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
