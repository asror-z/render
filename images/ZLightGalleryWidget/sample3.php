<?php


use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\images\ZLightGalleryWidget;
use zetsoft\widgets\inputes\ZMultiJsWidget;

$model = $this->modelGet(CoreInput::class, 1);
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
    'AngularJs' => 'AngularJs',
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZLightGalleryWidget::class,
                    'options' => [
                        'data' => $data,
                        'config' => [
                            'multiple' => true,
                        ],
                    ],
                ],
            ],
        ],
    ],
]);

$this->activeEnd();



