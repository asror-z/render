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
if (!isset($col)) {
    $col = 12;
}

if (!isset($type)) {
    $type = '';
}

if ($item->cart_amount === null)
    $item->cart_amount = 0;




?>

<style>
    .zvertical-card {
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 100px;
    }
</style>

<div class="col-12 col-sm-6 col-md-<?= $col ?> v-card pb-2 zcol h-100">
<div class="card h-100 w-100" data-product-id="<?= $item->id ?>">


    <a href="<?= $item->url ?>" class="position-relative overflow-hidden zvertical-card"
       style='background-image: url("<?= $item->images[0] ?>")'>
        <div class="position-absolute" style="right: -10%; top: 5%">
            <? if (in_array(ProductItem::statuses['sale'], $item->status) && $item->is_multi && $type === 'sale') { ?>
                <div class="ml-auto red-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-5 pl-2 pr-2">
                    <?= Az::l("Скидка") ?>
                </div>
            <? } ?>

            <? if (in_array(ProductItem::statuses['new'], $item->status) && $item->is_multi && $type === 'new') { ?>
                <div class="ml-auto green-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-5 pl-2 pr-2">
                    <?= Az::l("Новинка") ?>
                </div>

            <? } ?>
            <? if (in_array(ProductItem::statuses['sale'], $item->status) && in_array(ProductItem::statuses['new'], $item->status) && $type === 'sale new') { ?>
                <div class="ml-auto green-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-5 pl-2 pr-2">
                    <?= Az::l("Новинка") ?>
                </div>
                <div class="ml-auto red-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-5 pl-2 pr-2">
                    <?= Az::l("Скидка") ?>
                </div>
            <? } ?>
        </div>
    </a>

    <div class="card-body p-2">
        <div class="d-block">
            <a href="<?= $item->url ?>" class="text-dark text-truncate">
                <div class="fe-10 text-center text-truncate"><?= $item->name ?></div>
            </a>

        </div>

        <div class="d-flex justify-content-between">

        </div>

        <div class="d-flex justify-content-between">
            <div class="w-100">
                <div class="d-flex justify-content-center flex-wrap">
                    <div class="h6 fe-08 text-center text-success">
                        <? if ($item->currencyType == ProductItem::currencyType['before']) { ?>
                            <? echo $item->currency ?>
                        <? } ?>
                        <?

                        if (!$item->is_multi)
                            echo number_format($item->new_price, 2, '.', ' ');
                        else {
                            echo number_format($item->min_price, 2, '.', ' ');;
                            if ($item->max_price !== null)
                                echo ' - ' . number_format($item->max_price, 2, '.', ' ');
                            else
                                echo '';
                        }
                        ?>
                        <? if ($item->currencyType == ProductItem::currencyType['after']) { ?>
                            <?= $item->currency ?> <?= Az::l('за') ?> 1 <?= $item->measure ?>

                        <? } ?>

                    </div>

                </div>


            </div>

        </div>

        <div>

        </div>
    </div>

    <div class="mx-2 footer-main">
        <? if (!$item->is_multi) : ?>
       <!--     <button id="add-card-<?/*= $item->id */?>"
                    class="w-100 mx-0 add-card btn button-bg-color btn-sm text-white <?/*= $item->cart_amount > 0 ? "d-none" : "" */?>"
                    onclick="addToCart($(this))"
                    data-catalog-id="<?/*= $item->catalogId */?>">
                <?/*= Az::l('В корзину') */?>
            </button>-->

           <!-- <div id="input-<?/*= $item->id */?>" class="touch-main <?/*= $item->cart_amount > 0 ? " " : "d-none" */?>">
                <div class="d-flex touch-main-children justify-content-center pb-1">
                    <div class="d-flex parent-clear w-100">
                        <?/*
                        echo ZKTouchSpinWidget::widget([
                            'name' => 'asds',
                            'config' => [
                                'min' => '0',
                                'buttonup_txt' => '<i class="fa fa-plus px-2"></i>',
                                'buttondown_txt' => '<i class="fa fa-minus px-2"></i>',
                                'buttonup_class' => 'btn btn-success fp-18 rounded-right p-1 btn-sm',
                                'buttondown_class' => 'btn btn-success fp-18 rounded-left p-1 btn-sm',
                                'class' => 'text-center p-0 h-75 clear-add-btn',
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
                        */?>
                    </div>
                    <div class="v-card-clear-add" onclick="deleteFromCart($(this))"
                         data-catalog-id="<?/*= $item->catalogId */?>">
                        <?/*
                        echo ZSVGWidget::widget([
                            'config' => [
                                'type' => 'basket_delete',
                                'width_basket' => 30,
                                'height_basket' => 20,
                            ]
                        ])
                        */?>
                    </div>
                </div>
            </div>-->
        <? endif; ?>
    </div>
</div>
</div>

<script>
    if (<?= $item->cart_amount ?> >
    0
    )
    {
        $("#input-<?=$item->id?> input").val(<?= $item->cart_amount ?>);
    }
</script>




