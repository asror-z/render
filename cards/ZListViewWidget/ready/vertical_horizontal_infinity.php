<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZPriceFormatWidget1;
use zetsoft\widgets\market\ZStarDobtcoWidget;
use zetsoft\widgets\market\ZSVGWidget;


/** @var ZView $this */
$action = new WebItem();

$id = $this->httpGet('id');

$action->type = WebItem::type['part'];
$action->csrf = true;
$action->debug = false;
$action->cache = false;
$action->call = null;
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

/** @var ZView $this */


//$item=Az::$app->market->product->product(12548);


if (!isset($item)  ) {

    $item = new ProductItem();
    $item->name = 'Арахисовая паста с медом 200г';
    $item->title = 'Test Desc';
    $item->new_price = '148920';
    $item->price_old = '188920';
    $item->barcode = '34234234';
    $item->exist = ProductItem::exists['yes'];
    $item->images = [
        'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
    ];
    $item->currency = 'сум';
    $item->currencyType = 'after';
    $item->measure = 'шт';
    $item->rating = 3.5;
    $item->id = $this->myId();
    $item->url = '/shop/user/product-single/common.aspx';
    $item->discount = -10;
}
if (!isset($col)) {
    $col = 4;
}
if (!isset($isCommon))
    $isCommon = true;


?>

<?
$this->fileJs('/render/ajaxify/ZInfinityScrollAjaxWidget/asset/main.js');
?>


<?php
/** @var ZView $this */
echo $this->require( '/render/cards/ZHCommonSaleWidget/ready/main.php', [
    'id' => $item->id,
    'item'=>$item,
    'isCommon' => $isCommon,
]);
?>

<?php


echo $this->require( '/render/cards/ZVMarketWidget/ready/main_row.php', [
    'id' => $item->id,
    'item' => $item,
    'col' => $col,
    'isCommon' => $isCommon,
]);
?>








