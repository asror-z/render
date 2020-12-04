<?php


use zetsoft\system\Az;
use zetsoft\widgets\cards\ZHorizontalWidget;
use zetsoft\widgets\cards\ZHorizontalWidgetUMiD;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;


?>

<style>

</style>
<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4 d-flex align-items-center">
            <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="card-img img-fluid mt-3 mb-3 " alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title fe-16">Арахисовая паста с мёдом &nbsp; 200г</h5>
                <div class="d-flex justify-content-between">
                    <div class="green-text-color">В наличии <span class="text-muted">Арт:1434234</span>
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
                                    'name' => 'gggfg',
                                    'config' => [
                                        'show' => false
                                    ]
                                ]);
                                ?>
                                <p class="text-center text-muted">(2 отзыва)</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap card-text align-items-center mt-2">
                            <div class="d-flex">
                                <i class="far fa-heart grey-text pr-1 ml-2 mb-3 h4"></i>
                                <p class="ml-2">Избранное</p>
                            </div>
                            <div class="d-flex">
                                <i class="fa fa-chart-bar grey-text pr-1 ml-4 mb-2 h4"></i>
                                <p class="ml-2">Сравнить</p>
                            </div>
                        </div>
                    </div>
                    <div class="ml-5 footer-main">

                        <div class="flex-wrap">
                            <div class="text-center text-success fe-18 font-weight-bold">14,890 - 18,000</div>
                            <div class="text-center grey-text fe-16 mt-1 ml-1">сум за 1шт</div>

                        </div>
                        <button class="btn btn-success add-cart">Добавить в корзину</button>

                        <div class="touch-main d-none">
                            <div class="d-flex justify-content-end">
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
                                    <?
                                    echo ZSVGWidget::widget([
                                        'config' => [
                                            'type' => ZSVGWidget::type['basket_delete']
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


<script>
    $(document).ready(function () {
        $('.add-cart').on("click", function () {
            $(this).addClass('d-none');
            var parent = $(this).parent('.footer-main');
            var childTouch = parent.children(".touch-main");
            childTouch.removeClass("d-none");
            $('#w2').val(1);
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
            $('#w2').val(0);
        })

    })
</script>


