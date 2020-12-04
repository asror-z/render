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
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZPriceFormatWidget;
use zetsoft\widgets\market\ZStarDobtcoWidget;
use zetsoft\widgets\market\ZSVGWidget;

if (!isset($product)) {

    /** @var ZView $this */

    $id = $this->myId();

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


}
    if(!isset($col)){
        $col=3;
    }

if($item->cart_amount===null)
    $item->cart_amount=0;

?>


  <style>
      .zvertical-card{
          background-size:  cover;
          background-repeat:  no-repeat;
          width: 100%;
          height: 100px;
      }
  </style>

    <div class="card" data-product-id="<?= $item->id ?>">


        <a href="<?=$item->url?>" class="overflow-hidden zvertical-card" style='background-image: url("<?=$item->images[0]?>")'>

        </a>

        <div class="card-body p-2">
            <div class="d-block">
                <a href="<?= $item->url?>" class="text-dark text-truncate">
                    <div class="fe-12 text-center text-truncate"><?= $item->name ?></div>
                </a>

            </div>
        </div>
    </div>



    



<script>
    if (<?= $item->cart_amount ?> > 0){
        $("#input-<?=$item->id?> input").val(<?= $item->cart_amount ?>);
    }
</script>




