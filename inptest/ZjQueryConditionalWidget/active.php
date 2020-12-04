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
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZjQueryConditionalWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormwidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZjQueryConditionalWidget :: class,
                    'options' => [
                        'config' => [
                            'type' => ZjQueryConditionalWidget::type['form-group'],
                          

                        ]
                    ]
                ],

            ]
        ]
    ]
]);

$this->activeEnd();
