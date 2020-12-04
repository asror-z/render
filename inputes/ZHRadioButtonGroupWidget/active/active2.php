<?php

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\inputes\ZHRadioListWidget;
use zetsoft\widgets\inputes\ZHRadioWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 2);
/** @var ZView $this */


$form = $this->activeBegin();
$this->modelSave($model);

//$data = array_flip(ZLang::lang);
//$data = array_merge($data, $model->accordioninputwidget);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHRadioButtonGroupWidget::class,
                    'options' => [
                        'data' => [
                            1,
                            2,
                            3,
                        ],

                        'config' => [
                            'hasIcon' => false,
                            'icon' => 'fas fa-user',
                        ]
                    ]
                ],

            ]
        ]
    ]
]);

$this->activeEnd();

