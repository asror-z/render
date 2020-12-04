<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\cards\ZMiniCardWidget;
use zetsoft\widgets\market\ZZoomWpWidget;
?>

<div class="container">
    <div class="row justify-content-between">

        <div class="col-lg-5 col-sm-12" style="display: block">
                <?php /*echo ZZoomWidget::widget([
                    'data' => $product->image
                ]) */

                Az::$app->market->wish->writeViewed(2);
                ?>
                <?php echo $this->require( '/render/cards/ZZoomWidget/ready/zoom.php'); ?>
            </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-sm-6 d-flex flex-column">
                    <div>
                        <h6 class="mb-0">
                            Цвет товара: Неважно
                        </h6>
                    </div>
                    <div>
                        <div class="select-color d-flex justify-content-start mt-2">
                            <a class="img-prod mr-1">
                                <span class="badge rounded-circle badge-primary">&nbsp;</span>
                            </a>
                            <a class="img-prod mr-1">
                                <span class="badge rounded-pill badge-secondary">&nbsp;</span>
                            </a>
                            <a class="img-prod mr-1">
                                <span class="badge rounded-circle badge-success">&nbsp;</span>
                            </a>
                            <a class="img-prod mr-1">
                                <span class="badge badge-warning">&nbsp;</span>
                            </a>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="mb-0">
                            Состояние товара: Неважно
                        </h6>
                    </div>
                    <div>
                        <div class="select-status d-flex justify-content-start align-items-start mt-2">
                            <a class="img-prod mr-1 border p-2">
                                <p class="fe-08 mb-0">
                                    Новый
                                </p>
                                <p class="fe-08 mb-0">
                                    от 37 999 ₽
                                </p>
                            </a>
                            <a class="img-prod mr-1 border p-2">
                                <p class="fe-08 mb-0">
                                    Новый
                                </p>
                                <p class="fe-08 mb-0">
                                    от 37 999 ₽
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6>Коротко о товаре</h6>
                        <ul class="pl-4 mb-0 fe-08">
                            <li class="font-weight-light">смартфон с Android 9.0</li>
                            <li class="font-weight-light">смартфон с Android 9.0</li>
                            <li class="font-weight-light">смартфон с Android 9.0</li>
                            <li class="font-weight-light">смартфон с Android 9.0</li>
                            <li class="font-weight-light">смартфон с Android 9.0</li>
                            <li class="font-weight-light">смартфон с Android 9.0</li>
                            <li class="font-weight-light">смартфон с Android 9.0</li>
                        </ul>
                        <div class="mb-3">
                            <a href="#">Все характеристики</a>
                        </div>
                        <div class="mb-3">
                            <a href="#">Задать вопрос о товаре</a>
                        </div>
                        <div>
                            <a href="#">Все товары <span class="font-weight-bold">SAMSUNG</span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex flex-column justify-content-start">
                <div class="py-3">
                    <?
                    echo ZMiniCardWidget::widget([

                    ]);
                    ?>
                </div>
                <div class="py-3">
                    <?
                    echo ZMiniCardWidget::widget([

                    ]);
                    ?>
                </div>
                <div class="py-3">
                    <?
                    echo ZMiniCardWidget::widget([

                    ]);
                    ?>
                </div>



                </div>
            </div>
        </div>
    </div>
</div>

