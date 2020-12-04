<?php


use kartik\builder\Form;
use unclead\multipleinput\MultipleInput;
use unclead\multipleinput\MultipleInputColumn;
use yii\bootstrap\Html;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo MultipleInput::widget([
    'model' => $model,
    'attribute' => 'questions',
   // 'attributeOptions' => $commonAttributeOptions,
    'columns' => [
        [
            'name' => 'question',
            'type' => 'textarea',
        ],
        [
            'name' => 'answers',
            'type'  => MultipleInput::class,
            'options' => [
                //'attributeOptions' => $commonAttributeOptions,
                'columns' => [
                    [
                        'name' => 'right',
                        'type' => MultipleInputColumn::TYPE_CHECKBOX
                    ],
                    [
                        'name' => 'answer'
                    ]
                ]
            ]
        ]
    ],
]);
