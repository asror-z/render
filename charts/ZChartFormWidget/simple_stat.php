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
use zetsoft\system\Az;
use zetsoft\widgets\charts\ZChartFormLayoutWidget;
use zetsoft\widgets\charts\ZChartFormWidget;


Html::beginTag('div', ['class' => 'col-8']);


$forms = [];

$form = new ChartForm();
$form->name = 'Monday';
$form->in = 43.3;
$form->out = 853.8;
$forms[] = $form;


$form = new ChartForm();
$form->name = 'Tuesday';
$form->in = 83.1;
$form->out = 73.4;
$forms[] = $form;


$form = new ChartForm();
$form->name = 'Wednesday';
$form->in = 833.1;
$form->out = 73.4;
$forms[] = $form;


$form = new ChartForm();
$form->name = 'Thursday';
$form->in = 843.1;
$form->out = 73.4;
$forms[] = $form;


$form = new ChartForm();
$form->name = 'Friday';
$form->in = 83.1;
$form->out = 73.4;
$forms[] = $form;


$form = new ChartForm();
$form->name = 'Saturday';
$form->in = 83.1;
$form->out = 73.4;
$forms[] = $form;


$form = new ChartForm();
$form->name = 'Sunday';
$form->in = 83.1;
$form->out = 73.4;
$forms[] = $form;


Az::$app->smart->dynaStats->clear();
Az::$app->smart->dynaStats->id = 21;

Az::$app->smart->dynaStats->run();
$model = Az::$app->smart->dynaStats->createModel();
$data = Az::$app->smart->dynaStats->generateData();


  vdd($data);
echo ZChartFormWidget::widget([
    'data' => $data,
    'model' => $model,
    'config' => [
        'type' => ZChartFormWidget::type['line']
    ]
]);

echo Html::endTag('div');

