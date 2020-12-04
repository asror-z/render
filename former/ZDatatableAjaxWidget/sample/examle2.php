<?php

use zetsoft\dbitem\data\TabItem;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopOrderItem;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZDatatableAjaxWidget;
use zetsoft\widgets\former\ZDatatableAjaxWidget2;

/* @var Zview $this */
$model = new ShopOrderItem();

echo ZDatatableAjaxWidget::widget([
    'model' => $model,
    'config' => [
        'ajaxUrl' => '/api/ajax/dataTableData.aspx',
    ]
]);


/*$users = User::findOne(118);

$items = [];
foreach ($users as $user) {

    $item = new TabItem();
    $item->name = $users->name;
    $item->label = $users->title;
    $item->url = $users->role;

    $items[] = $item;
}
echo $items;*/
