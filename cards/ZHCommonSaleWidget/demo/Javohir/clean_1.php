<?php


use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\cards\ZHorizontalWidget;
use zetsoft\widgets\cards\ZHorizontalWidgetUMiD;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;

/* @var ZView $this */

$id = $this->myId();

//$item = Az::$app->market->product->allProducts(549);

if (!isset($product)) {
    $rand = random_int(1, 999999);

    $item = new ProductItem();
    //vdd($item);
    $item->name = 'Арахисовая паста с медом 200г' . $rand;
    $item->title = 'Test Desc' . $rand;
    $item->price = '14890';
    $item->price_old = '18890';
    $item->barcode = '34234234';
    $item->catalogId = '18';
    $item->exists = ProductItem::exists['not'];
    $item->images = [
        'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
    ];
}


//vdd($item);

?>
<?
$this->fileJs('/render/cards/ZVMarketWidget/asset/main.js');
?>

<div id="<?= $id ?>" class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4 d-flex align-items-center">
            <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="card-img img-fluid" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="fe-20"><?= $item->name ?></h5>
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="green-text-color fe-14"><?= $item->exists ?><span
                                class="text-muted ml-3 fe-8"><? Az::l('Артикул'); ?><?= $item->barcode ?></span>
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
                                        'show' => false,
                                        'isDisplayOnly' => true,
                                        'value' => '4',
                                    ]
                                ]);
                                ?>
                                <p class="text-center text-muted fe-10">(<?= $item->reviewCount ?> отзыва)</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap card-text align-items-center mt-2">

                            <?

                            $wish = Az::$app->market->product->inWish(18);
                            $compare = Az::$app->market->product->inCompare(18);

                            ?>

                            <a role="button" onclick="add_wish_list(18, $(this), false)" class="d-flex">
                                <i class="far fa-heart grey-text pr-1 ml-2 mb-3 mt-4 h4 <?= $wish ? 'text-danger' : '' ?>"></i>
                                <p class="fe-12 ml-2 mt-4">Избранное</p>
                            </a>
                            <a role="button" onclick="add_compare_list(18, $(this), false)" class="d-flex">
                                <i class="fa fa-chart-bar grey-text pr-1 ml-4 mb-2 mt-4 h4 <?= $compare ? 'text-success' : '' ?>"></i>
                                <p class="fe-12 ml-2 mt-4">Сравнить</p>
                            </a>

                        </div>

                    </div>
                    <div class="ml-5 footer-main">
                        <div class="text-center text-success fe-18 font-weight-bold">
                            <?php
                            if ($item->currencyType == ProductItem::currencyType['before'])
                                echo $item->currency;
                            ?>
                            <?= $item->price ?>
                        </div>
                        <div class="text-center grey-text fe-16 mt-1 ml-1">
                            <?php
                            if ($item->currencyType == ProductItem::currencyType['after'])
                                echo $item->currency;
                            ?>
                            за 1<?= $item->measure ?>
                        </div>
                        <? if (!$item->is_multi) { ?>
                            <button id="add-card-<?= $id ?>" class="btn button-bg-color text-white">
                                <?= Az::l('Добавить в корзину') ?>
                            </button>
                        <? } ?>

                        <div id="input-<?= $id ?>" class="touch-main d-none">
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
                                <div id="basket-delete-<?= $id ?>">
                                    <?=
                                    ZSVGWidget::widget([
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
        </div>
    </div>
</div>

<script>
    $('#add-card-<?=$id ?>').on("click", function () {
        addCard('<?= $id ?>');
    });

    $('#basket-delete-<?=$id ?>').on("click", function () {
        basketDelete('<?= $id ?>');
    })
</script>







