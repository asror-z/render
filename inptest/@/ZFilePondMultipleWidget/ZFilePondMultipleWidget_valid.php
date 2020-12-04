<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use kartik\builder\Form;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inptest\ZFilepondWidget;
use zetsoft\widgets\inptest\ZFilepondMultipleWidget;


$this->title = "Multiple FilePond Widget";
$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var \zetsoft\system\kernels\ZView $this */

$form = $this->activeBegin();

$this->modelSave($model);
$model->configs->rulesAll = [
    [validatorRequired],
];
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFilepondMultipleWidget::class,
                    'options' => [

                    ]

                ],


            ]

        ],


    ],


]);

$this->activeEnd();
