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


use yii\bootstrap\Html;
use zetsoft\widgets\blocks\ZEChartNew1Widget;
use zetsoft\widgets\blocks\ZEChartNewWidget;
use zetsoft\widgets\blocks\ZEChartWidgetOld;
use zetsoft\widgets\blocks\ZEChartNew2Widget;


$aData = [
    ['Monday', 43.3, 853.8],
    ['Tuesday', 83.1, 73.4],
    ['331', 833.1, 73.4],
    ['Tue141sday', 843.1, 73.4],
    ['Tue4sday', 83.1, 73.4],
    ['Tue4s4day', 83.1, 73.4],
    ['Tue44sday', 83.1, 73.4],
];

echo ZEChartNewWidget::widget([
    'data'  => $aData
]);


