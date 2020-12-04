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
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-4">
            <div class="container-fluid position-relative rgba-stylish-slight rounded-lg">
                <div class="cards-status position-absolute d-flex align-items-center" style="right: 0; top: 7%">
                    <i class="fas fa-bookmark lime-text fp-24" style="transform: rotate(90deg)"></i><span class="fp-12 lime pl-1 pr-2"><?= Az::l('Популярное'); ?></span>
                </div>
                <div class="row">
                    <div class="cards-container m-3">
                        <div class="cards-header mb-1 d-flex justify-content-between align-items-center">
                            <div class="cards-title">
                                <h4 class="fe-10 mb-0"><?= $item->categoryName; ?></h4>
                                <p class="fe-08 mb-0 font-weight-light">3958178 просматривают</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <?
                                    echo $this->require( '/render/cards/ZMiniCardWidget/clean_3.php', [
                                        'item' => $item
                                    ]);
                                ?>
                            </div>
                            <div class="col-4">
                                <?
                                    echo $this->require( '/render/cards/ZMiniCardWidget/clean_3.php', [
                                        'item' => $item
                                    ]);
                                ?>
                            </div>
                            <div class="col-4">
                                <?
                                    echo $this->require( '/render/cards/ZMiniCardWidget/clean_3.php', [
                                        'item' => $item
                                    ]);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

