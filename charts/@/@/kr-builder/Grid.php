<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 13.07.2017 13:39
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 */

use asrorz\actives\User;
use kartik\builder\Form;
use kartik\builder\FormGrid;
use kartik\helpers\Html;
use kartik\widgets\ActiveForm;


$model = User::findOne(44);

$form = ActiveForm::begin(['type' => ActiveForm::TYPE_VERTICAL]);



echo FormGrid::widget([
	'model' => $model,
	'form' => $form,
	'autoGenerateColumns' => true,
	'rows' => [
		[
			'contentBefore' => '<legend class="text-info"><small>Account Info</small></legend>',
			'attributes' => [       // 2 column layout
				'Username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter username...']],
				'Password' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']],
			]
		],
		[
			'attributes' => [       // 1 column layout
				'ImageIM' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter notes...']],
			],
		],
		[
			'contentBefore' => '<legend class="text-info"><small>Profile Info</small></legend>',
			'columns' => 3,
			'autoGenerateColumns' => false, // override columns setting
			'attributes' => [       // colspan example with nested attributes
				'address_detail' => [
					'label' => 'Address',
					'columns' => 6,
					'attributes' => [
						'ReserveEmail' => [
							'type' => Form::INPUT_TEXT,
							'options' => ['placeholder' => 'Enter address...'],
							'columnOptions' => ['colspan' => 3],
						],
						'Email' => [
							'type' => Form::INPUT_TEXT,
							'options' => ['placeholder' => 'Zip...'],
							'columnOptions' => ['colspan' => 2],
						],
						'Language' => [
							'type' => Form::INPUT_TEXT,
							'options' => ['placeholder' => 'Phone...']
						],
					]
				],
			],
		],
		[
			'attributes' => [
				'SubjectIDs' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => '\kartik\widgets\DatePicker', 'hint' => 'Enter birthday (mm/dd/yyyy)'],
				'DepartersID' => ['type' => Form::INPUT_DROPDOWN_LIST, 'items' => ['4' => 'safasfasf', 5 => 'sadf'], 'hint' => 'Type and select state'],
				'CompanyID' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => '\kartik\widgets\ColorInput', 'hint' => 'Choose your color'],
			]
		],
		[
			'attributes' => [       // 3 column layout
				'CreatedAt' => [   // radio list
					'type' => Form::INPUT_RADIO_LIST,
					'items' => [true => 'Yes', false => 'No'],
					'options' => ['inline' => true]
				],
				'ModifiedAt' => [   // uses widget class with widget options
					'type' => Form::INPUT_WIDGET,
					'label' => Html::label('Brightness (%)'),
					'widgetClass' => '\kartik\widgets\RangeInput',
					'options' => ['width' => '80%']
				],
				'actions' => [    // embed raw HTML content
					'type' => Form::INPUT_RAW,
					'value' => '<div style="text-align: right; margin-top: 20px">' .
						Html::resetButton('Reset', ['class' => 'btn btn-default']) . ' ' .
						Html::submitButton('Submit', ['class' => 'btn btn-primary']) .
						'</div>'
				],
			],
		],
	]
]);
ActiveForm::end();
