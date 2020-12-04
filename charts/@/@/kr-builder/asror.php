<?php


use kartik\widgets\ActiveForm;
use kartik\builder\Form;
$form = ActiveForm::begin();
echo Form::widget([
	'model' => $form,
	'form' => $form,
	'columns' => 2,
	'attributes' => [
		'username' => ['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter username...']],
		'password' => ['type'=>Form::INPUT_PASSWORD, 'options'=>['placeholder'=>'Enter password...']],
		'rememberMe' => ['type'=>Form::INPUT_CHECKBOX],
	]
]);
ActiveForm::end();
