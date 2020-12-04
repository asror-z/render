

<?php

use zetsoft\dbitem\core\WebItem;
use yii\bootstrap\Html;
use zetsoft\dbitem\stats\AnalyticStatusItem;
use zetsoft\former\chart\ChartForm;
use zetsoft\former\chart\ChartFormAdmin;
use zetsoft\former\chart\ChartFormAnalytic;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopStatus;
use zetsoft\service\market\GuestStatistic;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZJqueryKnobWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\charts\ZChartFormWidget;
use zetsoft\widgets\charts\ZChartFormWidgetJaxongir;
use zetsoft\widgets\charts\ZChartJsPieWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\market\ZAnalyticsWidget;
use zetsoft\widgets\menus\ZMmenuWidget;
use zetsoft\widgets\menus\ZMmenuWidgetSh;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\shop\ShopBrand;
use zetsoft\widgets\themes\ZMarketAdminCardWidget;
use zetsoftspace\ZClassName;


/** @var ZView $this */


/**
 *
 * @license JaloliddinovSalohiddin
 * @author  OtabekNosirov
 * @license AkromovAzizjon
 *
 */

$action = new WebItem();

$action->title = Azl . 'Панель администратора';
$action->icon = 'fa fa-globe';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;



$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();
$status_client = [
    'accepted' => Az::l('Принят'),
    'count_order' => Az::l('Заказы'),
    'approved' => Az::l('Утвержденный'),
    'forming' => Az::l('Формируется'),
    'delivering' => Az::l('Доставляется'),
    'delivered' => Az::l('Доставлено'),
    'received' => Az::l('Получено'),
    'not_received' => Az::l('Не получено'),
    'not_delivered' => Az::l('Не доставлено'),
];



/**
 *
 * Start Page
 */
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?php
    require Root . '/webhtm/block/metas/' . App . '/main.php';
    require Root . '/webhtm/block/assets/main.php';
    $this->head();
    $this->fileCss('/render/asrorz/css/adminnn.css');
    $this->fileJs('/render/asrorz/js/maladoy.js');
     //   $this->fileJs('/render/asrorz/js/chartist.min.js');

    ?>
</head>
<body class="<?= ZWidget::skin['white-skin'] ?>">
<?php
$this->beginBody();
echo ZNProgressWidget::widget([]);

echo ZMmenuWidget::widget([
    'config' => [
        'isAll' => true,
    ]
]);
?>

<div id="page">
    <?php
    require Root . '/webhtm/block/header/main.php';
    require Root . '/webhtm/block/navbar/admin.php';

    echo ZSessionGrowlWidget::widget();

    ?>
    <div class="pt-2">
        <div class="container-fluid d-flex">
            <!--<div class="col-lg-3 col-md-3 col-sm-12 my-2 ">
                <?/*
                $stats = '';
                $info = Az::$app->market->order->getAllOrder();

                $infos = (array)$info;
                $statuses = [];

                foreach ($infos as $key => $value) {

                    $obj = new AnalyticStatusItem();
                    $obj->name = $key;
                    $obj->color = '#' . Az::$app->market->order->random_color();
                    $obj->amount = $value ?? 0;
                    $obj->status = $key;
                    $obj->url = '/shop/admin/shop-order/index.aspx?ShopOrder[status_client]=' . $key;
                    $statuses[] = $obj;

                }

                echo ZAnalyticsWidget::widget([
                    'data' => $statuses
                ]);


                */?>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <?/*
                        echo ZChartFormWidget::widget([
                            'data' => $statuses,
                            'model' => new AnalyticStatusItem(),
                            'config' => [
                                'title' => Azl . ('Статусы'),
                                'name' => 'status',
                                'color' => true,
                                'colorname' => 'color',
                                'value' => 'amount',
                                'type' => ZChartFormWidget::type['pie'],
                                'theme' => ZChartFormWidget::theme['infographic'],
                                'actionButtons' => [
                                    'update',
                                    'delete',
                                    'view',
                                ],
                                'columnBefore' => [
                                    'serial',
                                    'sort',
                                    'checkbox',
                                    'action',
            ],
                                'columnAfter' => ['false']
                            ]
                        ]);
                        */?>
                    </div>
                </div>
            </div>-->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row my-1 mb-1">
                    <div class="col-md-12">
                        <div class="row">
                            <?
                            //$items = Az::$app->market->userStatistic->getStatsInfoByRole($this->userIdentity()->role);
                            $items = Az::$app->market->adminStatistic->adminInfo();
                            $arr = Az::$app->market->guestStatistic->getStatsValue();
                            $urls = Az::$app->market->guestStatistic->getStatsUrls();
                            $icons = Az::$app->market->guestStatistic->getStatsIcons();
                            foreach ($items as $key => $value) {
                                echo '<div class="col-md-3 col-sm-6 my-2">';
                                echo ZMarketAdminCardWidget::widget([
                                    'config' => [
                                        'percent' => $value,
                                        'title' => ZArrayHelper::getValue($arr, $key),
                                        'bg-color' => '#' .
                                            Az::$app->market->order->random_color(),
                                        'info' => 'Подробно',
                                        'icon' => ZArrayHelper::getValue($icons, $key),
                                        'infoUrl' => ZArrayHelper::getValue($urls, $key),
                                        'class' => 'text-white',
                                        'isPercent' => false,
                                        'theme' => true
                                    ]
                                ]);
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <!-- <div class="col-md-12  d-flex justify-content-end mt-4">
                            <div class="w-25">
                                <?/*
                                echo ZSelect2Widget::widget([
                                    'data' => [3 => Az::l('За 3 дня'), 7 => Az::l('За неделю'), 30 => Az::l('За месяц')],
                                    'name' => 'daying',
                                    'id' => 'daying',
                                    'value' => 7,
                                ]);
                                */?>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 mt-3">
                        <div class="w-100" id="diagramm">

                        </div>
                    </div>

                    <div class="col-md-12" id="diagramm1" style="height: 500px;overflow-y: scroll">

                    </div>-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dashboard-card dashboard-card-chart">
                                    <div class="dashboard-card-header dashboard-card-header-success">
                                        <div class="ct-chart" id="dailySalesChart"></div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <h4 class="dashboard-card-title">Daily Sales</h4>
                                        <p class="dashboard-card-category">
                                            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                                    </div>
                                    <div class="dashboard-card-footer">
                                        <div class="dashboard-card-stats">
                                            <i class="material-icons">access_time</i> updated 4 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dashboard-card dashboard-card-chart">
                                    <div class="dashboard-card-header dashboard-card-header-warning">
                                        <div class="ct-chart" id="websiteViewsChart"></div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <h4 class="dashboard-card-title">Email Subscriptions</h4>
                                        <p class="dashboard-card-category">Last Campaign Performance</p>
                                    </div>
                                    <div class="dashboard-card-footer">
                                        <div class="dashboard-card-stats">
                                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dashboard-card dashboard-card-chart">
                                    <div class="dashboard-card-header dashboard-card-header-danger">
                                        <div class="ct-chart" id="completedTasksChart"></div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <h4 class="dashboard-card-title">Completed Tasks</h4>
                                        <p class="dashboard-card-category">Last Campaign Performance</p>
                                    </div>
                                    <div class="dashboard-card-footer">
                                        <div class="dashboard-card-stats">
                                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                    </div>
                </div>
            </div>
        </div>
        <? require Root . '\webhtm\block\footer\footerAdmin.php'; ?>
    </div>


    <?php $this->endBody() ?>

    <script>


        function getStat(el) {
            let sel = $(el);
            $.ajax({
                url: '/core/product/getStatByDay.aspx',
                method: 'GET',
                data: {
                    'day': sel.val(),

                },
                success: function (data) {
                    $('#diagramm').html(data)
                },
                error: function (e) {
                    console.log(e)
                }
            })
            $.ajax({
                url: '/core/product/getStatByDay1.aspx',
                method: 'GET',
                data: {
                    'day': sel.val(),
                },
                success: function (data) {
                    $('#diagramm1').html(data)
                },
                error: function (e) {
                    console.log(e)
                }
            })
        }

        $(document).ready(function () {
            getStat('#selectDay')
        })

        $('#selectDay').on('change', function () {
            getStat(this);
        })

    </script>

</body>
</html>

<?php $this->endPage() ?>

