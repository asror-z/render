<?php


use zetsoft\dbitem\shop\CompanyCardItem;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;
/** @var ZView $this */

$id = $this->myId();
 if (!isset($companyitem)){
 $companyitem=new CompanyCardItem();
 $companyitem->name= 'Samsung';
 }

if (!isset($item)) {
    $item = new ProductItem();
    $item->id = 19;
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
    $item->max_price = 99000;
    $item->sale = 'sdadsa';
    $item->is_multi = false;
    $item->min_price = 'adssad';
    $item->in_wish = true;
    $item->in_compare = false;
}







?>

<?
$this->fileJs('/render/cards/ZVMarketWidget/asset/main2.js');


?>

            <div class="col-md-12 mt-1">
                <div class="card shadow-sm border">
                    <div class="ml-4 py-1">
                        <div class="fp-25 text-success">
                        <? echo $companyitem->name ?> S5
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="align-items-center">
                                <del><div class="text-muted mb-0 font-weight-bolder">$<?=$item->max_price?></div></del>
                            </div>
                            <div class="align-items-center">
                                <span class="rounded-left badge badge-danger ml-2 ">-9%</span>
                            </div>
                        </div>
                        <div class="font-weight-bold fp-26">$<?=$item->max_price?></div>
                        <div clas="">
                            <span><i class="fas fa-truck text-muted"></i></span>
                            <span class="text-success fp-14"><?=Az::l('Бесплатно курьером завтра')?>
                            </span>
                        </div>
                        <a href="#"><div class="text-muted font-weight-normal"><?=Az::l('Все варианты доставки')?></div></a>

                        <!--<div class="text-muted font-weight-light"><i class="far fa-credit-card"></i> <?/*=Az::l('Картой/Наличными')*/?>
                        </div>-->
                        <div class="row">
                            <span class="col-12 text-muted font-weight-normal">Цвет товара: <span>красный</span>  </span>
                            <span class="col-12 text-muted font-weight-normal">100 человек купили этот товар</span>
                        </div>

                    </div>

                    <div class="d-flex justify-content-center">
                        <?
                        echo ZKStarRatingWidget::widget([
                            'name' => 'gggfg',
                            'config' => [
                                'show' => false,
                                'class'=> ''

                            ]
                        ]);
                        ?>
                        <span class="text-muted ml-2"><?= $item->reviewCount?> отзывов</span>
                    </div>
                   


                    <div class="">
                        <div class="mx-2 footer-main">

                            <button id="add-card-<?= $item->id ?>"
                                    class="w-100 mx-0 add-card btn btn-success <?= $item->cart_amount > 0 ? "d-none" : "" ?>"
                                    data-catalog-id="<?= $item->catalogId ?>"
                                    onclick="addToCart($(this))">
                                <?= Az::l('Добавить в корзину') ?>
                            </button>

                            <div id="input-<?= $item->id ?>" class="touch-main <?= $item->cart_amount > 0 ? " " : "d-none" ?>">
                                <div class="d-flex touch-main-children justify-content-center">
                                    <div class="d-flex parent-clear w-75">
                                        <?
                                        echo ZKTouchSpinWidget::widget([
                                            'name' => 'asds',
                                            'config' => [
                                                'min' => '0',
                                                'buttonup_txt' => '<i class="fas fa-plus px-2"></i>',
                                                'buttondown_txt' => '<i class="fas fa-minus px-2"></i>',
                                                'buttonup_class' => 'btn btn-success fp-18 rounded-right p-1',
                                                'buttondown_class' => 'btn btn-success fp-18 rounded-left p-1',
                                                'class' => 'text-center clear-add-btn',
                                                'initVal' => '1'
                                            ],
                                            'event' => [
                                                'startupspin' => <<<JS
                                    function(){
                                     spinUp($item->id,$item->catalogId);
                                    }
JS,
                                                'startdownspin' => <<<JS
                                    function(){
                                     spinDown($item->id,$item->catalogId);
                                    }
JS,
                                            ]

                                        ]);
                                        ?>
                                    </div>
                                    <div class="v-card-clear-add" data-catalog-id="<?= $item->catalogId ?>"
                                         onclick="deleteFromCart($(this))">
                                        <?
                                        echo ZSVGWidget::widget([
                                            'config' => [
                                                'type' => 'basket_delete',
                                            ]
                                        ])
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

        



                </div>
            </div>
           
   

