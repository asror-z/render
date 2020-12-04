<?php


use zetsoft\system\Az;
use zetsoft\widgets\cards\ZCartViewWidget;


/*
$property1 = new \zetsoft\dbitem\shop\PropertyItem();
$property1->id = [1];
$property1->property = "color";
$property1->value = ['white'];

$property2 = new \zetsoft\dbitem\shop\PropertyItem();
$property2->id = [2];
$property2->property = "size";
$property2->value = ['M'];

$product->properties =[
    $property1,
    $property2
];*/

/*
$product = new \zetsoft\dbitem\shop\ProductItem();
$product->name = 'asdfasd';
$product->url = 'salom.uz';
$product->price = [195];
$product->currency = "$";
$product->amount = 8;
$product->image = ['rasm.jpg', 'asdfasd.asdf'];

$product1 = new \zetsoft\dbitem\shop\ProductItem();
$product1->name = 'asdfasd';
$product1->url = 'salom.uz';
$product1->price = [191];
$product1->currency = "$";
$product1->amount = 8;
$product1->images = ['rasm.jpg', 'asdfasd.asdf'];

$products = [
    $product,
    $product1
];*/

echo ZCartViewWidget::widget([
    'config' => [
        'url' => '/customer/basket/index.aspx'
    ]
]);
