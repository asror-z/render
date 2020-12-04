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
use zetsoft\widgets\inputes\ZHorizontalTouchSpinWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;

if (!isset($product)) {

    /** @var ZView $this */

    $id = $this->myId();

    $item = new ProductItem();
    $item->id = 2;
    $item->name = 'Арахисовая паста с медом 200г';
    $item->price = '148920';


    $item->images ='https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500';


    $item->currency = 'сум';
    $item->currencyType = 'after';
    $item->measure = 'шт';
    $item->max_price = 21564532;


}
?>

<?php
//$this->fileJs('/render/cards/ZVMarketWidget/asset/main1.js');
?>

<div class="card text-center p-2 {cardclass}">
    <div class="image "></div>
    <div class="card-body p-">
        <div class="fe-10 text-truncate"><?=$item->name?></div>
        <h5><?= $item->new_price ?></h5><br>
        <button type="button"  toAjax="<?=$item->catalogId?>" class="btn btn-success add-card add-card-<?=$item->id?> p-2 px-3"><?
            echo ZSVGWidget::widget([
                'config' => [
                    'type' => 'mini_basket',
                ]
            ])
            ?></button>
        <div id="input-<?= $item->id ?>" class="touch-main <?= $item->cart_amount > 0 ? " " : "d-none" ?>">
            <div class="touch-main-children d-flex justify-content-end align-items-center">
                <div class="w-25">
                    <?
                    echo ZHorizontalTouchSpinWidget::widget([
                    ])
                    ?>
                </div>
                <div>
                    <button class="btn p-0 shadow-none clear-card-<?=$item->id?>" toAjax="<?=$item->catalogId?>"
                            onclick="clearCard(<?=$item->id?>)">
                        <?
                        echo ZSVGWidget::widget([
                            'config' => [
                                'type' => 'basket_delete',
                            ]
                        ])
                        ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>




<style>

    .image {
        background-image: url("<?=$item->images[0]?>");
        width: 100%;
        height: 140px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>

<script>

        $(document).ready(function () {
            /*function addCard(){
                $(this).addClass('d-none');
                var spin = $(this).prev('.touch-main');
                /!*var childTouch = parent.siblings(".touch-main");
                var second = childTouch.children('.touch-main-children').children('.parent-clear').children('.bootstrap-touchspin').children('.clear-add-btn');*!/
                spin.removeClass("d-none");
                second.val(1);
                //var catalogId = $('.add-card-'+id).attr('toAjax');
                //console.log($('.add-card-'+id))
                $.ajax({
                    url: '/core/product/setToCart.aspx',
                    method: 'GET',
                    data: {
                        catalog_id: catalogId,
                        amount: 1,
                    },
                    success: function (data) {
                        $('#cart_total_amount').html(data);

                    }
                    ,
                    error: function (error) {
                        console.log(error);
                    }
                })
            }*/
            $('.add-card').on("click", function () {
                $(this).addClass('d-none');
                var spin = $(this).next('.touch-main');
                spin.removeClass('d-none');
            })


            function clearCard(id) {
                let add_cart = $('.add-card-'+id);
                var zero = $('#input-'+id);
                $(add_cart).removeClass("d-none");
                $(zero).addClass("d-none");
                $(add_cart).removeClass("d-none");

                var catalogId = $('.clear-card-'+id).attr('toAjax');

                console.log($('.clear-card-'+id));
                $.ajax({
                    url: '/core/product/setToCart.aspx',
                    method: 'GET',
                    data: {
                        catalog_id: catalogId,
                        amount: 0,
                    },
                    success: function (data) {
                        $('#cart_total_amount').html(data);
                        console.log(data, $('#cart_total_amount').html(data))
                    }
                    ,
                    error: function (error) {
                        console.log(error);
                    }
                })



            }
        })


      


</script>











