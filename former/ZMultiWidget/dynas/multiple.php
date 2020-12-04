<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/14/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use kartik\builder\Form;
use zetsoft\former\deps\DepDropForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\core\CoreInput;
use zetsoft\models\test\Test;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\former\ZMultiWidgetRav;
use zetsoft\widgets\navigat\ZButtonWidget;


/** @var ZView $this */


$model = $this->modelGet(CoreInput::class, 1);

$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'readonly' => true
    ],
    'rows' => [

        [
            'attributes' => [
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiWidgetRav::class,
                    'options' => [
                        'config' => [
                            'formClass' => DepDropForm::class
                        ]
                    ]
                ],
            ]
        ]
    ]
]);

$this->activeEnd();
