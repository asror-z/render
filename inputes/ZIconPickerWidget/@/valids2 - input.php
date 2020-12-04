<?php

use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKPasswordInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
    ['zetsoft\\system\\validate\\ZRequiredValidator'],
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZIconPickerWidget::class,
                    'options' => [
                        'config' => [
                            'type' => ZIconPickerWidget::type['inputIconPicker'],
                            //'icon' => 'fas fa-plus',
                            'placement' => 'right',
                            'searchText' => 'search something',
                            'cols' => 6,
                            'rows' => 2,
                            'position' => 'center',
                        ]
                    ]
                ],

            ]
        ]


    ]
]);

$this->activeEnd();

