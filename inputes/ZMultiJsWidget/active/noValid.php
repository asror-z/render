<?php

/**
 * @author Muminov Umid
 */
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZMultiJsWidget;

$model = $this->modelGet(CoreInput::class, 3);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$model->configs->rulesAll=[
    [
        validatorEmail
    ]
];
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
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiJsWidget::class,
                    'options' => [
                        'data' => $data,
                        'config' => [
                            'tags' =>true,
                            'multiple'=>true,
                            'isMaintainOrder' => true,
                            'maximumInputLength' => 10
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();

