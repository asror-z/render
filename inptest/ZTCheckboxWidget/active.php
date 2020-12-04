<?php

use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZTcheckboxWidget;

$this->title = "ZTCheckboxWidget active";

$model = $this->modelGet(CoreInput::class, 14);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);


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
                            
                            'label' => "Custom Label",

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

