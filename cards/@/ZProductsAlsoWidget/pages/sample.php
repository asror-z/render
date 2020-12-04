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
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\market\ZMSwiperWidget;






/** @var ZView $this */
$id = $this->myId();


if (!isset($product)) {
    $item = new ProductItem();
    $item->id = 2;
    $item->name = 'Смартфон HONOR 30 Pro+ 8/256GB';
    $item->title = 'Test Desc';
    $item->new_price = '47 490';
    $item->price_old = '13 000';
    $item->barcode = '34234234';
    $item->exist = ProductItem::exists['not'];
    $item->images = [
        'https://png2.cleanpng.com/sh/250872e02e0090af741dca026cccf85f/L0KzQYm3VMA5N5Nvj5H0aYP2gLBuTflxcJDzfZ8CLYDvhcS0igBpd59qRao2cHz4g37wkPhwdpYyTp95bIX2Pbr3iP9vbV47RdN5cHzoPbr3iP9vbV46edVqYnW6RoK8g8FkOF86UKk9N0G2SIK8UsMzO2c5T6I5OEm0PsH1h5==/kisspng-iphone-7-plus-iphone-8-plus-iphone-6-plus-iphone-6-apple-iphone-5acabe7615c1c0.5874713815232364700891.png',
        'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
    ];
    $item->currency = '₽';
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
    $item->cart_amount=3;
    $item->categoryName='Мобильные телефоны';

    $items[] = $item;
    $items[] = $item;
    $items[] = $item;
    $items[] = $item;
    $items[] = $item;
    $items[] = $item;
    $items[] = $item;
    $items[] = $item;
    $items[] = $item;
}


if ($product===null) {
    $this->require('/render/cards/ZProductsAlsoWidget/empty/main.php');
}


  
$slide_data = [];
$type = 'new';

foreach ($product as $item) {
    $slide_data[] = $this->require( '/render/cards/ZProductsAlsoWidget/ready/card.php', [
        'item' => $item,
        'type' => $type
    ]);

}


echo ZMSwiperWidget::widget([
    'data' => $slide_data,
    'config' => [
        'slideWidget' => true,
        'slidesPerView' => 2,
        'pagination.el' => '',
        'slidesMediaPerView640' => 5,
        'slidesMediaPerView500' => 3,
        'slidesMediaPerView1024' => 8,
        'slidesMediaPerView325' => 2,
        'nextEl' => '.swiper-button-next',
        'prevEl' => '.swiper-button-prev',
        'swip-nor' => 'p-2',
        'height_class' => 'h-100',
        'loop' => false,
        'mousewheel' => false,
    ]
]);
