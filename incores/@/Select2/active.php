<?php


use kartik\builder\Form;
use kartik\widgets\Select2;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZAJqueryEditableSelectWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$data = [
    "green" => "green",
    "red" => "red",
    "blue" => "blue",
    "orange" => "orange",
    "white" => "white",
    "black" => "black",
    "purple" => "purple",
    "cyan" => "cyan",
    "teal" => "teal"
];

// With a model and without ActiveForm
echo Select2::widget([
    'model' => $model,
    'data' => $data,
    'attribute' => 'zhinputwidget',
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'value' => 'red'
]);
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'zhinputwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => Select2::class,
                    'options' => [
                        'data' => [
                            "red" => "red",
                            "blue" => "blue",
                            "green" => "green",
                            "orange" => "orange",
                            "white" => "white",
                            "black" => "black",
                            "purple" => "purple",
                            "cyan" => "cyan",
                            "teal" => "teal"
                        ],
                        'value' => 'red'
                    ]

                ],
            ]
        ],
    ],
]);

$this->activeEnd();

/*
$data = [
    "green" => "green",
    "red" => "red",
    "blue" => "blue",
    "orange" => "orange",
    "white" => "white",
    "black" => "black",
    "purple" => "purple",
    "cyan" => "cyan",
    "teal" => "teal"
];

// Tagging support Single
echo '<label class="control-label">Tag Single</label>';

echo ZKSelect2Widget::widget([
    'data' => $data,
    'value' => 'red'
]);*/



echo ZAJqueryEditableSelectWidget::widget([

]);

