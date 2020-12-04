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
use zetsoft\widgets\charts\ZChartFormWidget;
use zetsoft\widgets\charts\ZChartWidget;


Html::beginTag('div', ['class' => 'col-8']);


$forms = [];

$form = new ChartForm();
$form->name = 'Monday';
$form->in = 500;
$form->out = 100;
$form->out2 = 50;
$forms[] = $form;
$form = new ChartForm();
$form->name = 'Monday';
$form->in = 1000;
$form->out = 853.8;
$form->out2 = 853.8;
$forms[] = $form;




echo ZChartFormWidget::widget([
    'data' => $forms,
    'model' => $form,
    'config' => [
        'type' => ZChartFormWidget::type['pie'],
        'theme' => ZChartFormWidget::theme['macarons'],
    ]
]);

echo Html::endTag('div');

