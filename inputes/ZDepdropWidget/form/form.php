<?php


use zetsoft\former\deps\DepsDropForm;
use zetsoft\models\drag\DragConfigDb;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\former\ZMultiWidget;


$id = $this->httpPost('modelId');

$model = new DragConfigDb();
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$this->modelPost();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'card' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFormWidget::class,
                    'options' => [
                        'config' => [
                            'formClass' => DepsDropForm::class,
                        ]
                    ]
                ],

            ]
        ],


    ]
]);

//  vdd();
$this->activeEnd();



