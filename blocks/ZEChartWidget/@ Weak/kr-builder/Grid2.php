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
			'contentBefore' => '<legend class="text-bold"><small>Account Info</small></legend>',
			'attributes' => [       // 2 column layout
				'Username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter username...']],
				'Password' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']],
			]
		],

		[
			'attributes' => [       // 3 column layout

				'actions' => [    // embed raw HTML content
					'type' => Form::INPUT_RAW,
					'value' => '<div style="text-align: left; margin-top: 20px">' .
						Html::resetButton('Reset', ['class' => 'btn btn-default btn-lg']) . ' &nbsp;&nbsp;' .
						Html::submitButton('Submit', ['class' => 'btn btn-primary btn-lg']) .
						'</div>'
				],
			],
		],
	]
]);
ActiveForm::end();
