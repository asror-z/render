<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Created By :ElnurController Suyunov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZFileUploaderWidget;
use zetsoft\widgets\inptest\ZTitatoggleWidget1;
use zetsoft\widgets\inptest\ZClockpickerWidgetOld;
use zetsoft\widgets\inputes\ZInputMaskWidget;
use zetsoft\widgets\former\ZFormWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 8);
/** @var ZView $this */;
$model->configs->rulesAll = [
    [validatorEmail]
];

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);



echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'bool_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTitatoggleWidget1::class,
                    'options'=>[
                        'config' => [

                        ]
                    ],

                ],
            ]

        ],


    ]
]);



$this->activeEnd();



