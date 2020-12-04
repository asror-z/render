<?php


use kartik\builder\Form;
use unclead\multipleinput\MultipleInput;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

/* echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'ZMultiWidgetNew' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => MultipleInput::class,
                    'columns' => [
                    ]
                ],
             
            ]

        ],


    ]
]);
 */

echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
    'max' => 5,
    'addButtonOptions' => [
        'class' => 'btn btn-success',
        'label' => 'add' // also you can use html code
    ],
    'removeButtonOptions' => [
        'label' => 'remove'
    ]
])
->label(false);
$this->activeEnd();

