<?php

use zetsoft\models\shop\ShopOrderItem;
use zetsoft\service\blogic\ALL\Shop;
use zetsoft\widgets\former\ZDynaAblWidget;

$model = new ShopOrderItem();

echo ZDynaAblWidget::widget([
    'model' => $model
]);
