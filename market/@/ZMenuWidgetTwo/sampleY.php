<?php

use zetsoft\widgets\market\ZMenuWidgetY;
use zetsoft\dbitem\wdg\MenuItem;
//$menu_extra = new MenuItem();
//$menu_extra->url = "samsung.uz";
//$menu_extra->image = '/render/market/ZMenuWidget/asset/images/brand-01.png';
//$menu_extra->location = MenuItem::location['right'];
//
//$menu_extra_buttom = new MenuItem();
//$menu_extra_buttom->url = "samsung.uz";
//$menu_extra_buttom->image = '/render/market/ZMenuWidget/asset/images/brand-01.png';
//$menu_extra_buttom->location = MenuItem::location['bottom'];
//
//$menu_item1 = new MenuItem();
//$menu_item1->label = " - Samsung";
//$menu_item1->url = "samsung.uz";
//
//
//$menu_item2 = new MenuItem();
//$menu_item2->label = "SMARTPHOES";
//$menu_item2->url = "/smartphoes";
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
//$menu_item3->items = [
//    $menu_item2
//];
//
//$menu_item4 = new MenuItem();
//$menu_item4->label = "Men's Clothing";
//$menu_item4->url = "/mens_clothing";
//$menu_item4->items = [
//    $menu_item2,
//    $menu_item2,
//    $menu_item11,
//    $menu_item11,
//    $menu_item2,
//    $menu_item2,
//];
//$menu_item4->extra = [
//    $menu_extra,
//    $menu_extra,
//    $menu_extra_buttom
//];
//
//$items = [
//    $menu_item3,
//    $menu_item4,
//    $menu_item1,
//    $menu_item1,
//];

   ?>

   <div class="row">
        <div class="col-md-3">
            <?
            echo ZMenuWidgetY::widget([
                'config' => [
                    'mode' => ZMenuWidgetY::mode['shop'],
                    'name' => "All Categories",
                    'isAll' => true,
                    'names' => [
//            'monitor',
//            'admin',
//            'Guest menu_77',
                        'user',
//            'ZMenu'
                    ],
                    'col_number' => 4,
                    'open' => false
                ]
            ]);

            ?>

        </div>
   </div>
