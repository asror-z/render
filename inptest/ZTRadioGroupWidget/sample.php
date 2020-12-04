<?php 

	use zetsoft\widgets\inptest\ZTRadioGroupWidget;


	echo ZTRadioGroupWidget::widget([

		'id' => 'country',
		'value' => 'uzb',
		'config' =>[

			// 'name' => 'yourCountry',

			'label' => "Select your country",

			'type' => ZTRadioGroupWidget::Types['flat'],
			/*Types: default || rounded || withtext || ioslike|| flat || materiallike*/

			'size' => ZTRadioGroupWidget::Sizes['large'],
			/*Sizes: large || middle || default || small */

			'color' => ZTRadioGroupWidget::Colors['info'],
			/*Colors: default || info  ||  danger  || warning */

		],

		'data' => [
			'uzb' => "Uzbekistan",
			'usa' => "USA",
			'rus' => "Russia",
			'eng' => "England",
		],

	]);

	echo ZTRadioGroupWidget::widget([

		'id' => 'region',
		'value' => 'fergana',
		'config' =>[

			'name' => 'yourRegion',

			'label' => "Select your region",

			'type' => ZTRadioGroupWidget::Types['rounded'],
			/*Types: default || rounded || withtext || ioslike|| flat || materiallike*/

			'size' => ZTRadioGroupWidget::Sizes['large'],
			/*Sizes: large || middle || default || small */

			'color' => ZTRadioGroupWidget::Colors['danger'],
			/*Colors: default || info  ||  danger  || warning */

		],

		'data' => [
			'tashkent' => "Tashkent",
			'fergana' => "Fergana",
			'andijan' => "Andijan",
			'samarkand' => "Samarkand",
		],

	])

 ?>