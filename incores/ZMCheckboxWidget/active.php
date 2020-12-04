<?php

use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\incores\ZMCheckboxWidget;

$model = $this->modelGet(CoreInput::class, 7);

$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMCheckboxWidget::class,
                ],
            ]
        ],
    ],
    'event' => [
        'formChange' => <<<JS
    function() {
        $(this).submit()
    }
JS,

    ]
]);


$this->activeEnd();
