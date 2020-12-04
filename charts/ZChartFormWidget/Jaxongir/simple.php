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
use zetsoft\dbitem\shop\AdminItem;
use zetsoft\dbitem\stats\AnalyticStatusItem;
use zetsoft\former\chart\ChartForm;
use zetsoft\former\chart\ChartFormAdmin;
use zetsoft\former\chart\ChartFormAnalytic;
use zetsoft\models\shop\ShopOrder;
use zetsoft\system\Az;
use zetsoft\widgets\charts\ZChartFormWidget;
use zetsoft\widgets\charts\ZChartFormWidgetJaxongir;
use zetsoft\widgets\charts\ZChartWidget;

echo ZChartFormWidget::widget([
    'data' => Az::$app->market->adminStatistic->adminInfoChart(),
    'model' => new ChartFormAdmin(),
    'config' => [
        'type' => ZChartFormWidget::type['pie'],
        'theme' => ZChartFormWidget::theme['macarons'],
    ]

]);

$companyId = $this->userIdentity()->user_company_id;
                        $info = Az::$app->market->order->getInfoOrder(17);
                        $infos = (array)$info;
                        $statuses = [];
                        foreach ($infos as $key=>$value){
                            $obj = new AnalyticStatusItem();
                            
                            $obj->name=$key;
                            $obj->color='#'.Az::$app->market->order->random_color();
                            $obj->amount=$value??0;
                            $obj->status=$key;
                            $statuses[]=$obj;
                        }
    
    
 //vdd(ShopOrder::find()->);

echo ZChartFormWidgetJaxongir::widget([
    'data' => $statuses,
    'config' => [
        'name'=>'name',
        'color'=>true,
        'colorname'=>'color',
        'value'=>'amount',
        'type' => ZChartFormWidget::type['pie'],
        'theme' => ZChartFormWidget::theme['macarons'],
    ]
]);
vd($statuses);
