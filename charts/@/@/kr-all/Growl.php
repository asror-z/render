<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 29.06.2017 13:07
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 */


use kartik\widgets\Growl;

echo Growl::widget([
	'type' => Growl::TYPE_SUCCESS,
	'title' => 'Well done!',
	'icon' => 'glyphicon glyphicon-ok-sign',
	'body' => 'You successfully read this important alert message.',
	'showSeparator' => true,
	'delay' => 0,

	'pluginOptions' => [
		'showProgressbar' => true,
		'delay'=>10000,
		'placement' => [
			'from' => 'top',
			'align' => 'right',
		]
	]
]);

echo Growl::widget([
	'type' => Growl::TYPE_INFO,
	'title' => 'Heads up!',
	'icon' => 'glyphicon glyphicon-info-sign',
	'body' => 'This alert needs your attention, but it\'s not super important.',
	'showSeparator' => true,
	'delay' => 10000,
	'pluginOptions' => [
		'showProgressbar' => true,
		'placement' => [
			'from' => 'top',
			'align' => 'right',
		]
	]
]);
echo Growl::widget([
	'type' => Growl::TYPE_WARNING,
	'title' => 'Warning!',
	'icon' => 'glyphicon glyphicon-exclamation-sign',
	'body' => 'Better check yourself, you\'re not looking too good.',
	'showSeparator' => true,
	'delay' => 3000,
	'pluginOptions' => [
		'showProgressbar' => true,
		'placement' => [
			'from' => 'top',
			'align' => 'right',
		]
	]
]);
echo Growl::widget([
	'type' => Growl::TYPE_DANGER,
	'title' => 'Oh snap!',
	'icon' => 'glyphicon glyphicon-remove-sign fa-lg',
	'body' => 'Change a few things up and try submitting again.',
	'showSeparator' => true,
	'delay' => 4500,
	'pluginOptions' => [
		'showProgressbar' => true,
		'placement' => [
			'from' => 'top',
			'align' => 'right',
		]
	]
]);



