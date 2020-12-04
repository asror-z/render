<?php


use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZPriceFormatWidget1;
use zetsoft\widgets\market\ZSVGWidget;

/** @var ZView $this */

$id = $this->myId();

if (!isset($product)) {
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
    $item->cart_amount = 2;
    $item->max_price = 215612132;
}


if ($item->cart_amount === null)
    $item->cart_amount = 0;


if (!isset($isCommon))
    $isCommon = true;


?>
<?
$this->fileJs('/render/cards/ZVMarketWidget/asset/main1.js');
$this->fileJs('/render/cards/ZHCommonSaleWidget/asset/main.js');
$this->fileCss('/render/asrorz/css/horizontal_card.css');
?>
<div class="col-md-12 mt-2 zlist">
    <div class="card mb-3 horizontal-vertical-card" data-product-id="<?= $item->id ?>"
         data-cart-amount="<?= $item->cart_amount ?>">
        <div class="row no-gutters">
            <a href="<?= $item->url ?>" class="col-md-4 d-flex zhorizontal-card align-items-center"
               style='background-image: url("<?= $item->images[0] ?>")'>
                <div class="position-relative col-md-12 h-100">
                    <div class="p-2">
                        <? if (!$item->is_multi) { ?>
                            <span style="right: 2%; top: 4%"
                                  class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 mr-2 text-white rounded fe-10">
                        <?= $item->discount; ?> %
                        </span>
                        <? } ?>
                    </div>
                </div>
            </a>
            <div class="col-md-8">
                <div class="card-body">
                    <a href="<?= $item->url ?>" class="text-dark">
                        <span class="card-title fe-18"><?= $item->name ?></span>
                    </a>
                    <div class="d-flex justify-content-between">
                        <div class="green-text-color"><?= $item->exist ?><span
                                    class="text-muted ml-2 card-text"><?= Az::l('Артикул') ?>: <?= $item->barcode ?></span>
                            <div class="d-flex mt-3">
                                <div>
                                    <?
                                    echo ZSVGWidget::widget([
                                        'config' => [
                                            'type' => ZSVGWidget::type['top_sell']
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="mt-1">
                                    <?
                                    echo ZKStarRatingWidget::widget([
                                        'id' => 'rateing_' . $id,
                                        'name' => 'gggfg',
                                        'config' => [
                                            'show' => false,
                                            'value' => $item->rating
                                        ]
                                    ]);
                                    ?>
                                    <a href="<?= $item->url ?>#tab-3"
                                       class="text-center text-muted"><?= $item->reviewCount ?>
                                        <?= Az::l('отзыва') ?></a>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap card-text align-items-center mt-2">
                                <div class="d-flex">
                                    <a role="button" onclick="add_wish_list(<?= $item->id ?>, $(this), false)"
                                       class="d-flex">
                                        <i class="far fa-heart grey-text pr-1 ml-2 mb-3  h4 <?= $item->in_wish ? 'text-danger' : '' ?>"></i>
                                        <p class="ml-2"><?= Az::l('Избранное') ?></p>
                                    </a>

                                </div>
                                <div class="d-flex">
                                    <a role="button" onclick="add_compare_list(<?= $item->id ?>, $(this), false)"
                                       class="d-flex">
                                        <i class="fa fa-chart-bar grey-text pr-1 ml-4 mb-2 h4 <?= $item->in_compare ? 'text-success' : '' ?>"></i>
                                        <p class="ml-2"><?= Az::l('Сравнить') ?></p>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="ml-5 footer-main">

                            <div class="text-danger text-center mr-4">
                                <strike class="price-format"><? if (!$item->is_multi) { ?>
                                        <?= number_format($item->new_price, 2, '.', ' '); ?>
                                    <? } else {
                                        echo number_format($item->min_price, 2, '.', ' ');
                                        if ($item->max_price !== null)
                                            echo ' - ' . number_format($item->max_price, 2, '.', ' ');
                                        else
                                            echo '';
                                    } ?> <?= $item->currency ?></strike>
                            </div>

                            <div class="flex-wrap">
                                <div class="text-center text-success fe-18 font-weight-bold price-format"> <? if (!$item->is_multi) { ?>
                                        <?= number_format($item->new_price, 2, '.', ' '); ?>
                                    <? } else {
                                        echo number_format($item->min_price, 2, '.', ' ');
                                        if ($item->max_price !== null)
                                            echo ' - ' . number_format($item->max_price, 2, '.', ' ');
                                        else
                                            echo '';
                                    } ?>

                                </div>
                                <div class="text-center grey-text fe-16 mt-1 ml-1"><?= $item->currency ?> <?= Az::l('за') ?>
                                    1 <?= $item->measure ?></div>

                            </div>
                            <? if (!$item->is_multi && !$isCommon) : ?>
                                <button id="add-card-<?= $item->id ?>"
                                        class="w-100 mx-0 add-card btn button-bg-color text-white <?= $item->cart_amount > 0 ? 'd-none' : ' ' ?>"
                                        data-catalog-id="<?= $item->catalogId ?>">
                                    <?= Az::l('Добавить в корзину') ?>
                                </button>
                            <? endif; ?>
                            <div id="input-<?= $item->id ?>"
                                 class="touch-main <?= $item->cart_amount > 0 ? " " : "d-none" ?>">
                                <div class="d-flex justify-content-end">
                                    <div class="d-flex parent-clear w-75">
                                        <?
                                        echo ZKTouchSpinWidget::widget([
                                            'name' => 'amount' . $item->id . $this->myId(),
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
                                    <div class="v-card-clear-add" data-catalog-id="<?= $item->catalogId ?>">
                                        <?
                                        echo ZSVGWidget::widget([
                                            'config' => [
                                                'type' => 'basket_delete',
                                            ]
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
    </div>
</div>






