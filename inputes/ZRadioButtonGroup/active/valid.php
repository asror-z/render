<?php

use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\inputes\ZRadioButtonGroup;
use zetsoft\widgets\inputes\ZHRadioListWidget;
use zetsoft\widgets\inputes\ZHRadioWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 2);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

//$data = array_flip(ZLang::lang);
//$data = array_merge($data, $model->accordioninputwidget);

// start|MuminovUmid|2020-10-09
$model->configs->rules = [
    ['zetsoft\\system\\validate\\ZRequiredValidator']
];
// end|MuminovUmid|2020-10-09

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [

                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZRadioButtonGroup::class,
                    'options' => [
                    'config' => [
                        'hasIcon' => false,
                        'icon'=>'fas fa-user'
                    ],
                        'data' => [
                            '1111',
                            '222222',
                            '33333333',
                        ],
                    ]
                ],

            ]
        ]


    ]
]);

$this->activeEnd();

