<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;

/** @var ZView $this */
 $items = Az::$app->market->product->getAllProductsByCompany(57, 550);
$item  = $items[0];




?>


        <div class="col-12 col-sm-6 col-md-4 col-xl-3 card-mini my-2">
            <div class="card text-center">
                <img src="https://makromarket.uz/storage/product/Coca-cola5371_20.jpg" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5 class="card-title"><?= $item->name?></h5>
                    <h1><?= $item->new_price?> so'm</h1><br>
                    <button type="button" class="btn btn-success add-cart">
                        <i class="fas fa-cart-plus fa-3x"></i>
                    </button>
                    <div class="touch-main d-none">
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

                                    ]
                                ]);
                                ?>
                            </div>
                            <div>
                                <?php
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
        
        <script>
            $(document).ready(function () {
                $('.add-cart').on("click", function () {
                    $(this).addClass('d-none');
                    /*var parent = $(this).parent('.footer-main');*/
                    var childTouch = $(".touch-main");
                    childTouch.removeClass("d-none");
                    $('.touch-main input').val(1);
                });
            });

            $(document).ready(function () {
                $('.clear-add').on("click", function () {
                    var clear = $(this).parent(".parent-clear");
                    var first = clear.children(".bootstrap-touchspin");
                    var second = first.children(".clear-add-btn");
                    $('.add-cart').removeClass("d-none");
                    $('.touch-main').addClass("d-none");
                    second.val("");
                    $('.touch-main input').val(0);
                })

            })

         
        </script>

