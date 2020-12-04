<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kcfinder\type_img;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;
use zetsoft\widgets\market\ZTabItemWidget;

?>

<div class="card-group">

<?php
$product = Az::$app->market->product->allProducts(35);
vdd($product);
$item = '';
foreach ($product as $key => $value) :
    $item = $value->name;
    if($value->amount > 0){
        $amount = 'В наличии';
    } else {
        $amount = 'Нет в наличии';
    }


?>

        <div class="card m-2">
            <div class="position-relative overflow-hidden">
                <div class="position-absolute ml-1 mt-1">
                    <?
                    echo ZSVGWidget::widget([
                        'config' => [
                            'type' => ZSVGWidget::type['top_sell']

                        ]
                    ]);
                    ?>
                </div>
                <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
            </div>


            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="fe-12"><? echo $item ?></div>
                    <div class="d-flex mt-1">
                        <i class="far fa-heart grey-text mr-2 h5"></i>
                        <i class="fa fa-chart-bar grey-text h5"></i>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="text-success fe-12"><? echo $amount?></div>
                    <div class="text-muted card-text">Art: 34234234</div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="">
                        <div class="d-flex flex-wrap"><div class="text-success h4">14,890</div><div class="text-muted d-flex align-items-center">сум. за 1 шт</div></div>
                    </div>


                    <div class="card-text">
                        <?
                        echo ZKStarRatingWidget::widget([
                            'name' => 'gggfg',
                            'config' => [
                                'show' => false
                            ]
                        ]); ?>
                        <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
                    </div>
                </div>

                <div>

                </div>
            </div>
            <button class="btn btn-success add-cart">Добавить в корзину</button>
            <div class="touch-main d-none">
                <div class="d-flex justify-content-center">
                    <div class="d-flex parent-clear w-75">
                        <?
                        echo ZKTouchSpinWidget::widget([
                            'name' => 'asds',

                            'config'=> [
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



<?php

endforeach;

?>
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


