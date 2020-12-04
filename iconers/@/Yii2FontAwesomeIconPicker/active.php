<?php


use kr0lik\fontawesomeiconpicker\FontAwesomeIconPicker;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\iconers\ZBootstrapIconpickerWidget;
use zetsoft\widgets\iconers\ZFontAwesomeIconpickerWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKPasswordInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' =>
                        FontAwesomeIconPicker::class,
                    'options' => [

                    ]
                ],

            ]
        ]


    ]
]);

$this->activeEnd();

