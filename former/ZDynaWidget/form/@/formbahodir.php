<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\former\shop\ShopOrderForm;

use zetsoft\models\ware\WareAccept;
use zetsoft\models\shop\ShopOrder;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetD;

$model = new ShopOrderForm();
$model->configs->spa = false;
$data = [];

//$myshop = WareAccept::find()->all();

//$model->query = ShopOrder::find()
$myshop = ShopOrder::find()
    ->select('shop_order.*, user.*')
    ->leftJoin('shop_order', 'shop_order.user_id = user.id');
//    ->where(['core_order.status' => 'checking'])
//    ->andWhere(['core_order.operator_id' => $operator_id])
//    ->with('core_shipment');

//$myshop = ShopOrder::findBySql("SELECT shop_order.*, user.*
//FROM shop_order
//LEFT JOIN shop_order ON shop_order.user_id = user.id
//ORDER BY shop_order.id");
//
//
//var_dump($myshop->count());
//die();
//$catalogs = ShopCatalog::findBySql("SELECT t.id, array_to_json(array_agg(j))
//        FROM your_table t, json_array_elements(t.jsonColumn) j
//        WHERE j->>'field' = 'abc'
//        GROUP BY id");

foreach ( $myshop as $item) {
    $formitem = new ShopOrderForm();
    $formitem->contact_name = $item->name;
//    $formitem->user_id = $item->shop_shipment_id;
//    $formitem->contact_name = $item->shop_courier_id*$item->shop_shipment_id;

    $data[] = $formitem;
}



$item = new ShopOrderForm();
$item->contact_name = 'hi';
$data[] = $item;

echo ZDynaWidget::widget([
    'model' => $model,
    'data' => $data,
    'type' => ZDynaWidget::type['form'],
    
]);
