<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 01.08.2017 19:46
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 */


use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\builder\FormGrid;
$form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]);


echo FormGrid::widget([
	'model'=>$form,
	'form'=>$form,
	'autoGenerateColumns'=>true,
	'rows'=>[
		[
			'contentBefore'=>'<legend class="text-info"><small>Account Info</small></legend>',
			'attributes'=>[       // 2 column layout
				'username'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter username...']],
				'password'=>['type'=>Form::INPUT_PASSWORD, 'options'=>['placeholder'=>'Enter password...']],
			]
		],
		[
			'attributes'=>[       // 1 column layout
				'notes'=>['type'=>Form::INPUT_TEXTAREA, 'options'=>['placeholder'=>'Enter notes...']],
			],
		],
		[
			'contentBefore'=>'<legend class="text-info"><small>Profile Info</small></legend>',
			'columns'=>3,
			'autoGenerateColumns'=>false, // override columns setting
			'attributes'=>[       // colspan example with nested attributes
				'address_detail' => [
					'label'=>'Address',
					'columns'=>6,
					'attributes'=>[
						'address'=>[
							'type'=>Form::INPUT_TEXT,
							'options'=>['placeholder'=>'Enter address...'],
							'columnOptions'=>['colspan'=>3],
						],
						'zip_code'=>[
							'type'=>Form::INPUT_TEXT,
							'options'=>['placeholder'=>'Zip...'],
							'columnOptions'=>['colspan'=>2],
						],
						'phone'=>[
							'type'=>Form::INPUT_TEXT,
							'options'=>['placeholder'=>'Phone...']
						],
					]
				]
			],
		],
		[
			'attributes'=>[
				'birthday'=>['type'=>Form::INPUT_WIDGET, 'widgetClass'=>'\kartik\widgets\DatePicker', 'hint'=>'Enter birthday (mm/dd/yyyy)'],
				'state_1'=>['type'=>Form::INPUT_DROPDOWN_LIST, 'items'=>$form->typeahead_data, 'hint'=>'Type and select state'],
				'color'=>['type'=>Form::INPUT_WIDGET, 'widgetClass'=>'\kartik\widgets\ColorInput', 'hint'=>'Choose your color'],
			]
		],
		[
			'attributes'=>[       // 3 column layout
				'rememberMe'=>[   // radio list
					'type'=>Form::INPUT_RADIO_LIST,
					'items'=>[true=>'Yes', false=>'No'],
					'options'=>['inline'=>true]
				],
				'brightness'=>[   // uses widget class with widget options
					'type'=>Form::INPUT_WIDGET,
					'label'=>Html::label('Brightness (%)'),
					'widgetClass'=>'\kartik\widgets\RangeInput',
					'options'=>['width'=>'80%']
				],
				'actions'=>[    // embed raw HTML content
					'type'=>Form::INPUT_RAW,
					'value'=>  '<div style="text-align: right; margin-top: 20px">' .
						Html::resetButton('Reset', ['class'=>'btn btn-default']) . ' ' .
						Html::submitButton('Submit', ['class'=>'btn btn-primary']) .
						'</div>'
				],
			],
		],
	]
]
);


ActiveForm::end();
