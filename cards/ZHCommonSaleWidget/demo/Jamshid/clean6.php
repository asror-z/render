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

            <div class="position-relative col-md-12">
                <div class="position-absolute p-2">
        <span style="left: 10%; top: 10% "
              class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 text-white rounded fe-10">
                -10%
            </span>
                </div>
                <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                     class="card-img img-fluid  " alt="...">

            </div>


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

                        <div class="text-danger text-center mr-4">
                            <strike class="">20,000</strike>
                        </div>
                        
                        <div class="flex-wrap">
                            <div class="text-center text-success fe-18 font-weight-bold">
                            162,000
                            </div>
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
                                            'buttonup_class' => 'btn fp-18 border border-success text-success p-1',
                                            'buttondown_class' => 'btn fp-18 border border-danger text-danger p-1',
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
    window.onload = function() {
        var num = 16200;
        var str = num.toString();
        str = reverseString(str);

        var a, i, b = '';
        for(i=0; i<str.length; i=i+3){

            a = str.slice(i, i+3);
            b = b + ' ' + a;
        }
        b = reverseString(b);
        console.log(b);
    }

    function reverseString(str){
        let stringRev ="";
        for(let i= 0; i<str.length; i++){
            stringRev = str[i]+stringRev;
        }
        return stringRev;
    }


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


