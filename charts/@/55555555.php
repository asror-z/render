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
use zetsoft\former\chart\ChartForm;
use zetsoft\widgets\blocks\ZEChartWidgetOld;
use zetsoft\widgets\charts\ZChartWidget;


Html::beginTag('div', ['class' => 'col-xs-12']);



$data = [
    ['Name', 'In', 'Out'],
    ['Monday', 43.3, 853.8],
    ['Tuesday', 83.1, 73.4],
];




$data = [];

$form = new ChartForm();

$form->attributeLabels();
$form->columnsList();


$form->name = 'Monday';
$form->in = 43.3;
$form->out = 853.8;
$data[] = $form;


$form = new ChartForm();
$form->name = 'Tuesday';
$form->in = 83.1;
$form->out = 73.4;
$data[] = $form;


echo ZChartWidget::widget([
    'data' => $data
]);

echo Html::endTag('div');

