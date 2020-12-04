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
    }
    .brand-card-product-list-image li img:hover {
        transform: translateY(-5px);
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
    <div class="col-6 brand-card white">
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
      <div class="col-12 col-lg-6">
          <div class="container-fluid h-100 hoverable grey lighten-5 rounded-lg">
              <div class="ali-card-header pt-3 d-flex justify-content-between align-items-center">
                  <div class="d-flex pl-1 pr-2">
                        <span class="yellow lighten-1 rounded-circle py-1 px-2 d-flex justify-content-center align-items-center mr-2">
                            <i class="fas fa-store text-white"></i>
                        </span>
                      <span class="fp-24 text-bold">
                            <?= Az::l('Магазины для вас'); ?>
                        </span>
                  </div>
                  <span class="fp-14 pl-1 pr-2">
                        <a class="text-muted" href="#">
                            <?= Az::l('Смотреть ещё'); ?>
                        </a>
                    </span>
              </div>
              <div class="ali-card-body mt-2 p-2">
                  <div class="row">
                      <div class="col-6">
                          <div class="container px-1">
                              <a class="row" href="#">
                                  <div class="col-8 px-1">
                                      <div class="ali-card-body-image">
                                          <img class="w-100 rounded-left" src="https://betterstudio.com/wp-content/uploads/2019/05/1-1-instagram-1024x1024.jpg" alt="img">
                                      </div>
                                  </div>
                                  <div class="col-4 px-1">
                                      <div class="h-50">
                                          <img class="w-100 rounded-right" src="https://betterstudio.com/wp-content/uploads/2019/05/1-1-instagram-1024x1024.jpg" alt="img">
                                      </div>
                                      <div class="h-50 mt-1">
                                          <img class="w-100 rounded-right" src="https://betterstudio.com/wp-content/uploads/2019/05/1-1-instagram-1024x1024.jpg" alt="img">
                                      </div>
                                  </div>
                              </a>
                          </div>
                          <div class="container my-2 px-0">
                              <a class="row align-items-center text-dark" href="#">
                                  <div class="col-3 pr-0">
                                      <div class="ali-card-brand-img">
                                          <img class="w-100 rounded" src="/render/market/ZAliExpressCardWidget/asset/nike.jpg" alt="brand">
                                      </div>
                                  </div>
                                  <div class="col-9">
                                      <div class="ali-card-brand-title fe-11">
                                          Beidao Glasses Store
                                      </div>
                                      <div class="ali-card-brand-description fp-12 amber lighten-4 d-inline py-1 px-2 rounded-pill deep-orange-text">
                                          Повседневный стиль
                                      </div>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="container px-1">
                              <a class="row" href="#">
                                  <div class="col-8 px-1">
                                      <div class="ali-card-body-image">
                                          <img class="w-100 rounded-left" src="https://betterstudio.com/wp-content/uploads/2019/05/1-1-instagram-1024x1024.jpg" alt="img">
                                      </div>
                                  </div>
                                  <div class="col-4 px-1">
                                      <div class="h-50">
                                          <img class="w-100 rounded-right" src="https://betterstudio.com/wp-content/uploads/2019/05/1-1-instagram-1024x1024.jpg" alt="img">
                                      </div>
                                      <div class="h-50 mt-1">
                                          <img class="w-100 rounded-right" src="https://betterstudio.com/wp-content/uploads/2019/05/1-1-instagram-1024x1024.jpg" alt="img">
                                      </div>
                                  </div>
                              </a>
                          </div>
                          <div class="container my-2 px-0">
                              <a class="row align-items-center text-dark" href="#">
                                  <div class="col-3 pr-0">
                                      <div class="ali-card-brand-img">
                                          <img class="w-100 rounded" src="/render/market/ZAliExpressCardWidget/asset/nike.jpg" alt="brand">
                                      </div>
                                  </div>
                                  <div class="col-9">
                                      <div class="ali-card-brand-title fe-11">
                                          Beidao Glasses Store
                                      </div>
                                      <div class="ali-card-brand-description fp-12 amber lighten-4 d-inline py-1 px-2 rounded-pill deep-orange-text">
                                          Повседневный стиль
                                      </div>
                                  </div>
                              </a>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>

  </div>
</div>

