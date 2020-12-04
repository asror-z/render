<?php

?>

    <div class="row">
        <div class="col-lg-8 d-flex border ml-3">
            <div class="product-category">
                <div class="product-image mt-3">
                    <div class="save" style="width: 50px">
                        <span class="save-num h2 text-success">
                        <?php
                            echo \zetsoft\widgets\images\ZHImgWidget::widget([
                                'config' => [
                                    'url' => '/render/bozor/ZMProductBlockWidget/demo/images/Перечень-заказов_1011_03.png'
                                ]
                            ]);
                            ?>
                            12+</span>
                        <div class="save-day h5">дней</div>
                        <?php
                            echo \zetsoft\widgets\images\ZHImgWidget::widget([
                                'config' => [
                                    'url' => '/render/bozor/ZMProductBlockWidget/demo/images/Перечень-заказов_10_03.png'
                                ]
                            ]);
                            ?>
                            </span>
                    </div>
                </div>
                <div class="product-content pl-4">
                    <p class="product-titel mb-1 h5">Колбаски Останкино Шашлычные полукопченные 400г</p>
                    <p class="reviews-rating mb-1">
                        <?php
                        use zetsoft\system\assets\ZColor;
                        use zetsoft\widgets\inputes\ZKStarRatingWidget;
                        use zetsoft\widgets\navigat\ZButtonWidget;

                        echo ZKStarRatingWidget::widget([
                            'name' => 'name',
                            'config' => [
                                'hasIcon' => true
                            ]
                        ]);
                        ?>
                    </p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">

                            <?php
                            #echo \zetsoft\widgets\inputes\ZKTouchSpinWidget::widget();
                            ?>

                        </ul>
                    </nav>
                </div>
                <div class="product-price">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">
                            <?php
                                echo \zetsoft\widgets\navigat\ZButtonWidget::widget([
                                    'config' => [
                                     'text' => 'x',
                                        'btnRounded' => false,
                                        'btnSize' => ZColor::btnSize['btn-micro'],
                                        'color' => ZColor::color['black'],
                                        'class'  =>'',
                                    ]

                                ]);
                            ?>
                        </span>
                    </button>

                    <p class="shopping-price"><span class="price-num pr-2">22,000 </span> UZS</p>
                </div>
            </div>
        </div>
    </div>

