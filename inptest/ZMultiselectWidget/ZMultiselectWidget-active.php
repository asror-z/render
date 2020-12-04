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
use zetsoft\former\test\TestLaptopForm;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inptest\ZMultiselectWidget;
use zetsoft\widgets\former\ZFormWidget;

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
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiselectWidget::class,
                    'config' => [
                        'form'=> TestLaptopForm::class

                    ]
                ],
            ]

        ],


    ]
]);



$this->activeEnd();



