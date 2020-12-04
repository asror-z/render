<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\dbitem\shop\PropertyItem;

$item = new ProductItem();
$item->id = 1;

$pro1 = new PropertyItem();
$pro1->name = 'color';
$pro1->items = [
    '1' => 'qizil',
    '2' => 'oq',
];
$pro2 = new PropertyItem();
$pro2->name = 'color';
$pro2->items = [
    '3' => 'qizil'
];
$item->allProperties = [
    $pro1,
    $pro2,
];

$item1 = new ProductItem();
$item1->id = 1;
$item1->name='Iphone';
$item1->text='Отменить';
$item1->url='/shop/user/filter-common/main.aspx#menu';
$item1->images=['https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS7p4pthnSF53HzL_2wmdgVZWKQHIb39Kt3o2Uu1lwTpzLdSztT-mG6kE-_ZNLHiko&usqp=CAU'];
$item1->categoryName='item1';
$item1->categoryUrl='/shop/user/filter-common/main.aspx#menu';
$item1->properties=[
    $pro1,
    $pro2
];
$item1->allProperties=[$pro1,$pro2];
$item1->items[] = $item;



$item2 = new ProductItem();
$item2->id = 2;
$item2->name='Samsung';
$item2->text='Отменить';
$item2->url='/shop/user/filter-common/main.aspx#menu';
$item2->images[]=['https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS7p4pthnSF53HzL_2wmdgVZWKQHIb39Kt3o2Uu1lwTpzLdSztT-mG6kE-_ZNLHiko&usqp=CAU'];
$item2->categoryName='item2';
$item2->categoryUrl='/shop/user/filter-common/main.aspx#menu';
$item2->properties=[
    $pro1,
    $pro2
];
$item2->allProperties[]=[$pro1,$pro2];
$item2->items[] = $item;


$item3 = new ProductItem();
$item3->id = 3;
$item3->name='Xiaomi';
$item3->text='Отменить';
$item3->url='/shop/user/filter-common/main.aspx#menu';
$item3->categoryName='item3';
$item3->categoryUrl='item3';
$item3->allProperties[]=[$pro1,$pro2];
$item3->allProperties[]=['item3','item2'];

$item3->items[] = $item2;


$item1->items[] = $item2;
$item1->items[] = $item3;


$result = [

    $item1,
  //s $item2,
  //$item3,
];


echo \zetsoft\widgets\yandex\ZCompareWidget::widget([
    'config' => [
        'productItems'=>$result,
        'categories'=>['Iphone','Samsung','Xiaomi']
    ]
]);
