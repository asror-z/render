<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\dbitem\shop\SingleProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\cards\ZCard_1Widget;
use zetsoft\widgets\market\ZMSwiperWidget;

/** @var ZView $this */


?>


<div class="row">
    <div class="col-12 my-2 fp-18 p-4">

        <?

        //$items = Az::$app->market->product->allProducts(549);
        //$items = Az::$app->market->product->allProducts(547,1);

        $items=[];

        $item = new SingleProductItem();
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
        $item->sale = 'sdadsa';
        $item->is_multi = false;
        $item->in_wish = true;
        $item->in_compare = false;

        $items[]=$item;
        $items[]=$item;
        $items[]=$item;
        $items[]=$item;
        $items[]=$item;
        $items[]=$item;
        $items[]=$item;



        $slide_data = [];

        foreach ($items as $item) {

            $slide_data[] = $this->require( '/render/cards/ZMiniCardWidget/clean_3.php', [
                'item' => $item
            ]);
            if(\Dash\count($slide_data)===14) break;
        }


        echo ZMSwiperWidget::widget([
            'data' => $slide_data,
            'config' => [
                'slideWidget' => true,
                'slidesPerView' => 2,
                'pagination.el' => '',
                'slidesMediaPerView640' => 5,
                'slidesMediaPerView500' => 3,
                'slidesMediaPerView1024' => 7,
                'slidesMediaPerView325' => 2,
                'nextEl' => '.swiper-button-next',
                'prevEl' => '.swiper-button-prev',
                'swip-nor' => 'p-2',
            ]
        ]);

        ?>

    </div>

</div>


