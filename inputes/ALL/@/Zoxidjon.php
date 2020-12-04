<?php


use kartik\checkbox\CheckboxX;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCheckBoxWidgetOLD;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZFileUploaderWidget;
use zetsoft\widgets\inputes\ZHCheckboxButtonGroupWidget;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\inputes\ZHHiddenInputWidget;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHListBoxWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\inputes\ZHRadioListWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZKCheckboxXWidget;
use zetsoft\widgets\inputes\ZKTreeviewinputWidget;
use zetsoft\widgets\inputes\ZMaskedInputWidget;
use zetsoft\widgets\inputes\ZMultiWidget;

/** @var ZView $this */
$model = $this->modelGet(CoreInput::class, 1);

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


//   for ZAccordionInputWidget
//$dataZAccordionInputWidget = array_flip(ZLang::lang);

// end
$data = [
    'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado',
    'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
    'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
    'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
    'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
    'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
    'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
    'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
    'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'names'=>[
        'zinputwidget',
        'zjqueryfileuploadwidget',
        'string_4',
        'zkcolorinputwidget',       // bazaga save qilmayapti
        'jsonb_3',
        'string_3',
        'string_4',
        'string_5',
        'zknumberwidget',
        'string_1',
        'string_2',
        'zinputcopywidget'





    ],
]);

$this->activeEnd();

