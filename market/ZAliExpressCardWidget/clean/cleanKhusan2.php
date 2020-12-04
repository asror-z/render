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
    .ali-card-icon {
        width: 20px;
        height: 20px;
    }
    .ali-card {
        border-radius: 10px;
        justify-content: space-between;
    }
    .ali-card-product-image {
        border-radius: 10px;
        width: 100%;
        height: 100px;
        overflow: hidden;
        position: relative;
    }
    .ali-card-product-image img {
        position: absolute;
        width: 100%;
        height: 100%;
        transition: .1s ease-in-out;
    }
    .ali-card-item-product:hover .ali-card-product-image img{
        transform: scale(1.2);
    }
    .ali-card-product {
        position: relative;
    }
</style>

<div class="container mt-2">
  <div class="row">
    <div class="col-6 ali-card bg-white rounded-lg">
      <div class="d-flex align-items-center my-2 p-0">
        <div class="ali-card-icon bg-success rounded-circle p-2 mr-1 d-flex justify-content-center align-items-center">
          <i class="fas fa-leaf text-white fp-12"></i>
        </div>
        <h2 class="m-0 fp-24">Новинки</h2>
      </div>

      <div class="row px-1">
        <div class="col-3 ali-card-item-product">
          <div class="p-1">
            <div class="row ali-card-product">
              <div class="ali-card-product-image">
                <img src="https://im0-tub-com.yandex.net/i?id=326cf7d5f796544beb1e435f21b12bc2&n=13" alt="">
              </div>
              <span class="ali-card-product-name fp-14">
                Lorem Ipsum
              </span>
              <span class="ali-card-product-current fp-10 indigo-text pb-2">
                99,9 USD/шт
              </span>
            </div>
          </div>
        </div>
        <div class="col-3 ali-card-item-product">
          <div class="p-1">
            <div class="row ali-card-product">
              <div class="ali-card-product-image">
                <img src="https://im0-tub-com.yandex.net/i?id=326cf7d5f796544beb1e435f21b12bc2&n=13" alt="">
              </div>
              <span class="ali-card-product-name fp-14">
                Lorem Ipsum
              </span>
              <span class="ali-card-product-current fp-10 indigo-text pb-2">
                99,9 USD/шт
              </span>
            </div>
          </div>
        </div>
        <div class="col-3 ali-card-item-product">
          <div class="p-1">
            <div class="row ali-card-product">
              <div class="ali-card-product-image">
                <img src="https://im0-tub-com.yandex.net/i?id=326cf7d5f796544beb1e435f21b12bc2&n=13" alt="">
              </div>
              <span class="ali-card-product-name fp-14">
                Lorem Ipsum
              </span>
              <span class="ali-card-product-current fp-10 indigo-text pb-2">
                99,9 USD/шт
              </span>
            </div>
          </div>
        </div>
        <div class="col-3 ali-card-item-product">
          <div class="p-1">
            <div class="row ali-card-product">
              <div class="ali-card-product-image">
                <img src="https://im0-tub-com.yandex.net/i?id=326cf7d5f796544beb1e435f21b12bc2&n=13" alt="">
              </div>
              <span class="ali-card-product-name fp-14">
                Lorem Ipsum
              </span>
              <span class="ali-card-product-current fp-10 indigo-text pb-2">
                99,9 USD/шт
              </span>
            </div>
          </div>
        </div>
    </div>
  </div>

</div>

