<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use kartik\editable\Editable;
use kartik\helpers\Html;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */



// A simple editable content used without a model and the value defaulting to display value.
// Note that by default the input type is set to `Editable::INPUT_TEXT` and the editable format
// is displayed as a `Editable::FORMAT_LINK`. With `asPopover` set to `false` the editable
// content will be rendered inline using the default template `Editable::INLINE_BEFORE_1` and
// `Editable::INLINE_AFTER_1`.
echo '<label>Person Name</label><br>';
echo Editable::widget([
    'name' => 'person_name',
    'asPopover' => false,
    'value' => 'Kartik Visweswaran',
    'header' => 'Name',
    'size' => 'md',
    'options' => ['class' => 'form-control', 'placeholder' => 'Enter person name...']
]);

$data = [
    'afaf',
    'afaf',
    'afaf',
];

// An editable content using the `Editable::FORMAT_BUTTON` as the editable format. Note that
// no value is set initially. It uses the `Editable::INPUT_DROPDOWN_LIST` as the input type
// for editing. Also displayed editable value can be styled.
echo '<label>Province</label><br>';
echo Editable::widget([
    'name' => 'province',
    'asPopover' => false,
    'header' => 'Province',
    'format' => Editable::FORMAT_BUTTON,
    'inputType' => Editable::INPUT_DROPDOWN_LIST,
    'data' => $data, // any list of values
    'options' => ['class' => 'form-control', 'prompt' => 'Select province...'],
    'editableValueOptions' => ['class' => 'text-danger']
]);

// An editable content using `displayValueConfig` to dynamically configure your displayed values
// and markup based on selected values.
echo '<label>Status</label><br>' .
    Editable::widget([
        'name' => 'status',
        'value' => 0,
        'asPopover' => false,
        'header' => 'Status',
        'inputType' => Editable::INPUT_DROPDOWN_LIST,
        'data' => [0 => 'pass', 1 => 'fail', 2 => 'waived', 3 => 'todo'],
        'options' => ['class' => 'form-control', 'prompt' => 'Select status...'],
        'displayValueConfig' => [
            '0' => '<i class="fas fa-thumbs-up"></i> pass',
            '1' => '<i class="fas fa-thumbs-down"></i> fail',
            '2' => '<i class="fas fa-hourglass"></i> waived',
            '3' => '<i class="fas fa-flag"></i> todo',
        ],
    ]);

// A simple editable content with input type set to `Editable::INPUT_TEXTAREA` and having
// a different display value. The editable format is displayed as a `Editable::FORMAT_LINK`.
// Note that the `submitOnEnter` property is set to `false` so that the text area can capture
// new lines in input.
echo Editable::widget([
    'name' => 'notes',
    'asPopover' => false,
    'displayValue' => 'more...',
    'inputType' => Editable::INPUT_TEXTAREA,
    'value' => "Raw denim you...",
    'header' => 'Notes',
    'submitOnEnter' => false,
    'options' => [
        'class' => 'form-control',
        'rows' => 5,
        'style' => 'width:400px',
        'placeholder' => 'Enter notes...'
    ]
]);

// Advanced usage with a model attribute with an initial value, including model validation rules.
// The header is defaulted from the model attribute label. A `displayValueConfig` array is set to
// auto calculate the display value based on the value. Also, style your editable with PopoverX type
// and size. Use the StarRating widget from Krajee for editing content and customize the style of
// your editable value displayed. NOTICE how you can change the INLINE TEMPLATE settings.
echo '<label>User Rating</label><br>';
echo Editable::widget([
    'model' => $model,
    'attribute' => 'zinputwidget',
    'header' => 'User Rating',
    'asPopover' => false,
    'inlineSettings' => [
        'templateBefore' => Editable::INLINE_BEFORE_2,
        'templateAfter' => Editable::INLINE_AFTER_2
    ],
    'displayValueConfig' => [
        1 => 'One Star',
        2 => 'Two Stars',
        3 => 'Three Stars',
        4 => 'Four Stars',
        5 => 'Five Stars',
    ],
    'inputType' => Editable::INPUT_RATING,
    'editableValueOptions' => ['class' => 'text-success h2']
]);


