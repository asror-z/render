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
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inptest\ZRatyStarWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZPriceFormatWidget1;
use zetsoft\widgets\market\ZStarDobtcoWidget;
use zetsoft\widgets\market\ZSVGWidget;

/** @var ZView $this */
$id = $this->myId();


if (!isset($product)) {
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
    $item->cart_amount=3;
}

if (!isset($col)) {
    $col = 12;
}

if ($item->cart_amount === null) {
    $item->cart_amount = 0;
}
?>

<?
$this->fileJs('/render/cards/ZVMarketWidget/asset/main1.js');
$this->fileJs('/render/cards/ZHCommonSaleWidget/asset/main.js');
$this->fileCss('/render/asrorz/css/vertical_card.css');

?>
<div class="col-12 col-sm-6 col-md-<?= $col ?> v-card pb-2 zcol h-100">
<!--<div class="col-md-<?/*= $col */?> v-card my-2 zcol h-100">-->

      <div class="card v-card h-100 horizontal-vertical-card" data-product-id="<?= $item->id ?>" data-cart-amount="<?=$item->cart_amount?>">


          <a href="<?= $item->url ?>" class="position-relative overflow-hidden zvertical-card"
             style='background-image: url("<?= $item->images[0] ?>");'>
              <div class="position-absolute p-2 d-flex">
                  <?
                  if (in_array(ProductItem::statuses['top_sell'], $item->status))
                      echo ZSVGWidget::widget([
                          'config' => [
                              'type' => ProductItem::statuses['top_sell']
                          ]
                      ]);
                  ?>

                  <div class="pl-3">
                      <?
                      if (in_array(ProductItem::statuses['free_delivery'], $item->status))
                          echo ZSVGWidget::widget([
                              'config' => [
                                  'type' => ProductItem::statuses['free_delivery']
                              ]
                          ]);
                      ?>
                  </div>

              </div>
              <div class="position-absolute" style="right: -5%; top: 5%">

                  <? if (in_array(ProductItem::statuses['sale'], $item->status) && ($item->is_multi)) { ?>
                      <div class="ml-auto red-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-5 pl-2 pr-4">
                          Sale
                      </div>
                      <? /* } */ ?>


                  <? } elseif ((in_array(ProductItem::statuses['sale'], $item->status)) && (in_array(ProductItem::statuses['new'], $item->status))) { ?>
                      <div class="ml-auto green-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-5 pl-2 pr-4">
                          New
                      </div>
                  <? } ?>
              </div>
              <? /* if (in_array(ProductItem::statuses['new'], $item->status)) { */ ?><!--
                <div class="ml-auto green-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-5 pl-2 pr-4">
                    New
                </div>
                --><? /* } */ ?>

              <? if (!$item->is_multi) { ?>
                  <span style="right: 0; bottom: 2%"
                        class="position-absolute ml-auto danger-color p-1 mr-1 text-white rounded fe-08">
                  <?= $item->discount ? $item->discount : '' ?> %
                </span>  <? /* } */ ?>
              <? } elseif ((!$item->is_multi) && (in_array(ProductItem::statuses['new'], $item->status))) { ?>

                  <div class="ml-auto green-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-5 pl-2 pr-4">
                      New
                  </div>

                  <span style="right: 2%; bottom : 4%"
                        class="position-absolute ml-auto danger-color p-1 mr-1 text-white rounded fe-08">
                  <?= $item->discount ? $item->discount : '' ?> %
                </span>
              <? } //vdd($item->in_wish); ?>

          </a>

          <div class="card-body p-3">
              <div class="d-flex justify-content-between align-items-start">
                  <a href="<?= $item->url ?>" class="text-dark text-truncate">
                      <div class="fe-12 text-truncate"><?= $item->name ?></div>
                  </a>
                  <div class="d-flex align-items-start">
                      <a role="button" onclick="add_wish_list(<?= $item->id ?>, $(this), false)" class="d-flex">
                          <i class="far fa-heart grey-text pr-1 mr-2 h4 <?= $item->in_wish ? 'text-danger' : '' ?>"></i>
                      </a>
                      <a role="button" onclick="add_compare_list(<?= $item->id ?>, $(this), false)" class="d-flex">
                          <i class="fa fa-chart-bar grey-text pr-1 h4 <?= $item->in_compare ? 'text-success' : '' ?>"></i>
                      </a>
                  </div>
              </div>

              <div class="d-flex justify-content-between">
                  <div class="text-success fe-12"><?= $item->exist ?></div>
                  <div class="text-muted card-text"><?= Az::l('Артикул') ?>: <?= $item->barcode ?></div>
              </div>
              <div class="d-flex justify-content-between">
                  <div class="w-75">
                      <div class="d-flex align-items-end flex-wrap">
                          <? if ($item->currencyType == ProductItem::currencyType['before']) { ?>
                              <div class="text-muted d-flex">
                                  <? echo $item->currency ?>
                              </div>
                          <? } ?>
                          <div class="text-success fr-1">
                              <?
                              if (!$item->is_multi)
                                  echo number_format($item->new_price, 2, '.', ' ');
                              else {
                                  echo number_format($item->min_price, 2, '.', ' ');
                                  if ($item->max_price !== null)
                                      echo ' - ' . number_format($item->max_price, 2, '.', ' ');
                                  else
                                      echo '';
                              }
                              ?>
                          </div>
                          <? if ($item->currencyType == ProductItem::currencyType['after']) { ?>
                              <div class="text-muted d-flex align-items-center">
                                  <?= $item->currency ?> <?= Az::l('за') ?> 1 <?= $item->measure ?>
                              </div>
                          <? } ?>
                      </div>
                      <? if (!$item->is_multi) { ?>
                          <div class="text-danger mt-2">
                              <strike class="h6"><?= number_format($item->price_old, 2, '.', ' '); ?></strike>
                          </div>
                      <? } ?>

                  </div>


                  <div class="float-right">
                      <?
                      echo ZKStarRatingWidget::widget([
                          'id' => 'rating_' . $id,
                          'name' => 'gggfg',
                          'config' => [
                              'show' => false,
                              'value' => $item->rating,
                          ]
                      ]);


                      ?>

                      <h6 class="card-text text-muted text-center">
                          <a href="/"><?= $item->reviewCount ?>
                              <?= Az::l('отзыва') ?>
                          </a>
                      </h6>
                  </div>
              </div>

              <div>

              </div>
          </div>


      </div>
  </div>


</div>



