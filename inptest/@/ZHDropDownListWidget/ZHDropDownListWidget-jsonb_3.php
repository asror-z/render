f<?php


use kartik\builder\Form;
use zetsoft\models\Computer;
use zetsoft\models\vade\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inptest\ZHDropDownListWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();

$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHDropDownListWidget::class,
                    'options' => [
                        'data' => $items,
                        
                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();

