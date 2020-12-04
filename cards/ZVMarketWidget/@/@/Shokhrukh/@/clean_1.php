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
use zetsoft\widgets\market\ZSVGWidget;

///core/tester/asror/main.aspx?path=render/cards/ZVMarketWidget/demo/Shokhrukh/clean_1.php


$items = Az::$app->market->product->allProducts(549);
//vdd($items);
if (!isset($items)) {
    /** @var ZView $this */


    $item = new ProductItem();
    $item->name = 'Арахисовая паста с медом 200г';
    $item->title = 'Test Desc';
    $item->new_price = '148920';
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
}


?>


<?
$this->fileJs('/render/cards/ZVMarketWidget/asset/main.js');
?>


<div class="card-group">
    <?php

        foreach ($items as $item){
            if(true){
              echo $this->require('/render/cards/ZVMarketWidget/demo/Shokhrukh/a.php', [
              'item'=>$item,
             
              ]);
            }}
    ?>

</div>



<script>
    //$('#add-card-<?//=$id ?>//').on("click", function () {
    //    addCard('<?//= $id ?>//');
    //});
    //
    //$('#basket-delete-<?//=$id ?>//').on("click", function () {
    //    basketDelete('<?//=$id ?>//');
    //})
</script>



