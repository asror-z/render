<?php
use asrorz\wgets\ZChartWidget;

// 引用地图必须使用完整版的echarts
ZChartWidget::$dist = ZChartWidget::DIST_FULL;
?>

<?= ZChartWidget::widget([
	'responsive' => true,
	'options' => [
		'style' => 'height: 400px;'
	],
	'pluginOptions' => [
		'option' => [
			'series' => [
				[
					'name' => 'China map',
					'type' => 'map',
					'map' => 'china',
					'data' => [
						['name' => '广东', 'selected' => true]
					]
				]
			]
		]
	]
]); ?>

<?= ZChartWidget::widget([
	'responsive' => true,
	'options' => [
		'style' => 'height: 400px;'
	],
	'pluginOptions' => [
		'option' => [
			'geo' => [
				'map' => '北京'
			]
		]
	]
]); ?>
