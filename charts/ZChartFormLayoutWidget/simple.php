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
use zetsoft\models\shop\ShopOrder;
use zetsoft\widgets\blocks\ZEChartWidgetOld;
use zetsoft\widgets\charts\ZChartFormLayoutWidget;
use zetsoft\widgets\charts\ZChartFormWidget;
use zetsoft\widgets\charts\ZChartWidget;
use function Spatie\SslCertificate\length;

$forms = [];

/*$form1 = new ChartForm();
$form1->name = 'Monday';
$form1->in = 43.3;
$form1->out = 853.8;
$forms1[] = $form1;*/
$day=7;
$date = date("Y-m-d h:i:s", strtotime("-".$day." days"));

$orders = ShopOrder::find()->where([
    '>=', 'created_at', $date,
])->all();
$ordersByStatus = ShopOrder::find()->where([
    '>=', 'created_at', $date,
])->andWhere([
    'status_client' => ShopOrder::status_client['accepted']
])->all();

$count = count($ordersByStatus);

foreach ($orders as $order) {
    $form = new ChartForm();
    $form->name = $order['created_at'];
    $form->in = $order['total_price'] ?? 0;

    if ($count > 0)
        foreach ($ordersByStatus as $obs) {
            $form->out = $obs['total_price'] ?? 0;
            continue;
        }
    else
        $form->out = 0;
    $forms[] = $form;
    $count--;
}


/*$form1 = new ChartForm();
$form1->name = 'Tuesday';
$form1->in = 83.1;
$form1->out = 73.4;
$forms1[] = $form1;


$form1 = new ChartForm();
$form1->name = 'Wednesday';
$form1->in = 833.1;
$form1->out = 73.4;
$forms1[] = $form1;


$form1 = new ChartForm();
$form1->name = 'Thursday';
$form1->in = 843.1;
$form1->out = 73.4;
$forms1[] = $form1;


$form1 = new ChartForm();
$form1->name = 'Friday';
$form1->in = 83.1;
$form1->out = 73.4;
$forms1[] = $form1;


$form1 = new ChartForm();
$form1->name = 'Saturday';
$form1->in = 83.1;
$form1->out = 73.4;
$forms1[] = $form1;


$form1 = new ChartForm();
$form1->name = 'Sunday';
$form1->in = 83.1;
$form1->out = 73.4;
$forms1[] = $form1;*/


echo ZChartFormLayoutWidget::widget([
    'data' => $forms,
    'model' => new ChartForm(),
    'config' => [
        'type' => ZChartFormLayoutWidget::type['line']
    ]
]);


