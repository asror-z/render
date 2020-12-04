<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZCountryPickerWidgetOld;
use zetsoft\widgets\inptest\ZCheckboxButtonGroup;
use zetsoft\widgets\inptest\ZHRadioWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' =>
    [
        [
            'attributes' =>
            [       // 2 column layout
                'int_1' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHRadioWidget::class,
                    'options' => array(
                        'data' => $items
                    )
                ),

            ]
        ]

    ]
]);

$this->activeEnd();

