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
use zetsoft\dbitem\stats\AnalyticStatusItem;
use zetsoft\former\chart\ChartForm;
use zetsoft\system\Az;
use zetsoft\widgets\blocks\ZEChartWidgetOld;
use zetsoft\widgets\charts\ZChartFormWidget;
use zetsoft\widgets\charts\ZChartJsPieWidget;
use zetsoft\widgets\charts\ZChartWidget;

$companyId = $this->userIdentity()->user_company_id;
$info = Az::$app->market->order->getInfoOrder(17);
$infos = (array)$info;
$statuses = [];
foreach ($infos as $key=>$value){
    $obj = new AnalyticStatusItem();
    $obj->color='#'.Az::$app->market->order->random_color();
    $obj->amount=$value??0;
    $obj->status=$key;
    $statuses[]=$obj;
}


echo ZChartJsPieWidget::widget([
    'data' => $statuses,
    'config' => [
        'type' => ZChartFormWidget::type['pie'],
    ]
]);
