<?php


use zetsoft\models\shop\ShopOrder;
use zetsoft\widgets\charts\ZChartFormProviderWidget;
use zetsoft\widgets\charts\ZChartFormProviderWidgetCopy;


//start|NurbekMakhmudov|2020-10-14

$model = new ShopOrder();

$provider = $model->search();

echo ZChartFormProviderWidgetCopy::widget([
    'provider' => $provider,
])

//end|NurbekMakhmudov|2020-10-14








?>