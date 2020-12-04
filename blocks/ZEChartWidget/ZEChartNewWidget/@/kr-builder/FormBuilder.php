<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 08.06.2017 12:52
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 */


use asrorz\actives\TblCall;
use asrorz\actives\User;
use kartik\builder\Form;
use kartik\widgets\ActiveForm;
use yii\helpers\Html;


$model = User::findOne(44);
/*var_dump($model);*/

$form = ActiveForm::begin(['type' => ActiveForm::TYPE_VERTICAL]);

echo Form::widget([
	'model' => $model,
	'form' => $form,
	'columns' => 2,
	'attributes' => [
		'Username' => [
			'type' => Form::INPUT_TEXT,
			'options' => [
				'placeholder' => 'Enter username...'
			]
		],

		'Password' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']],
		'name' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']],
	]
]);
ActiveForm::end();


echo Html::beginForm('', '', ['class' => 'form-horizontal']);
echo Form::widget([
	// formName is mandatory for non active forms
	// you can get all attributes in your control
	// using $_POST['kvform']
	'formName' => 'kvform',

	// default grid columns
	'columns' => 2,

	// set global attribute defaults
	'attributeDefaults' => [
		'type' => Form::INPUT_TEXT,
		'labelOptions' => ['class' => 'col-md-3'],
		'inputContainer' => ['class' => 'col-md-9'],
		'container' => ['class' => 'form-group'],
	],

	'attributes' => [
		'fld1' => ['label' => 'Name', 'value' => 'Kartik'],
		'fld2' => ['label' => 'Email', 'value' => 'info@solutions.com'],
		'fld3' => ['label' => 'From Date', 'type' => Form::INPUT_WIDGET, 'widgetClass' => '\kartik\widgets\DatePicker'],
		'fld4' => ['label' => 'To Date', 'type' => Form::INPUT_WIDGET, 'widgetClass' => '\kartik\widgets\DatePicker'],
		'fld5' => ['label' => 'Details', 'type' => Form::INPUT_TEXTAREA],
		'fld6' => ['label' => 'Remarks', 'type' => Form::INPUT_TEXTAREA],
		'fld7' => [
			'label' => 'Severity',
			'items' => [0 => 'Low', 1 => 'Medium', 2 => 'High'],
			'type' => Form::INPUT_RADIO_BUTTON_GROUP
		],
		'fld8' => [
			'label' => 'Categories',
			'items' => [0 => 'Group 1', 1 => 'Group 2', 2 => 'Group 3'],
			'type' => Form::INPUT_CHECKBOX_BUTTON_GROUP
		],
	]
]);
echo Html::endForm();


echo Html::beginForm('', '', ['class' => 'form-horizontal']);
echo Form::widget([
	// formName is mandatory for non active forms
	// you can get all attributes in your control
	// using $_POST['kvform']
	'formName' => 'kvform',

	// default grid columns
	'columns' => 2,

	// set global attribute defaults
	'attributeDefaults' => [
		'type' => Form::INPUT_TEXT,
		'labelOptions' => ['class' => 'col-md-3'],
		'inputContainer' => ['class' => 'col-md-9'],
		'container' => ['class' => 'form-group'],
	],

	'attributes' => [
		'fld1' => ['label' => 'Name', 'value' => 'Kartik'],
		'fld2' => ['label' => 'Email', 'value' => 'info@solutions.com'],
		'fld3' => ['label' => 'From Date', 'type' => Form::INPUT_WIDGET, 'widgetClass' => '\kartik\widgets\DatePicker'],
		'fld4' => ['label' => 'To Date', 'type' => Form::INPUT_WIDGET, 'widgetClass' => '\kartik\widgets\DatePicker'],
		'fld5' => ['label' => 'Details', 'type' => Form::INPUT_TEXTAREA],
		'fld6' => ['label' => 'Remarks', 'type' => Form::INPUT_TEXTAREA],
		'fld7' => [
			'label' => 'Severity',
			'items' => [0 => 'Low', 1 => 'Medium', 2 => 'High'],
			'type' => Form::INPUT_RADIO_BUTTON_GROUP
		],
		'fld8' => [
			'label' => 'Categories',
			'items' => [0 => 'Group 1', 1 => 'Group 2', 2 => 'Group 3'],
			'type' => Form::INPUT_CHECKBOX_BUTTON_GROUP
		],
	]
]);
echo Html::endForm();


/**
 *
 * Scenario 4 Horizontal form with custom labels
 */

echo '<h1>Scenario 4 Horizontal form with custom labels</h1>	';

