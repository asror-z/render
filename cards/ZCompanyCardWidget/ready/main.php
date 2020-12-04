<?php

use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\kernels\ZView;

/**@var ZView $this */

$this->fileJs('/render/cards/ZVMarketWidget/asset/main2.js');
//vdd($item);
?>


<div class="d-flex justify-content-around shadow-sm border p-2 mb-3 mx-lg-auto mx-md-auto mx-xl-3"
     style="min-width: 400px; max-width: 443px;">
    <div class="d-flex flex-column">
        <div class="d-flex justify-content-center align-items-end">
            <img src="<?= $item->image ?>" class="img-fluid" alt="" style="max-width: 100px; max-height: 80px;">

        </div>
        <div class="d-flex">
            <div>
                <?
                echo ZKStarRatingWidget::widget([

                    'name' => 'gggfg',
                    'config' => [
                        'show' => false,
                        'class' => '',
                        'value' => $item->rating,
                        'icon' => '<i class="fas fa-star fp-12"></i>',
                    ]
                ]);
                ?>
            </div>
            <a href="/shop/user/product-single/review.aspx?id=<?= $item->id ?>" class="d-flex align-items-end mx-1">

                <?= $item->review_count ? $item->review_count : 0 ?> <?= Azl . ' отзывов' ?>
            </a>
        </div>
        <div class="d-flex">
            <p class="text-muted m-0 p-0 fp-14"><?= Azl . 'Оплата: наличными, картой' ?></p>
        </div>
        <div class="d-flex align-items-center">
            <i class="fas fa-truck fp-14 text-muted"></i>
            <div class="text-muted fp-14 ml-1">
                <?php
                if ($item->delivery_price)
                    echo Azl . 'Бесплатная доставка';
                else
                    echo $item->delivery_price . ' ' . $item->currency;
                ?>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column" style="max-width: 180px;">
        <div class="d-flex justify-content-center">
            <div class="ml-1 fp-16 font-weight-bold"><?= $item->name ?></div>

        </div>
        <div class="d-flex justify-content-center">
            <? if (!empty($item->price_old)): ?>
                <div class="text-muted font-weight-bold mt-1">
                    <del><?= number_format($item->price_old, 0, '.', ' '); ?> <?= $item->currency ?></del>
                </div>
            <? endif; ?>
            <? if ($item->price_old > $item->new_price): ?>
                <!--  <div class="d-flex align-items-start ml-1"><span
                            class="badge badge-danger"><? /*= $item->discount */ ?>%</span></div>-->
            <? endif; ?>
        </div>
        <div class="d-flex justify-content-center">
            <div class="font-weight-bold fp-20">

                <?= number_format($item->new_price, 0, '.', ' '); ?> <?= $item->currency ?>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <?=
            $this->require( '/render/cards/ZCompanyCardWidget/block/AddToCartButton.php', [
                'item' => $item
            ]);
            ?>
        </div>
    </div>
</div>

