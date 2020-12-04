<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\models\core\CoreInput;
use zetsoft\widgets\blocks\ZJqueryKnobWidget;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;

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
                    'widgetClass' => ZJqueryKnobWidget::class,
                    'options' => [
                        'config' =>[]

                    ],

                ],
            ]
        ],
    ]
]);


$this->activeEnd();
