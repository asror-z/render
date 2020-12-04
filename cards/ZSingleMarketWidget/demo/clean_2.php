<?php

use zetsoft\system\Az;
use zetsoft\widgets\inptest\ZRatyStarWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;

use zetsoft\widgets\market\ZZoomWpWidget; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="container bg-white">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-6 ">
            <?php /*echo ZZoomWidget::widget([
                    'data' => $product->image
                ]) */

            Az::$app->market->wish->writeViewed(2);
            ?>
            <?php echo ZZoomWpWidget::widget([
                /*'data'=> $product->image*/
            ]) ?>
        </div>
        <div class="col-lg-8 col-md-12">
              <div class="row">
            <div class="col-sm-6">
                <div class="titel-prod">
                    <p class="titel fp-30">Мужская сумка водонепроницаемая</p>
                </div>
                <div class="stars d-flex align-items-center" style="width: 30%">
                    <img class="img-fluid resp-icon" style="width: 13%"
                         src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
                    <?php
                    echo ZKStarRatingWidget::widget([
                        'name' => 'gggfg',
                        'config' => [
                            'show' => false
                        ]
                    ]);
                    ?>
                    <span class="ml-2 fp-15">(2 отзива)</span>
                </div>
                <div class="ml-5"><p class="fp-20">оптом и разницу</p></div>
                <div class="sizes-prod w-25">
                    <p class="size fp-20">размер</p>

                    <div class="d-flex">
                        <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn btn-outline-secondary">8</button>
                        <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">8</button>
                        <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">8</button>
                        <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">8</button>
                    </div>

                    <div class="d-flex">
                        <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn btn-outline-secondary">8</button>
                        <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">8</button>
                        <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">8</button>
                        <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">8</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 d-flex flex-column">
                <div class="title-card d-flex align-items-center justify-content-between">

                    <div class="additional"><span>3359 шт / в наличи</span>
                    </div>
                </div>

                <div class=" resp-margin d-flex justify-content-around">


                    <div class="heart fp-20"><i class="fa fa-heart  pr-1" aria-hidden="true"></i>Избранные</div>
                    <div class="compare fp-20"><i class="fa fa-chart-bar pr-1" aria-hidden="true"></i>Сравнить</div>

                </div>
                <div>
                    <div class="size-price d-flex justify-content-between align-items-center">

                        <div class="price-prod">
                            <p class="fp-18"><span class="price-card h2 pr-2 text-success fp-35">140 890</span> сум за 1
                                шт</p>
                            <button type="button" class="btn btn-success button-bg-color mt-3 pr-5 pl-5 fp-13">добавить
                                в
                                корзину
                            </button>
                        </div>
                    </div>
                </div>

                <div class="seltct-color mt-3">
                    <p class="color fp-19">Цвет:</p>
                    <a class="img-prod"><img width="50" class="border border-secondary p-1"
                                             src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                    <a class="img-prod"><img width="50" class="border border-secondary p-1"
                                             src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                    <a class="img-prod"><img width="50" class="border border-secondary p-1"
                                             src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                    <a class="img-prod"><img width="50" class="border border-secondary p-1"
                                             src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                    <a class="img-prod"><img width="50" class="border border-secondary p-1"
                                             src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                </div>
                <div class="content-secur mt-4">
                    <i class="fa fa-shield fp-30" aria-hidden="true"></i>
                    <span class="secur-text fp-18">Зашита покупателья в течение 90 д</span>

                </div>
            </div>
        </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-12">

    </div>
</div>
<div cl></div>



