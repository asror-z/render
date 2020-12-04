<?

use asrorz\wgets\ZChartWidget;
use yii\web\JsExpression;


ZChartWidget::registerTheme('shine');

$aOptions = [

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
				'value' => 'Месяц',
				'textStyle' => [
					'fontWeight' => 'bold',
					'fontSize' => 11,
					'fontFamily' => 'Verdana',
				],
			],
			[
				'value' => 'Год',
				'textStyle' => [
					'fontWeight' => 'bold',
					'fontSize' => 11,
					'fontFamily' => 'Verdana',
				],
			],
			[
				'value' => 'Все',
				'textStyle' => [
					'fontWeight' => 'bold',
					'fontSize' => 11,
					'fontFamily' => 'Verdana',
				],
			]

		]

	],
	'yAxis' => [
		'type' => 'value',
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
			'type' => 'line',

			'label' => [
				'normal' => [
					'position' => 'inside',
					'show' => 'true',
				],
			],
			'data' => [
				100,
				10
			]
		],
		[
			'name' => 'Входящие звонки',
			'type' => 'line',
			'label' => [
				'normal' => [
					'position' => 'inside',
					'show' => 'true',
				],
			],
			'data' => [
				33,
				73,
				63,
				33,
				44
			]
		],
		[
			'name' => 'Исходящие звонки',
			'type' => 'line',
			'label' => [
				'normal' => [
					'position' => 'inside',
					'show' => 'true',
				],
			],
			'data' => [
				33,
				35,
				36,
				37,
				52
			]
		],


	]
];


echo ZChartWidget::widget([
	'theme' => 'shine',
	'responsive' => true,
	'options' => [
		'style' => 'height: 480px; width: 100%'
	],
	'pluginEvents' => [
		'click' => [
			new JsExpression('function (params) {console.log(params)}'),
			new JsExpression('function (params) {console.log("ok")}')
		],
		'legendselectchanged' => new JsExpression('function (params) {console.log(params.selected)}')
	],
	'pluginOptions' => [
		'option' => $aOptions
	]
]);

?>


