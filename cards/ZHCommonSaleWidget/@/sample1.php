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
use zetsoft\widgets\cards\ZHCommonSaleWidget;


$product = Az::$app->market->product->allProducts(35);

$productId = '';
$title = '';
$price = '';
$currency = '';
$price = '';

foreach ($product as $key => $value) :
    //vdd($value);
    $productId = $value->id;
    $title = $value->name;
    $currency = $value->currency;
    $price = $value->price;



    foreach ($value->price as $v) {
        $price = $v;
    }

 echo ZHCommonSaleWidget2::widget([
    'config' => [
        'names' =>$title,
        'price' => $price,
        'per' => '1',
        'review' => '3',
        'measurement' => ZHCommonSaleWidget1::units['шт'],    /* 1шт or кг */
        'img' =>'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img img-fluid'
    ]
 ]);


endforeach;
