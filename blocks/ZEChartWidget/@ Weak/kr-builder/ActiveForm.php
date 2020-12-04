<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 08.06.2017 13:12
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 */

// add this in your view
use kartik\form\ActiveForm;
use yii\bootstrap\Html;

// Vertical Form
$form = ActiveForm::begin([
	'id' => 'form-signup',
	'type' => ActiveForm::TYPE_VERTICAL
]);

// Inline Form
$form = ActiveForm::begin([
	'id' => 'form-login',
	'type' => ActiveForm::TYPE_INLINE,
	'fieldConfig' => ['autoPlaceholder'=>true]
]);

// Horizontal Form Configuration
$form = ActiveForm::begin([
	'id' => 'form-signup',
	'type' => ActiveForm::TYPE_HORIZONTAL,
	'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
]);



// Implement a feedback icon
echo $form->field($form, 'email_2', [
	'feedbackicon' => [
		'default' => 'envelope',
		'success' => 'ok',
		'error' => 'exclamation-sign',
		'defaultOptions' => ['class'=>'text-primary']
	]
])->textInput(['placeholder'=>'Enter a valid email address...']);

// Prepend an addon text
echo $form->field($form, 'email', ['addon' => ['prepend' => ['content'=>'@']]]);

// Append an addon text
echo $form->field($form, 'amount_paid', [
	'addon' => ['append' => ['content'=>'.00']]
]);

// Formatted addons (like icons)
echo $form->field($form, 'phone', [
	'addon' => [
		'prepend' => [
			'content' => '<i class="glyphicon glyphicon-phone"></i>'
		]
	]
]);

// Formatted addons (inputs)
echo $form->field($form, 'phone', [
	'addon' => [
		'prepend' => [
			'content' => '<input type="radio">'
		]
	]
]);

// Formatted addons (buttons)
echo $form->field($form, 'phone', [
	'addon' => [
		'prepend' => [
			'content' => Html::button('Go', ['class'=>'btn btn-primary']),
			'asButton' => true
		]
	]
]);
