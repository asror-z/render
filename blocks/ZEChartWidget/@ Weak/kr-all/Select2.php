<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 08.06.2017 13:01
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 */

// Multiple select without model

use kartik\widgets\Select2;

echo Select2::widget([
	'name' => 'state_2',
	'value' => '',
	'data' => [
		'aaa' => 'adadada',
		'2' => 'adadada',
		'3' => 'adadada',
	],
	'options' => ['multiple' => true, 'placeholder' => 'Select states ...']
]);
