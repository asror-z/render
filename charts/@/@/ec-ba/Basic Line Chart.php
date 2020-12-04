<?

/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use asrorz\wgets\ZBoxWidget;
use asrorz\wgets\ZChartWidget;
use yii\bootstrap\Html;


Html::beginTag('div', ['class' => 'col-xs-12']);

ZBoxWidget::begin([
	'sType' => ZBoxWidget::Type_Success,
	'sTitle' => 'Текущая статистика',
	'bIsSolid' => false,
]);


$aOption = [
	'title' => [
		'show' => false,
		'text' => 'aaadadda',
		'link' => 'http://nasvyazi.uz',
		'subtext' => 'aaadadda2222',
		'itemGap' => 5,

		'textStyle' => [
			'fontSize' => 12,
		],
		'padding' => [15, 100],

	],
	'legend' => [
		'show' => true,
		'type' => 'scroll',
		'align ' => 'center',
		'left' => '20%',
		'orient' => 'horizontal',     // vertical
		'padding' => 20,
		'itemGap' => 30,
		'animation' => true,
		'symbolKeepAspect' => true,
		'textStyle' => [
			'fontSize' => 13,
		],


	],

	'grid' => [
		'show' => true,
		'left' => '3%',
		'right' => '4%',
		'bottom' => '3%',
		'containLabel' => true,
		'tooltip' => [
			'trigger' => 'item'
		],

	],

	'dataZoom' => [
		'show' => true,
		'type' => 'slider',
		'handleSize' => '100%',
		'start' => 0,
		'end' => 100,

	],

	'tooltip' => [
		'show' => true,
		'trigger' => 'item',
		'textStyle' => [
			'fontSize' => 11,
		],
	],


	'axisPointer' => [
		'id' => 'axisPointerTwo',
		'show' => true,
		'type' => 'shadow',
		'label' => [
			'show' => true,
			'precision' => 2,
		],
		'handle' => [
			'show' => true,
			'size' => 35,
			'throttle' => 35,
		],

	],
	'toolbox' => [
		'show' => true,
		'orient' => 'vertical', //  horizontal
		'itemSize' => 20,
		'itemGap' => 10,
		'showTitle' => true,
		'feature' => [
			'saveAsImage' => [],
			'restore' => [],
			'dataView' => [],
			'dataZoom' => [],
			'magicType' => [],
		]
	],
	'textStyle' => [
		'fontStyle' => 'normal',
		'fontWeight' => 'bold',
		'fontFamily' => 'Verdana',
		'fontSize' => 12,
		'align' => 'center',
		'verticalAlign' => 'middle',
	],
	'animation' => true,
	'useUTC' => false,

	'xAxis' => [
		'show' => true,
		'position' => 'bottom',     // top
		'offset' => 2,
		'type' => 'category',       //  value | time | category
		'name' => '',
		'nameLocation' => 'center',
		'nameTextStyle' => [
			'fontSize' => 15,
		],
		'nameGap' => 20,
		'nameRotate' => null,

		'inverse' => false,
		'boundaryGap' => true,

		'scale' => true,
		'splitNumber' => 5,

		'axisLabel' => [
			'show' => true,
			'interval' => 'auto',
			'inside' => false,
			'rotate' => 0,  // 90 | 180
			'margin' => 20,
			'fontSize' => 12,
			'align' => 'center',
			'verticalAlign' => 'middle',
		],
		'splitLine' => [
			'show' => true,
		],

		'axisLine' => [
			'show' => true,
		],
		'axisTick' => [
			'show' => true,
		],

	],
	'yAxis' => [

		'type' => 'value',       //  value | time | category
		'name' => '',
		'nameLocation' => 'center',
		'nameTextStyle' => [
			'fontSize' => 15,
		],

		'nameGap' => 30,
		'nameRotate' => null,

		'inverse' => false,
		'boundaryGap' => true,

		'scale' => true,
		'splitNumber' => 5,

		'axisLabel' => [
			'show' => true,
			'interval' => 'auto',
			'inside' => false,
			'rotate' => 0,  // 90 | 180
			'margin' => 15,
			'fontSize' => 12,
			'align' => 'center',
			'verticalAlign' => 'middle',
		],
	],


	'dataset' => [
		'source' => [
			['Name', 'In', 'Out'],
			['Monday', 43.3, 853.8],
			['Tuesday', 83.1, 73.4],
			['331', 833.1, 73.4],
			['Tue141sday', 843.1, 73.4],
			['Tue4sday', 83.1, 73.4],
			['Tue4s4day', 83.1, 73.4],
			['Tue44sday', 83.1, 73.4],
		]
	],

	'series' => [
		[
			'type' => 'line',

			'symbol' => 'circle',
			'symbolSize' => 5,
			'smooth' => false,

			'seriesLayoutBy' => 'column',
			'label' => [
				'show' => true,
				'position' => 'inside',
				'fontSize' => 11,
				'align' => 'center',
				'verticalAlign' => 'middle',
				'offset' => [-10, -10],
				'padding' => [0, 0],
				'emphasis' => [
					'show' => true,
				]
			],
		],
		[
			'type' => 'bar',

			'barWidth' => null,
			'barMaxWidth' => null,
			'barMinHeight' => 0,
			'barGap' => '30%',
			'barCategoryGap' => '20%',

			'seriesLayoutBy' => 'column',
			'label' => [
				'show' => true,
				'position' => 'inside',
				'fontSize' => 11,
				'align' => 'center',
				'verticalAlign' => 'middle',
			],

		],
		[
			'type' => 'pie',
			'selectedMode' => true,
			'selectedOffset' => 20,
			'clockwise' => true,
			'startAngle' => 90,
			'minAngle' => 0,
			'roseType' => false,
			'avoidLabelOverlap' => true,
			'stillShowZeroSum' => true,

			'seriesLayoutBy' => 'column',
			'label' => [
				'show' => true,
				'position' => 'inside',
				'fontSize' => 11,
				'align' => 'center',
				'verticalAlign' => 'middle',
			],


		],
		[
			'type' => 'pie',
			'selectedMode' => true,
			'selectedOffset' => 20,
			'clockwise' => true,
			'startAngle' => 90,
			'minAngle' => 0,
			'roseType' => false,
			'avoidLabelOverlap' => true,
			'stillShowZeroSum' => true,

			'seriesLayoutBy' => 'column',
			'label' => [
				'show' => true,
				'position' => 'inside',
				'fontSize' => 11,
				'align' => 'center',
				'verticalAlign' => 'middle',
			],
			'labelLine' => [
				'show' => true,
			],

		],
	]
];


echo ZChartWidget::widget([
	'isResponsive' => true,
	'sTheme' => ZChartWidget::Theme_Shine,
	'aBlock' => [
		'style' => 'height: 400px; '
	],
	'_aOption' => $aOption
]);


ZBoxWidget::end();
echo Html::endTag('div');

