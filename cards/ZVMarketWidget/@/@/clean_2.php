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
use zetsoft\widgets\market\ZStarDobtcoWidget;
use zetsoft\widgets\market\ZSVGWidget;

if (!isset($product)) {

    /** @var ZView $this */

    $id = $this->myId();

    $item = new ProductItem();
    $item->id = 2;
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
    if(!isset($col)){
        $col=3;
    }

if($item->cart_amount===null)
    $item->cart_amount=0;

?>

<?
$this->fileJs('/render/cards/ZVMarketWidget/asset/main1.js');
$this->fileCss('/render/asrorz/css/vertical_card.css');

?>
   
<div class="col-6 col-sm-4 col-md-<?=$col?> v-card my-2 zcol h-100" >

    <div class="card v-card h-100" data-product-id="<?= $item->id ?>">


    <a href="<?=$item->url?>" class="position-relative overflow-hidden zvertical-card" style='background-image: url("<?=$item->images[0]?>")'>
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
            <? } ?>
            <? if (in_array(ProductItem::statuses['new'], $item->status)) { ?>
                <div class="ml-auto green-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-5 pl-2 pr-4">
                    New
                </div>
            <? } ?>
        </div>
        <? if (!$item->is_multi) { ?>
            <span style="right: 2%; top: 4%"
                  class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 mr-2 text-white rounded fe-10">
                    <?= $item->discount?$item->discount:''?> %
                </span>
        <? } ?>
    </a>

    <div class="card-body">
        <div class="d-block">
            <a href="<?=$item->url?>" class="text-dark text-truncate">
                <div class="fe-12 text-truncate"><?= $item->name ?></div>
            </a>
            <div class="d-flex justify-content-end">

                <a role="button" onclick="add_wish_list(<?= $item->id ?>, $(this), false)" class="d-flex">
                    <i class="far fa-heart grey-text pr-1 ml-2 mb-3 mt-4 h4 <?= $item->in_wish ? 'text-danger' : '' ?>"></i>
                </a>
                <a role="button" onclick="add_compare_list(<?= $item->id ?>, $(this), false)" class="d-flex">
                    <i class="fa fa-chart-bar grey-text pr-1 ml-4 mb-2 mt-4 h4 <?= $item->in_compare ? 'text-success' : '' ?>"></i>
                </a>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div class="text-success fe-12"><?= $item->exist ?></div>
            <div class="text-muted card-text"><?= Az::l('Артикул') ?>: <?= $item->barcode ?></div>
        </div>

        <div class="d-flex justify-content-between">
            <div class="w-50">
                <div class="flex-wrap">
                    <? if ($item->currencyType == ProductItem::currencyType['before']) { ?>
                        <div class="text-muted d-flex align-items-center">
                            <? echo $item->currency ?>
                        </div>
                    <? } ?>
                    <div class="text-success h6">
                        <?

                        if (!$item->is_multi)
                            echo $item->new_price;
                        else {
                            echo $item->min_price;
                            if ($item->max_price !== null)
                                echo ' - ' . $item->max_price;
                            else
                                echo '';
                        }
                        ?>
                    </div>
                    <? if ($item->currencyType == ProductItem::currencyType['after']) { ?>
                        <div class="text-muted d-flex align-items-center">
                            <?= $item->currency ?> <?=Az::l('за')?> 1 <?= $item->measure ?>
                        </div>
                    <? } ?>
                </div>
                <? if (!$item->is_multi) { ?>
                    <div class="text-danger mt-n2">
                        <strike class="h5"><?= $item->price_old ?></strike>
                    </div>
                <? } ?>

            </div>


            <div class="card-text w-50">
                <?
                echo ZKStarRatingWidget::widget([
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

    <div class="mx-2 footer-main">
        <? if (!$item->is_multi) : ?>
            <button id="add-card-<?= $item->id ?>"
                    class="w-100 mx-0 add-card btn button-bg-color text-white <?= $item->cart_amount > 0 ? "d-none" : "" ?>"
                    data-catalog-id="<?= $item->catalogId ?>">
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
                                'buttonup_txt' => '<i class="fa fa-plus px-2"></i>',
                                'buttondown_txt' => '<i class="fa fa-minus px-2"></i>',
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
                    <div class="v-card-clear-add" data-catalog-id="<?= $item->catalogId ?>">
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
        <? endif; ?>
    </div>
</div>
</div>

<script>
    if (<?= $item->cart_amount ?> > 0){
        $("#input-<?=$item->id?> input").val(<?= $item->cart_amount ?>);
    }
</script>




