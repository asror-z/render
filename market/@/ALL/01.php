<?php

use zetsoft\dbitem\wdg\MenuItem;
use zetsoft\widgets\market\ZMenuWidget;
use zetsoft\widgets\market2\ZCategoryWidget;
use zetsoft\widgets\market2\ZNavbarWidget;
use zetsoft\widgets\market2\ZOrderSummaryWidget;
use zetsoft\widgets\market2\ZPlaceAnOrderWidget;
use zetsoft\widgets\market2\ZWishCardWidget;
use zetsoft\widgets\market2\ZXeContactsWidget;
use zetsoft\widgets\market2\ZXeMartProductReviewWidget;
use  zetsoft\widgets\market2\ZHotOfferWidget;
//$menu_item1 = new MenuItem();
//$menu_item1->label = " - Samsung";
//$menu_item1->url = "samsung.uz";
//
//
//$menu_item2 = new MenuItem();
//$menu_item2->label = "SMARTPHOES";
//$menu_item2->url = "/smartphoes";
//$menu_item2->image = '/render/market2/ZMenuWidget/asset/demo_files/images/brand-01.png';
//$menu_item2->image_url = "https://simwood.aliexpress.com/store/1472219?spm=a2g0o.home.102.49.650c2145ia5DST";
//$menu_item2->items = [
//    $menu_item1,
//    $menu_item1,
//    $menu_item1,
//    $menu_item1,
//];
//
//$menu_item11 = new MenuItem();
//$menu_item11->label = "test";
//$menu_item11->url = "/smartphoes";
//$menu_item11->image = '/render/market2/ZMenuWidget/asset/demo_files/images/brand-01.png';
//$menu_item11->image_url = "https://simwood.aliexpress.com/store/1472219?spm=a2g0o.home.102.49.650c2145ia5DST";
//$menu_item11->items = [
//    $menu_item1,
//    $menu_item1,
//    $menu_item1,
//    $menu_item1,
//    $menu_item1,
//];
//
//$menu_item3 = new MenuItem();
//$menu_item3->label = "Men's Clothing";
//$menu_item3->url = "/mens_clothing";
//$menu_item3->image = '/render/market2/ZMenuWidget/asset/demo_files/images/brand-01.png';
//$menu_item3->image_url = "https://simwood.aliexpress.com/store/1472219?spm=a2g0o.home.102.49.650c2145ia5DST";
//$menu_item3->items = [
//    $menu_item2
//];
//
//$menu_item4 = new MenuItem();
//$menu_item4->label = "Men's Clothing";
//$menu_item4->url = "/mens_clothing";
//$menu_item4->image = '/render/market2/ZMenuWidget/asset/demo_files/images/brand-01.png';
//$menu_item4->image_url = "https://simwood.aliexpress.com/store/1472219?spm=a2g0o.home.102.49.650c2145ia5DST";
//$menu_item4->items = [
//    $menu_item2,
//    $menu_item2,
//    $menu_item11,
//    $menu_item11,
//    $menu_item2,
//    $menu_item2,
//];
//
//$items = [
//    $menu_item3,
//    $menu_item4,
//    $menu_item1,
//    $menu_item1,
//];
//echo ZMenuWidget::widget([
//    'config' => [
////        'name' => "All Categories",
////        'items' => $items,
////        'col_number' => 4,
////        'open' => false
//    ]
//]);
echo ZMenuWidget::widget([]);
echo ZHotOfferWidget::widget([]);
echo ZNavbarWidget::widget([
    'config' => [
        "languages" => [
            ['label'=>'brazilya', 'rasm'=>'/render/market2/ZNavbarWidget/asset/assets/img/fl-bra.png', 'active'=>false],
            ['label'=>'germaniya', 'rasm'=>'/render/market2/ZNavbarWidget/asset/assets/img/fl-ger.png', 'active'=>true],
            ['label'=>'english', 'rasm'=>'/render/market2/ZNavbarWidget/asset/assets/img/fl-eng.png', 'active'=>false],
        ]
    ]
]);
echo ZOrderSummaryWidget::widget([]);
echo ZPlaceAnOrderWidget::widget([]);

