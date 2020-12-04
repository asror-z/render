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
    $item->max_price = 2155632;
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

            <div class="col-md-12">
                <div class="card shadow border">
                    <div class="p-2">
                        <div class="text-muted text-center fp-14"><?=Az::l('ПОПУЛЯРНОЕ ПРЕДЛОЖЕНИЕ')?></div>

                        <div class="fp-18 text-success">
                        <? echo $companyitem->name ?> S5
                        </div>
                        
                        <div class="font-weight-bold fp-20">$<?=$item->max_price?></div>
                        <div clas="">
                            <span><i class="fas fa-truck text-muted"></i></span>
                            <span class="text-success fp-14"><?=Az::l('Бесплатно курьером завтра')?>
                            </span>
                        </div>
                        <a href="#"><div class="text-muted font-weight-normal"><?=Az::l('Все варианты доставки')?></div></a>
                        <div class="row">
                            <span class="col-12 text-muted font-weight-normal">Цвет товара:красный </span>
                            <span class="text-muted ml-3"><?= $item->reviewCount?> отзывов</span>
                        </div>

                    </div>
                    
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success  d-flex p-15">В магазин</button>
                    </div>
                    <div class="d-flex justify-content-center border-top border-bottom">
                        <div class="d-flex">
                            <div><a href="#"  class="font-italic fp-26">Samsung</a></div>
                            <?
                            echo ZKStarRatingWidget::widget([
                                'name' => 'gggfg',
                                'config' => [
                                    'show' => false,
                                    'class'=> ''

                                ]
                            ]);
                            ?>

                        </div>
                    </div>
        



                </div>
            </div>
           
   

