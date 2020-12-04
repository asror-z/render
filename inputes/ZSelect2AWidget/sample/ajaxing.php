<?php

use zetsoft\models\shop\ShopOrder;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZSelect2AjaxingWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;

/** @var ZView $this */


$model = new ShopOrder();

echo ZSelect2Widget::widget([
    'model' => $model,
    'attribute' => 'user_id',
    'config' => [
        'ajax' => true
    ]
]);

?>


