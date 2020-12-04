<?php

use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZTCheckboxWidget;

$model = $this->modelGet(CoreInput::class, 14);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
    [validatorEmail]
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'bool_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTCheckboxWidget::class,
                    'options' => [
                        'config' => [
                        ]
                    ],
                ],

                'bool_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTCheckboxWidget::class,
                    'options' => [
                        'config' => [
                            'type' => ZTCheckboxWidget::Types['ioslike'],
                            /*Types: default || rounded || withtext || ioslike|| flat || materiallike*/
                            'size' => ZTCheckboxWidget::Sizes['middle'],
                            /*Sizes: large || middle || default || small */
                            'color' => ZTCheckboxWidget::Colors['info'],
                            /*Colors: default || info  ||  danger  || warning */
                        ]
                    ],
                ],
            ]
        ]
    ]
]);

$this->activeEnd();

