<?php


use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\cards\ZHorizontalWidget;
use zetsoft\widgets\cards\ZHorizontalWidgetUMiD;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;

/** @var ZView $this */
if (!isset($product)) {
    $rand = random_int(1, 999999);

    $item = new ProductItem();
    $item->name = 'Арахисовая паста с медом 200г' . $rand;
    $item->title = 'Test Desc' . $rand;
    $item->price = '14890';
    $item->price_old = '18890';
    $item->barcode = '34234234';
    $item->exists = ProductItem::exists['not'];
    $item->discount = 11;
    $item->images = [
        'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'               ,
        'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg'               ,
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU'               ,
    ];
}
?>


<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4 d-flex align-items-center">

            <div class="position-relative col-md-12">
                <div class="position-absolute p-2">
        <span style="left: 10%; top: 10% "
              class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 text-white rounded fe-10">
                -<?= $item->discount ?>%
            </span>
                </div>
                <img src="<?= $item->images[0];?>"
                     class="card-img img-fluid" alt="Product-img">

            </div>


        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title fe-16"><?= $item->name?></h5>





                <div class="d-flex justify-content-between">
                    <div class="green-text-color"><?= $item->exists ?><span class="text-muted pl-1"><?= Az::l('Артикул') ?>: <?= $item->barcode ?></span>
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
                                <a href="#!" class="reviev text-center text-muted"><?= $item->reviewCount ?> <?= Az::l('отзыва') ?></a>
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

                        <div class=" flex-wrap">
                            <div class="text-danger text-center">
                                <strike class="">20,000 </strike>
                                <small class="pl-5">скитка:8,000 UZS</small>
                            </div>

                            <div class="flex-wrap">
                                <div class="text-center text-success fe-18 font-weight-bold ">162,000</div>
                                <div class="text-center grey-text fe-16 mt-1 ml-2">сум за 1шт</div>

                            </div>
                        </div>

                        <button class="btn btn-success add-cart border">Добавить в корзину</button>

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


