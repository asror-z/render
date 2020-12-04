<?php


use zetsoft\widgets\images\ZHImgWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;

?>
<style>

    .number {
        color: green;
        padding-bottom: 0
    }

    .day {
        margin-left: 2px;
        padding-top: -16px
    }

    .statusProduct {
        position: absolute;
        right: 0;
        border-top-left-radius: 17%;
        border-bottom-left-radius: 17%;
        color: black
    }

    .costProduct {
        text-decoration: line-through;
    }

    .shoppingCart {
        width: 60px;
        margin-top: -1px;
        height: 42px;
        text-align: center
    }

    .shoppingCartIcon {
        margin-top: 2px;
        color: white !important
    }

    .white-skin .card-header, .white-skin .form-header {
        background-color: rgba(0, 0, 0, .03);
    }
</style>
<div class="container">
    <div class="row">

        <div class="col-lg-3 col-md-6 mt-4">
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="number"><i class="fas fa-leaf"></i>7+</h4>
                            <strong class="day" style="">дней</strong>
                        </div>

                        <button type="button" class="btn statusProduct btn-warning">aksiya
                        </button>

                    </div>
                </div>

                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top"
                         src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                         alt="Card image cap">

                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->

                    <!-- Data -->
                    <div class="list-unstyled list-inline rating mb-0">
                        <?php
                        echo ZKStarRatingWidget::widget([
                            'name' => 'name',
                            'config' => [
                                'hasIcon' => true
                            ]

                        ])
                        ?>
                    </div>

                    <!-- Text -->
                    <p class="card-text">Сыр "Tegen" из мираморний говядины 500гр</p>
                    <br>
                    <!-- <hr class="my-4">-->
                    <div>
                        <h6 class="ml-3 costProduct" style="">8,700</h6>
                        <h4 class="card-title  font-weight-bold  ml-3"> 8,100
                            <a>UZS/Шт</a></h4>

                    </div>

                    <div class="btn-group">
                        <div class="row">
                            <div class="col-sm-7">

                                <?php
                                echo ZKTouchSpinWidget::widget([
                                    'name' => 'name',
                                    'config' => [
                                        'class' => 'w-25'
                                    ],
                                    'options' => [
                                        'buttondown_class' => 'btn btn-outline-transparent btn-sm page-link',
                                        'buttonup_class' => ''
                                    ]
                                ]);
                                ?>
                            </div>
                            <a href="#" class="btn btn-success shoppingCart   deep-purple-text p-1 mx-0 mb-0">
                                <i class="fas shoppingCartIcon fa-shopping-cart fa-2x"></i>
                            </a>
                            <?php
                            //                            echo \zetsoft\widgets\navigat\ZButtonWidget::widget([
                            //                                    'name' => 'name',
                            //                                    'config' => [
                            //                                        'class'=>'fas shoppingCartIcon fa-shopping-cart fa-2x',
                            //                                        ],
                            //
                            //                            ]);
                            //
                            //                            ?>

                        </div>
                        <!-- Button -->

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


