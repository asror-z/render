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
use zetsoft\former\eyuf\ProgramForm;
use zetsoft\widgets\blocks\ZEChartWidgetOld;
use zetsoft\widgets\charts\ZChartFormWidget;
use zetsoft\widgets\charts\ZChartWidget;


Html::beginTag('div', ['class' => 'col-xs-12']);


$data = [];

$model = new ProgramForm();

$form = clone $model;
$form->country = 'Russia';
$form->masters = 100;
$form->intern = 2200;
$form->qualify = 200;
$data[] = $form;

$form = clone $model;
$form->country = 'Uzb';
$form->masters = 100;
$form->intern = 1200;
$form->qualify = 200;
$data[] = $form;

echo ZChartFormWidget::widget([
    'data' => $data,
    'model' => $model
]);

echo Html::endTag('div');

