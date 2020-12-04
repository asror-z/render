<?php

/** @var ZView $this */

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;


$val = new ProductItem();
$val->id = 2;
$val->name = 'Арахисовая паста с медом 200г';
$val->title = 'Test Desc';
$val->new_price = '14825920';
$val->price_old = '188920';
$val->exist = ProductItem::exists['not'];
$val->images = [
    'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
    'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
    'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
];
$val->currency = 'сум';
$val->currencyType = 'after';
$val->discount = -10;
$val->catalogId = 19;
$val->max_price = 2155632;

if (!isset($categoryId)) {
    $categoryId = 550;
}

if (!isset($categoryName)) {
    $categoryName = 'Headphones';
}

if (!isset($categoryUrl)) {
    $categoryUrl = '';
}
if (!isset($products_num)){
    $products_num = 34000;
}



?>

<div  class="col-12 px-1">
    <a href="<?=$categoryUrl?>" class="text-dark">
        <div class="position-relative hoverable rgba-grey-slight rounded-lg">
            <div class="cards-status position-absolute d-flex align-items-center" style="right: 0; top: 7%">
                <i class="fas fa-bookmark text-success fp-24" style="transform: rotate(90deg)"></i><span
                    class="fp-12 success-color text-white pl-1 pr-2"><? echo Az::l('Популярное'); ?></span>
            </div>
            <div class="row">
                <div class="cards-container m-2 px-4 py-2 w-100">
                    <div class="cards-header mb-1 d-flex justify-content-between align-items-center">
                        <div class="cards-title">
                            <h4 class="fe-10 mb-0"><?= $categoryName ?></h4>
                            <p class="fe-08 mb-0 font-weight-light"><?=$products_num?> <?=Az::l(' товаров')?></p>
                        </div>
                    </div>
                    <div class="row">

                        <?php

                        $products = Az::$app->market->product->getTestProducts();
                        foreach (array_slice($products, 0, 2,) as $item) {
                            echo '<div class="col-6  px-2">';
                            echo $this->require( '/render/cards/ZVMarketWidget/ready/mainAbl.php', [
                                'item' => $item,
                            ]);
                            echo '</div>';
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </a>
</div>



