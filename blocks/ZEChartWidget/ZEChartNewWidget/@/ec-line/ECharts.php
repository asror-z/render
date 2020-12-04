<?php
use asrorz\wgets\ZChartWidget;
use yii\web\JsExpression;
?>


<?


// Registers the theme JS files.
ZChartWidget::registerTheme('dark');
ZChartWidget::registerTheme('roma');
ZChartWidget::registerTheme('shine');
ZChartWidget::registerTheme('vintage');
ZChartWidget::registerTheme('macarons');
ZChartWidget::registerTheme('infographic');

?>



<?= ZChartWidget::widget([
	'theme' => 'shine',
	'responsive' => true,
	'options' => [
		'style' => 'height: 400px; width: 1000px'
	],
	'pluginEvents' => [
		'click' => [
			new JsExpression('function (params) {console.log(params)}'),
			new JsExpression('function (params) {console.log("ok")}')
		],
		'legendselectchanged' => new JsExpression('function (params) {console.log(params.selected)}')
	],
	'pluginOptions' => [
		'option' => [

			'tooltip' => [
				'trigger' => 'axis'
			],
			'legend' => [
				'show' => true,
				'align ' => 'right',
				'left ' => '20%',
				'textStyle' => [
					'fontWeight' => 'bold',
					'fontSize' => 12,
					'fontFamily' => 'Verdana',
				],
				'data' => [
					'Общее количество',
					'Входящие звонки',
					'Исходящие звонки'
				]

			],
			'grid' => [
				'show' => true,
				'left' => '3%',
				'right' => '4%',
				'bottom' => '3%',
				'containLabel' => true
			],
			'toolbox' => [
				'feature' => [
					'saveAsImage' => [],
					'restore' => [],
					'dataZoom' => [],
					'magicType' => [],
					'brush' => [],
				]
			],
			'xAxis' => [
				'name' => 'Время',
				'type' => 'category',
				'boundaryGap' => true,
				'nameLocation' => 'middle',
				'nameTextStyle' => [
					'fontWeight' => 'bold',
					'fontSize' => 14,
					'fontFamily' => 'Verdana',
				],

				'data' => [
					[
						'value' => 'Сегодня',
						'textStyle' => [
							'fontWeight' => 'bold',
							'fontSize' => 11,
							'fontFamily' => 'Verdana',
						],
					],
					[
						'value' => 'Выборочно',
						'textStyle' => [
							'fontWeight' => 'bold',
							'fontSize' => 11,
							'fontFamily' => 'Verdana',
						],
					]

				]

			],
			'yAxis' => [
				'type' => 'value' ,
				'name' => 'Количество',
				'nameTextStyle' => [
					'fontWeight' => 'bold',
					'fontSize' => 12,
					'fontFamily' => 'Verdana',
				],


			],
			'dataZoom' => [
				'type' => 'inside'
			],
			'series' => [
				[
					'name' => 'Общее количество',
					'type' => 'bar',

					'label' => [
						'normal' => [
							'position' => 'inside',
							'show' => 'true',
						],
					],
					'data' => [
						100,
						77,
					]
				],
				[
					'name' => 'Входящие звонки',
					'type' => 'bar',
					'label' => [
						'normal' => [
							'position' => 'inside',
							'show' => 'true',
						],
					],
					'data' => [
						77,
						88,
					]
				],
				[
					'name' => 'Исходящие звонки',
					'value' => 'bar',
					'type' => 'bar',
					'label' => [
						'normal' => [
							'position' => 'inside',
							'show' => 'true',
						],
					],
					'data' => [
						55,
						44,
					]
				],


			]
		]
	]
]);

?>




<?= ZChartWidget::widget([
	'theme' => 'shine',
	'responsive' => true,
	'options' => [
		'style' => 'height: 400px;'
	],
	'pluginEvents' => [
		'click' => [
			new JsExpression('function (params) {console.log(params)}'),
			new JsExpression('function (params) {console.log("ok")}')
		],
		'legendselectchanged' => new JsExpression('function (params) {console.log(params.selected)}')
	],
	'pluginOptions' => [
		'option' => [
			'calculable' => true,
			'title' => [
				'text' => 'Title',

			],
			'tooltip' => [
				'trigger' => 'axis'
			],
			'legend' => [
				'show' => true,
				'data' => ['data1', 'data2', 'data3', 'data4']
			],
			'grid' => [
				'left' => '3%',
				'right' => '4%',
				'bottom' => '3%',
				'containLabel' => true
			],
			'toolbox' => [
				'feature' => [
					'saveAsImage' => [],
					'restore' => [],
					'dataZoom' => [],
					'magicType' => [],
					'brush' => [],
				]
			],
			'xAxis' => [
				'name' => 'xAxisName',
				'type' => 'category',
				'boundaryGap' => true,
				'data' => ['xAxis1', 'xAxis2', 'xAxis3', 'xAxis4']
			],
			'yAxis' => [
				'type' => 'value'
			],
			'dataZoom' => [
				'type' => 'inside'
			],
			'series' => [

				[
					'name' => 'data3',
					'type' => 'pie',
					'radius' => [0, '100%'],
					'center' => ['20%', '25%'],
					'data' => [
						[
							'name' => 'Пластиковые карточки UZKART',
							'value' => 100,
						],						[
							'name' => 'Международные карты VISA	',
							'value' => 100,
						],
						[
							'name' => 'Международные денежные переводы',
							'value' => 80,
						],
						[
							'name' => 'СМС-банкинг',
							'value' => 89,
						],
					]
				],



			]
		]
	]
]);

?>

