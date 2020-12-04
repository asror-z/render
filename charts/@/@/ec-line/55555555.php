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
use zetsoft\widgets\blocks\ZEChartWidgetOld;


Html::beginTag('div', ['class' => 'col-xs-12']);
$aData = [
    ['Name', 'In', 'Out'],
    ['Monday', 43.3, 853.8],
    ['Tuesday', 83.1, 73.4],
    ['331', 833.1, 73.4],
    ['Tue141sday', 843.1, 73.4],
    ['Tue4sday', 83.1, 73.4],
    ['Tue4s4day', 83.1, 73.4],
    ['Tue44sday', 83.1, 73.4],
];


echo ZEChartWidgetOld::widget([
    'data' => $aData,
]);

echo Html::endTag('div');

