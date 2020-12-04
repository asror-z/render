<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;

/** @var ZView $this */
$id = $this->httpGet('id');

//$product = Az::$app->market->product->allProducts(457, null, 0, 10, ['price', '-name']);



if (!isset($type)){
    $type='new';
}
if (!isset($item)  ) {

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
    $item->sale = 'sdadsa';
    $item->is_multi = false;
    $item->min_price = 'adssad';
    $item->in_wish = true;
    $item->in_compare = false;
    $item->cart_amount = 3;
    $item->status = [
        $type
    ];

}

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

<div class="mx-2 footer-main">
    <?

    if (!$item->is_multi && !$isCommon) : ?>
    <button id="add-card-<?= $item->id ?>"
            class="w-100 mx-0 add-card btn button-bg-color text-white <?= $item->cart_amount > 0 ? "d-none" : "" ?>"
            data-catalog-id="<?= $item->catalogId ?>"
            onclick="addToCart($(this))"
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
</div>
<? endif; ?>
</div>
