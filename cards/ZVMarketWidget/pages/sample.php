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
        'https://banner2.cleanpng.com/20180408/pse/kisspng-iphone-7-plus-iphone-8-plus-iphone-6-plus-iphone-6-apple-iphone-5acabe75e909b9.3291402715232364699545.jpg',
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
    $item->is_multi = true;
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




$slide_data = [];
$type = 'new';
foreach ($items as $item) {
    $slide_data[] = $this->require( '/render/cards/ZVMarketWidget/Test/main.php', [
        'item' => $items,
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
        'slidesMediaPerView1024' => 4,
        'slidesMediaPerView325' => 2,
        'nextEl' => '.swiper-button-next',
        'prevEl' => '.swiper-button-prev',
        'swip-nor' => 'p-2',
        'height_class' => 'h-100',
        'loop' => false,
        'mousewheel' => false,
    ]
]);
