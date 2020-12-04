
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php

use kartik\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;
use unclead\multipleinput\TabularColumn;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;

$form = new ActiveForm();
$model = new \zetsoft\models\libra\Author();

echo '<h1>Base options</h1><br>';

#region Theme
echo '<div class="card"><div class="card-body bg-info-gradient"><h4 class=""><span class="text-dark">theme</span> <span class="italic">(string)</span> : specify the theme of the widget. Available 2 themes:</h4></div></div>';

ZRowWidget::begin();
ZColWidget::begin([
    'width' => 6
]);
echo '<h5>theme: default</h5>';
echo $form->field($model, 'phone')->widget(MultipleInput::className(), [
    'theme' => 'default',
    'columns' => [
        [
            'name'  => 'phone',
            'title' => $model->getAttributeLabel('phone'),
            'type' => \yii\widgets\MaskedInput::className(),
            'options' => [
                'class' => 'input-phone',
                'mask' => '+999-99-999-99-99',
            ],
        ],
    ],
])->label(false);

ZColWidget::end();
ZColWidget::begin([
    'width' => 6,

]);
echo '<h5>theme: bs</h5>';
echo $form->field($model, 'phone')->widget(MultipleInput::className(), [
    'theme' => 'bs',
    'columns' => [
        [
            'name'  => 'phone',
            'title' => $model->getAttributeLabel('phone'),
            'type' => \yii\widgets\MaskedInput::className(),
            'options' => [
                'class' => 'input-phone',
                'mask' => '+999-99-999-99-99',
            ],
        ],
    ],
])->label(false);

ZColWidget::end();
ZRowWidget::end();
echo '<hr>';
echo '<hr>';

#endregion

#region Prepend
echo '<div class="card"><div class="card-body bg-warning-gradient"><h4 class=""><span class="text-dark">prepend </span> <span class="italic">(boolean)</span> : maximum number of rows. If not set will default to unlimited</h4></div></div>';

ZRowWidget::begin();
ZColWidget::begin([
    'width' => 6
]);
echo '<h5>prepend: true</h5>';
echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
    'max'               => 6,
    'min'               => 1, // should be at least 2 rows
    'allowEmptyList'    => false,
    'enableGuestitle'  => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    'prepend' => true
])
    ->label(false);

ZColWidget::end();
ZColWidget::begin([
    'width' => 6,

]);
echo '<h5>prepend: false</h5>';
echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
    'max'               => 6,
    'min'               => 1, // should be at least 2 rows
    'allowEmptyList'    => false,
    'enableGuestitle'  => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
])
    ->label(false);

ZColWidget::end();
ZRowWidget::end();
echo '<hr>';
echo '<hr>';

#endregion

#region cloneButton
echo '<div class="card"><div class="card-body bg-danger-gradient"><h4 class=""><span class="text-dark">cloneButton  </span> <span class="italic">(bool)</span> : whether need to enable clone buttons or not</h4></div></div>';

ZRowWidget::begin();
ZColWidget::begin([
    'width' => 6
]);
echo '<h5>cloneButton: true</h5>';
echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
    'min'               => 1, // should be at least 2 rows
    'allowEmptyList'    => false,
    'enableGuestitle'  => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    'cloneButton' => true
])
    ->label(false);

ZColWidget::end();
ZColWidget::begin([
    'width' => 6,

]);
echo '<h5>cloneButton: false</h5>';
echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
    'min'               => 1, // should be at least 2 rows
    'allowEmptyList'    => false,
    'enableGuestitle'  => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
])
    ->label(false);

ZColWidget::end();
ZRowWidget::end();
echo '<hr>';
echo '<hr>';

#endregion

#region layoutConfig
echo '<div class="card"><div class="card-body bg-info"><h4 class=""><span class="text-dark">layoutConfig   </span> <span class="italic">(array)</span> : CSS grid classes for horizontal layout (only supported for ListRenderer class).</h4></div></div>';

ZRowWidget::begin();
ZColWidget::begin([
    'width' => 3
]);
echo '<h5>layoutConfig: offsetClass</h5>';
echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
    'min'               => 1, // should be at least 2 rows
    'allowEmptyList'    => false,
    'enableGuestitle'  => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    'layoutConfig' => 'offsetClass'
])
    ->label(false);

ZColWidget::end();
ZColWidget::begin([
    'width' => 3,

]);
echo '<h5>layoutConfig: labelClass</h5>';
echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
    'min'               => 1, // should be at least 2 rows
    'allowEmptyList'    => false,
    'enableGuestitle'  => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    'layoutConfig' => 'labelClass'
])
    ->label(false);

ZColWidget::end();
ZColWidget::begin([
    'width' => 3,

]);
echo '<h5>layoutConfig: wrapperClass</h5>';
echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
    'min'               => 1, // should be at least 2 rows
    'allowEmptyList'    => false,
    'enableGuestitle'  => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    'layoutConfig' => 'wrapperClass'
])
    ->label(false);

ZColWidget::end();

ZColWidget::begin([
    'width' => 3,

]);
echo '<h5>layoutConfig: errorClass</h5>';
echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
    'min'               => 1, // should be at least 2 rows
    'allowEmptyList'    => false,
    'enableGuestitle'  => true,
    'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    'layoutConfig' => 'errorClass'
])
    ->label(false);

ZColWidget::end();
ZRowWidget::end();
echo '<hr>';
echo '<hr>';

#endregion



