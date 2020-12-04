<?php

/** @var ZView $this*/

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

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
$item->categoryName = 'Headphones';

?>
<style>
    body {
        background: #f1f1f1;
    }
    .brand-card {
        border-radius: 10px;
        justify-content: space-between;
    }
    .brand-card-product-image {
        background-image: url("https://im0-tub-com.yandex.net/i?id=326cf7d5f796544beb1e435f21b12bc2&n=13");
        background-origin: border-box;
        background-position: center;
        background-size: cover;
        border-radius: 10px;
        width: 100%;
        height: 200px;
        overflow: hidden;
    }
    .brand-card-product {
        position: relative;
    }
    .brand-card-product-list-image {
        position: absolute;
        transform: translateY(85px);
        transition: .2s ease-in-out;
        opacity: 0;
        bottom: 0;
        left: 5px
    }
    .brand-card-product-list-image li {
        position: relative;
        list-style: none;
        margin: 0 2px;
        width: 70px;
        height: 70px;
    }
    .brand-card-product-list-image li img {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 10px;
        cursor: pointer;
        transition: .1s ease-in-out;
        opacity: .8;
    }
    .brand-card-product-list-image li img:hover {
        transform: translateY(-5px);
        opacity: 1;
    }
    .brand-card-product-name {
        line-height: 20px;
    }
    .brand-card-product:hover .brand-card-product-list-image {
        opacity: 1;
        transform: translateY(10px);
    }
</style>

<div class="container mt-2">
  <div class="row">
    <div class="col-6 p-2">
      <div class="row col-12 brand-card white">
        <div class="col-12 brand-card-title d-flex align-items-center px-0 py-3">
          <div class="brand-card-title-icon deep-purple darken-4 d-flex align-items-center justify-content-center" style="padding: 7px 6px;
    border-radius: 50%;">
            <i class="fas fa-gem text-white fp-13"></i>
          </div>
          <h2 class="text-dark fp-24 my-0 ml-1">Бренд-фокус</h2>
        </div>
        <div class="row col-xl-6 brand-card-product">
          <div class="col-12 brand-card-product-image p-0">
            <ul class="brand-card-product-list-image d-flex p-0">
              <li class="brand-card-product-item-image">
                <img src="https://pbs.twimg.com/media/EKyydDRWsAAIKcb.jpg" alt="">
              </li class="brand-card-product-item-image">
              <li>
                <img src="https://maiso.ru/files/user/50697/board/naushniki-beats-solo-3-wireless.jpg" alt="">
              </li>
              <li class="brand-card-product-item-image">
                <img src="https://pbs.twimg.com/media/DqhOrlmW4AE-_ER.jpg" alt="">
              </li>
            </ul>

          </div>
          <span class="col-12 brand-card-product-name fp-21 px-0 pt-2">
        Lorem Ipsum
      </span>
          <span class="col-12 brand-card-product-current fp-14 px-0 indigo-text pb-2">
        99,9 USD/шт
      </span>
        </div>
      </div>
    </div>
  </div>
</div>

