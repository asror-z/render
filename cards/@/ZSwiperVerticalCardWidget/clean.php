<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\widgets\market\ZMSwiperWidget;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

 ?>
 <div class="col-md-12 mx-auto mt-3 d-flex align-items-center">
            <?php
            $slide_data = [];
            $items = Az::$app->market->product->getAllProductsByCompany(57, 550);
            if(!isset($items)){
           
                $item = new ProductItem();
                $item->id = 2;
                $item->name = 'Арахисовая паста с медом 200г';
                $item->title = 'Test Desc';
                $item->new_price = '14825920';
                $item->price_old = '188920';
                $item->barcode = '34234234';
                $item->exist = ProductItem::exists['not'];
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
                $item->discount = -10;
                $item->catalogId = 19;
                $item->max_price = 2155632;
                $item->sale = 'sdadsa';
                $item->is_multi = false;
                $item->min_price = 'adssad';
                $item->in_wish = true;
                $item->in_compare = false;

            }
            foreach ($items as $item) {
                $slide_data[] =$this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
                    'item' => $item
                ]);

            }
            echo ZMSwiperWidget::widget([
                'data' => $slide_data,
                'config' => [
                    'slideWidget' => true,
                    'slidesPerView' => 2,
                    'pagination.el' => '',
                    'd-none' => 'd-none',
                    'slidesMediaPerView640' => 3,
                    'slidesMediaPerView500' => 2,
                    'slidesMediaPerView1024' => 4,
                    'slidesMediaPerView325' => 2,
                ]
            ]);

            ?>

        </div>
