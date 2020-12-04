<?php

use zetsoft\widgets\market\ZMyCardExampleWidget;


$product = new \zetsoft\dbitem\shop\ProductItem();
$product->name = 'asdfasd';
$product->url = 'salom.uz';
$product->price = 192;
$product->currency = "$";
$product->amount = 8;
$product->image = ['rasm.jpg', 'asdfasd.asdf'];

$property1 = new \zetsoft\dbitem\shop\PropertyItem();
$property1->id = 1;
$property1->property = "color";
$property1->value = ['white'];

$property2 = new \zetsoft\dbitem\shop\PropertyItem();
$property2->id = 2;
$property2->property = "size";
$property2->value = ['M'];

$product->properties =[
    $property1,
    $property2
];

$products = [
    $product
];
echo ZMyCardExampleWidget::widget([
    'config' => [
        'products' => $products
    ]
]);






