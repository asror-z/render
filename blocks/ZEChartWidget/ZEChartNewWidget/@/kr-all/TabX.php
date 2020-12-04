<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 08.06.2017 12:58
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 */


$content1 = '11';
$content2 = '22';
$content3 = '33';
$content4 = '44';

$items = [
	[
		'label' => '<i class="glyphicon glyphicon-home"></i> Home',
		'content' => $content1,
		'active' => true
	],
	[
		'label' => '<i class="glyphicon glyphicon-user"></i> Profile',
		'content' => $content2,
		'linkOptions' => ['data-url' => \yii\helpers\Url::to(['/zcore/tabs-data'])]
	],
	[
		'label' => '<i class="glyphicon glyphicon-list-alt"></i> Dropdown',
		'items' => [
			[
				'label' => 'Option 1',
				'encode' => false,
				'content' => $content3,
			],
			[
				'label' => 'Option 2',
				'encode' => false,
				'content' => $content4,
			],
		],
	],
	[
		'label' => '<i class="glyphicon glyphicon-king"></i> Disabled',
		'headerOptions' => ['class' => 'disabled']
	],
];


use kartik\tabs\TabsX;

// Above
echo TabsX::widget([
	'items' => $items,
	'position' => TabsX::POS_ABOVE,
	'encodeLabels' => false,
	'enableStickyTabs' => true
]);
// Below
echo TabsX::widget([
	'items' => $items,
	'position' => TabsX::POS_BELOW,
	'encodeLabels' => false,
	'enableStickyTabs' => true
]);
// Left
echo TabsX::widget([
	'items' => $items,
	'position' => TabsX::POS_LEFT,
	'encodeLabels' => false,
	'enableStickyTabs' => true
]);
// Right
echo TabsX::widget([
	'items' => $items,
	'position' => TabsX::POS_RIGHT,
	'encodeLabels' => false,
	'enableStickyTabs' => true
]);
