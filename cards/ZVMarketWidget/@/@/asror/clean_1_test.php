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
use zetsoft\widgets\images\ZHImgWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZSVGWidget;


/** @var ZView $this */
$id = $this->myId();

if (!isset($product)) {
    $rand = random_int(1, 100);

    $item = new ProductItem();
    $item->name = 'Арахисовая паста с медом 200г' . $rand;
    $item->title = 'Test Desc' . $rand;
    $item->price = '14890';
    $item->price_old = '18890';
    $item->barcode = '34234234';
    $item->exists = ProductItem::exists['not'];
    $item->images = [
        'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
    ];
}


?>






<?

$this->fileCss('/render/cards/ZVMarketWidget/asset/main.css');
$this->fileJs('/render/cards/ZVMarketWidget/asset/main.js');
?>

<>

<div class="card m-2" id="<?= $id ?>">

    <div class="position-relative overflow-hidden">
        <div class="position-absolute p-2 d-flex">
            <?
            echo ZSVGWidget::widget([
                'config' => [
                    'type' => ZSVGWidget::type['top_sell']

                ]
            ]);
            ?>

        </div>

        <span style="right: 2%; top: 4%"
              class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 mr-2 text-white rounded fe-10">
                -10 %
            </span>

        <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
             class="card-img-top" alt="...">
    </div>

    <!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
    -->


    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="fe-12"><?= $item->name ?></div>
            <div class="d-flex mt-1">
                <i class="far fa-heart grey-text mr-2 h5"></i>
                <i class="fa fa-chart-bar grey-text h5"></i>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div class="text-success fe-12"><?= $item->exists ?></div>
            <div class="text-muted card-text"><?= Az::l('Артикул') ?>: <?= $item->barcode ?></div>
        </div>

        <div class="d-flex justify-content-between">
            <div>
                <div class="d-flex flex-wrap">
                    <div class="text-success h4">14,890</div>
                    <div class="text-muted d-flex align-items-center">сум. за 1 шт</div>
                </div>
                <div class="text-danger mt-n2"><strike class="h5">18,890</strike></div>
            </div>


            <div class="card-text">
                <?
                echo ZKStarRatingWidget::widget([
                    'id' => $id,
                    'name' => 'gggfg',
                    'config' => [
                        'show' => false
                    ]
                ]); ?>
                <h6 class="card-text text-muted text-center"><a
                            href="/"><?= $item->reviewCount ?> <?= Az::l('отзыва') ?></a></h6>
            </div>
        </div>

        <div>

            <a id="add-cart-<?= $id ?>">asdfasdfasf</a>

          
        </div>
  
    </div>
    <a href="#" id="add-cart-<?=$id ?>" data-catalog-id="<?=$item->catalogId?>" class="btn button-bg-color text-white">Добавить в корзину</a>
</div>

<script>
    $('#add-cart-<?=$id ?>').on("click", function () {
        addCard(<?= $id ?>);
    });

    $('#basket-delete-<?=$id ?>').on("click", function () {
        basketDelete(<?= $id ?>);
    })
</script>

