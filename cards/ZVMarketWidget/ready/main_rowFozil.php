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
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;

/** @var ZView $this */
if (!isset($type)) {
    $type = 'new';
}
if (!isset($id)) {
    $id = $this->myId();
}

if (!isset($item) || empty($item)) {
    $item = new ProductItem();
    $item->id = 2;
    $item->name = 'Арахис';
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
    $item->cart_amount = 3;
    $item->status = [];
    $item->discount = 5;

}

/*if ($item->cart_amount===null){
    $item->cart_amount=5;
}*/
$catalogId = $item->catalogId;
if (!isset($col)) {
    $col = 3;
}

if (!isset($isCommon)) {
    $isCommon = true;
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

<style>
    .card-icons-like {
        color: #666;
    }
    .card-icons-chart {
        color: #777;
    }
    .card-icons-like:hover {
        color: red;
    }
    .card-icons-chart:hover {
        color: #02d002;
    }
</style>




<div class="col-lg-<?= $item->is_multi ? '2' : '3' ?> col-sm-4 col-6 col-md-4 v-card pb-3 px-2 zcol">
    <div class="card w-80 v-card h-100 horizontal-vertical-card" data-product-id="<?= $item->id ?>"
         data-cart-amount="<?= $item->cart_amount ?>" style="box-shadow: 0 0 1px #00000059;
    border: 0;
    border-radius: 0;
    font-weight: 400;">
        <a href="<?= $item->url ?>" class="position-relative overflow-hidden zvertical-card"
           style='background-image: url("<?= ZArrayHelper::getValue($item->images, 0) ?>"); background-size: contain; background-position: center center; max-width: 215px;'>

            <!--           <img src="https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"-->
            <!--                  -->
            <? //= $item->url ?><!--class="h-110 w-100  position-relative overflow-hidden zvertical-card" alt="">-->
            <?
            //            vdd($item);
            if (is_array($item->status))
                if (in_array('sale', $item->status) && !empty($item->discount)):
                    ?>
                    <span style="right: 0; bottom: 2%"
                          class="position-absolute discount ml-auto danger-color p-1 mr-1 text-white rounded fe-08">
                  <?= $item->discount ?> %
                </span>
                <?
                endif;
            ?>
            <div class="position-absolute  d-flex">
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

                <? if (in_array(ProductItem::statuses['new'], $item->status)) { ?>
                    <span style="right: 0; top: 2%"
                          class="position-absolute ml-auto rounded-left green-bg-color p-1 mr-3 text-white rounded fe-08">
                  New
                </span>
                <? } ?>
            </div>


            <!-- <? /* if (!$item->is_multi) { */ ?>

            <? /* } elseif ((!$item->is_multi) && (in_array(ProductItem::statuses['new'], $item->status))) { */ ?>

                <span style="right: 0; top: 5%"
                      class="position-absolute ml-auto rounded-left green-bg-color p-1 mr-1 text-white rounded fe-08">
                  New
                </span>

                <span style="right: 2%; bottom : 70%"
                      class="position-absolute ml-auto danger-color p-1 mr-1 text-white rounded fe-08">
                  <? /*= $item->discount ? $item->discount : '' */ ?> %
                </span>
            --><? /* } //vdd($item->in_wish); */ ?>

        </a>

        <div class="card-body py-2 px-2 justify-content-between grey lighten-5" style="flex-direction: column">
            <div>
                <a href="<?= $item->url ?>" class="text-dark">
                    <div class="fp-15 flex-wrap">
                        <p style="
                width: 100%;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;">
                            <?= $string = substr($item->title, 0, 51) /*. '...'*/; ?>
                        </p>
                    </div>
                </a>
            </div>
            <div class="d-flex">
                <div class="w-100">
                    <div class=" d-flex align-items-center justify-content-between flex-sm-wrap flex-md-nowrap mb-1">

                        <div class="">
                            <?
                            echo ZKStarRatingWidget::widget([
                                'id' => 'rating_' . $id,
                                'name' => '',
                                'config' => [
                                    'show' => false,
                                    'icon' => '<i class="fas fp-10 fa-star"></i>',
                                    'value' => $item->rating,
                                ]
                            ]);


                            ?>
                        </div>

                        <div class="d-flex pt-2">
                            <a role="button" onclick="add_wish_list(<?= $item->id ?>, $(this), false)" class="d-flex mr-2">
                                <i class="far fa-heart fp-18 card-icons-like <?= $item->in_wish ? 'text-danger' : '' ?>"></i>
                            </a>
                            <? /*if($catalogId):*/ ?>

                            <a role="button" onclick="add_compare_list(<?= $item->id ?>, $(this), false)"
                               class="d-flex">
                                <i class="fa fa-chart-bar fp-18 card-icons-chart <?= $item->in_compare ? 'text-success' : '' ?>"></i>
                            </a>
                            <? /*endif;*/ ?>

                        </div>

                    </div>
                    <div class="text-white green accent-4 fp-14 rounded-pill" style="display: inline; padding: 2px 5px">
                        <?
                        if (!$item->is_multi)
                            echo number_format($item->new_price, 2, '.', ' ');
                        else {
                            echo number_format($item->min_price, 2, '.', ' ');
                            if ($item->max_price !== null)
                                echo ' - ' . number_format($item->max_price, 2, '.', ' ');
                            else
                                echo ' ';
                        }
                        ?>
                        <span class="text-white text-lowercase ml-2"><?= ' ' . $item->currency . '/' . $item->measure ?></span>
                        <? //vd($item->currency); ?>
                    </div>
                    <div>

                    </div>

                </div>
            </div>

            <div>

            </div>
        </div>

        <div class="mx-2 footer-main text-center">
            <? if (!$item->is_multi) : ?>
                <button id="add-card-<?= $item->id ?>"
                        class="w-100 mx-0  py-2 add-card btn button-bg-color text-white <?= $item->cart_amount > 0 ? "d-none" : "" ?>"

                        data-catalog-id="<?= $item->catalogId ?>"
                        onclick="addToCart($(this)"
                >
                    <?= Az::l('Добавить в корзину') ?>
                </button>

                <div id="input-<?= $item->id ?>" class="touch-main <?= $item->cart_amount > 0 ? " " : "d-none" ?>">
                    <div class="d-flex touch-main-children justify-content-center">
                        <div class="d-flex parent-clear w-75">
                            <?
                            echo ZKTouchSpinWidget::widget([
                                'name' => 'amount' . $item->id,
                                'id' => $item->id . $this->myId(),
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
