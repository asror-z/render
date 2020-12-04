<?php

use zetsoft\widgets\market\ZAddProductWidget;

$product = new \zetsoft\dbitem\shop\ProductItem();
$product->name = 'Samsung';
$product->url = 'salom.uz';
$product->price = 192;
$product->currency = "$";
$product->amount = 8;
$product->image = ['https://lh3.googleusercontent.com/uO33Yo7ZkFEiP7lydwshGFKkJQiZP5rlPN86nDiDG1-CB07uwYBO1icZqujQw7KI25Y3HA=s85', 'asdfasd.asdf'];

$property1 = new \zetsoft\dbitem\shop\PropertyItem();
$property1->id = 1;
$property1->property = "color";
$property1->value = ['Red'];

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
echo ZAddProductWidget::widget([]);
