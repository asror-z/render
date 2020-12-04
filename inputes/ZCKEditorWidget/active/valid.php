<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
//ZCKeditorInlineJsWidget


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
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
            'attributes' => [
                'text_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCKEditorWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'hasIcon' => false,
                            'icon'=>'fas fa-user'
                        ]
                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();

