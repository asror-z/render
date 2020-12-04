<?php

/**
 *
 *
 * Author:  Obidov Yasin
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\cards\newWidgets\ZVerticalCardWidget;
use zetsoft\widgets\cards\ZHCommonSaleWidget;
use zetsoft\widgets\cards\ZHCommonSaleWidget2;


$product = Az::$app->market->product->allProducts(35);

$productId = '';
$title = '';
$currency = '';
$price = '';
$price_old = '';
$id = '';

foreach ($product as $key => $value) :
    //vdd($value);
    $productId = $value->id;
    $title = $value->name;
    $currency = $value->currency;
    $price = $value->price;
        foreach ($value->price_old as $old) {
          
          $price_old = $old;
        }

    $id = $value->id;



    foreach ($value->price as $v) {
        $price = $v;
    }

 echo ZHCommonSaleWidget2::widget([
    'config' => [
        'names' =>$title,
        'price' => $price,
        'price_old' => $price_old,
        'per' => '1',
        'review' => '3',
        'measurement' => ZHCommonSaleWidget2::units['шт'],    /* 1шт or кг */
        'img' =>'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img img-fluid',
        'id' => $id,
    ]
 ]);


endforeach;

