<?php


use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\incores\ZMultiJsWidget;

$model = $this->modelGet(CoreInput::class, 3);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


$data = [
    'PHP' => 'PHP',
    'Phyton' => 'Phyton',
    'C#' => 'C#',
    'GoLang' => 'GoLang',
    'JavaScript' => 'JavaScript',
    'Vue.js' => 'Vue.js',
    'Angular.js' => 'Angular.js',
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiJsWidget::class,
                    'options' => [
                        'data' => $data,
                        'config' => [
                            'multiple' => true,
                        ],
                        
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();



