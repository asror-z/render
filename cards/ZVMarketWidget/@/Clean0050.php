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
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;


?>

<div class="card-group">
    <?php
    $product = Az::$app->market->product->allProducts();
    //vdd($product);
    $itemName = '';
    foreach ($product as $key => $value) :
        //$wish = Az::$app->market->product->inWish($value->id);
        //$compare = Az::$app->market->product->inCompare($value->id);
        $itemName = $value->name;
        if ($value->amount > 0) {    //itemAmount o'rniga exist
            $itemAmount = 'В наличии';
        } else {
            $itemAmount = 'Нет в наличии';
        }
        if (count($value->price) == 1) {   //o'zgartirdik
            $itemPrice = $value->price;
        } else {
            $itemMaxPrice = Max($value->price);
            $itemMinPrice = Min($value->price);
            $itemPrice = $itemMinPrice . ' - ' . $itemMaxPrice;
        };
        if (count($value->price_old) == 1) {
            $itemOldPrice = $value->price_old;
        } else {
            $itemMaxOldPrice = Max($value->price_old);
            $itemMinOldPrice = Min($value->price_old);
            $itemOldPrice = $itemMinOldPrice . ' - ' . $itemMaxOldPrice;
        }

        if (count($value->price) == 1) {
            $priceDifference = $itemOldPrice - $itemPrice;
            $discount = round($priceDifference / $itemOldPrice * 100);
        } else {
            $priceDifference = $itemMaxOldPrice - $itemMaxPrice;
            $discount = round($priceDifference / $itemMaxOldPrice * 100);
        }


        $itemImage = $value->images[0];
        $wishActive = $product->in_wish ? 'text-danger' : '';
        $itemProductId = $value->id;
        $compareActive = $compare ? 'text-success' : '';
        $id = $value->id;


        ?>
        <div class="card m-2 col-3 p-0">

            <div class="position-relative overflow-hidden">
                <div class="position-absolute p-2 d-flex">
                    <?
                    if (in_array(ProductItem::statuses['top_sell'], $product->status))
                        echo ZSVGWidget::widget([
                            'config' => [
                                'type' => ProductItem::statuses['top_sell']
                            ]
                        ]);
                    ?>

                    <div class="pl-3">
                        <?
                        if (in_array(ProductItem::statuses['free_delivery'], $product->status))
                            echo ZSVGWidget::widget([
                                'config' => [
                                    'type' => ProductItem::statuses['free_delivery']
                                ]
                            ]);
                        ?>
                    </div>
                </div>
                <span style="right: 2%; top: 4%"
                      class="<?= '' ?> position-absolute ml-auto danger-color pl-2 pr-2 py-2 mr-2 text-white rounded fe-10">
                <? echo $discount ?> %
                    <? if (in_array(ProductItem::statuses['new'], $product->status)) { ?>
                        <div style="right:-4%; top: 2%"
                             class="position-absolute ml-auto green-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-5 pl-2 pr-4">
                        New
                    </div>
                    <? } ?>

            </span>

                <img src="<? echo $itemImage ?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-title fe-12"><? echo $itemName ?></div>
                    <div class="d-flex mt-1">
                        <a role="button" class="heart" href="#" onclick="add_wish_list(<? echo $itemProductId ?>,
                                $(this))"><i class="far fa-heart grey-text mr-2 h5 <? echo $wishActive ?>"></i></a>
                        <a href="#" role="button"
                           onclick="add_compare_list(<? echo $itemProductId ?>, $(this),false)"><i class="fa fa-chart-bar grey-text h5 <? echo $compareActive ?>"></i></a>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="text-success fe-12"><? echo $itemAmount ?></div>
                    <div class="text-muted card-text"><!--Art: 34234234--></div>
                </div>
                
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="d-flex flex-wrap">
                            <? if($product->currencyType == ProductItem::currencyType['before']) {?>
                                <div class="text-muted d-flex align-items-center">
                                    <? echo $product->currency ?>
                                </div>
                            <? } ?>
                            <div class="text-success h4">
                                <?= $product->price ?>
                            </div>
                            <? if($product->currencyType == ProductItem::currencyType['after']) {?>
                                <div class="text-muted d-flex align-items-center">
                                    <?= $product->currency ?> за 1 <?= $product->measure ?>
                                </div>
                            <? } ?>
                        </div>
                        <div class="text-danger mt-n2"><strike class="h5"> <? echo $itemOldPrice ?></strike></div>
                    </div>
                    <div class="card-text">
                        <?
                        echo ZKStarRatingWidget::widget([
                            'name' => 'gggfg',
                            'config' => [
                                'value' => $product->rating,
                            ]
                        ]); ?>
                        <h6 class="card-text text-muted text-center"><a href="/"><?= $product->reviewCount ?> <?= Az::l('отзыва') ?></a></h6>
                    </div>
                </div>

                <div>

                </div>
            </div>
            <? if (!$product->is_multi) { ?>
                <button id="add-cart-<? echo $id ?>" class="btn button-bg-color text-white add-cart">
                    Добавить в корзину
                </button>
            <? } ?>

            <div id="input-<? echo $id ?>" class="touch-main d-none">
                <div class="d-flex justify-content-center">
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

                        ]);
                        ?>
                    </div>
                    <div id="basket-delete-<? echo $id ?>">
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
        <script>
            $('#add-cart-<? echo $id ?>').on("click", function () {
                $(this).addClass('d-none');
                var childTouch = $("#input-<? echo $id ?>");
                childTouch.removeClass("d-none");
                $('#input-<? echo $id ?> input').val(1);
                $.ajax({
                    url: '/core/product/setToCart.aspx',
                    method: 'GET',
                    data: {
                        catalog_id: <? echo $id ?>,
                        amount: 1,
                    },
                    success: function (data) {
                        $('#cart_total_amount').html(data);
                        console.log(data, $('#cart_total_amount').html(data))
                    },
                    error: function (error) {
                        console.log(error);
                    }
                })
            });


            $('#basket-delete-<? echo $id ?>').on("click", function () {
                var clear = $(this).parent(".parent-clear");
                var first = clear.children(".bootstrap-touchspin");
                var second = first.children(".clear-add-btn");
                $('#add-cart-<? echo $id ?>').removeClass("d-none");
                $('#input-<? echo $id ?>').addClass("d-none");
                second.val("");
                $('#input-<? echo $id ?> input').val(0);
                $.ajax({
                    url: '/core/product/setToCart.aspx',
                    method: 'GET',
                    data: {
                        catalog_id: <? echo $id ?>,
                        amount: 0,
                    },
                    success: function (data) {
                        $('#cart_total_amount').html(data);
                        console.log(data, $('#cart_total_amount').html(data))
                    },
                    error: function (error) {
                        console.log(error);
                    }
                })
            })
        </script>
    <?php

    endforeach;

    ?>
</div>



