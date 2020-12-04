<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZSVGWidget;
use zetsoft\widgets\market\ZTabItemWidget;
use zetsoft\render\asrorz\css\ALL;

?>


<link rel="stylesheet" href="\render\asrorz\css\ALL.css">

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-6 col-xl-3 mx-1 card">

            <div class="position-relative overflow-hidden p-1">
                <div class="position-absolute ml-1 mt-1">
                    <?
                    echo ZSVGWidget::widget([
                        'config' => [
                            'type' => ZSVGWidget::type['top_sell']

                        ]
                    ]);
                    ?>
                </div>
                <span style="right:-4%; top: 2%" class="position-absolute ml-auto red-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-4 pl-2 pr-4">
                Sale
            </span>
                <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
            </div>

            <!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
            -->


            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="fe-12">Арахисовая паста с медом 200г</div>
                    <div class="d-flex mt-1">
                        <i class="far fa-heart grey-text mr-2 h5"></i>
                        <i class="fa fa-chart-bar grey-text h5"></i>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="text-success fe-12">В наличии</div>
                    <div class="text-muted card-text">Art: 34234234</div>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <div class="d-flex flex-wrap"><div class="text-success h4">14,890-20,000</div><div class="text-muted d-flex align-items-center">сум. за 1 шт</div></div>
                    </div>


                    <div class="card-text">
                        <?
                        echo ZKStarRatingWidget::widget([
                            'name' => 'gggfg',
                            'config' => [
                                'show' => false
                            ]
                        ]); ?>
                        <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
                    </div>
                </div>

                <div>

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 card overflow-hidden">
            <!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
            -->
            <div class="position-absolute p-1 ml-1 mt-1">
                <?
                echo ZSVGWidget::widget([
                    'config' => [
                        'type' => ZSVGWidget::type['top_sell']

                    ]
                ]);
                ?>
            </div>
            <div class="position-absolute ml-5 mt-1">
                <?
                echo ZSVGWidget::widget([
                    'config' => [
                        'type' => ZSVGWidget::type['free_delivery']

                    ]
                ]);
                ?>
            </div>
            <div style="right:-4%; top: 2%" class="position-absolute ml-auto green-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-4 pl-2 pr-4">
                New
            </div>
            <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="fe-12">Арахисовая паста с медом 200г</div>
                    <div class="d-flex mt-1">
                        <i class="far fa-heart grey-text mr-2 h5"></i>
                        <i class="fa fa-chart-bar grey-text h5"></i>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="text-success fe-12">В наличии</div>
                    <div class="text-muted card-text">Art: 34234234</div>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <div class="d-flex flex-wrap"><div class="text-success h4">14,890-20,000</div><div class="text-muted d-flex align-items-center">сум. за 1 шт</div></div>
                    </div>


                    <div class="card-text">
                        <?
                        echo ZKStarRatingWidget::widget([
                            'name' => 'gggfg',
                            'config' => [
                                'show' => false
                            ]
                        ]); ?>
                        <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
                    </div>
                </div>

                <div>

                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-3 card overflow-hidden">
            <!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
            -->
            <div class="position-absolute p-1 ml-1 mt-1">
                <?
                echo ZSVGWidget::widget([
                    'config' => [
                        'type' => ZSVGWidget::type['top_sell']

                    ]
                ]);
                ?>
            </div>
            <div class="position-absolute ml-5 mt-1">
                <?
                echo ZSVGWidget::widget([
                    'config' => [
                        'type' => ZSVGWidget::type['free_delivery']

                    ]
                ]);
                ?>
            </div>
            <div style="right:-4%; top: 2%" class="position-absolute ml-auto green-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-4 pl-2 pr-4">
                New
            </div>
            <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="fe-12">Арахисовая паста с медом 200г</div>
                    <div class="d-flex mt-1">
                        <i class="far fa-heart grey-text mr-2 h5"></i>
                        <i class="fa fa-chart-bar grey-text h5"></i>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="text-success fe-12">В наличии</div>
                    <div class="text-muted card-text">Art: 34234234</div>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <div class="d-flex flex-wrap"><div class="text-success h4">14,890-20,000</div><div class="text-muted d-flex align-items-center">сум. за 1 шт</div></div>
                    </div>


                    <div class="card-text">
                        <?
                        echo ZKStarRatingWidget::widget([
                            'name' => 'gggfg',
                            'config' => [
                                'show' => false
                            ]
                        ]); ?>
                        <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
                    </div>
                </div>

                <div>

                </div>
            </div>

        </div>
        <div class="col-sm-6 col-xl-3 card overflow-hidden">
            <!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
            -->
            <div class="position-absolute p-1 ml-1 mt-1">
                <?
                echo ZSVGWidget::widget([
                    'config' => [
                        'type' => ZSVGWidget::type['top_sell']

                    ]
                ]);
                ?>
            </div>
            <div class="position-absolute ml-5 mt-1">
                <?
                echo ZSVGWidget::widget([
                    'config' => [
                        'type' => ZSVGWidget::type['free_delivery']

                    ]
                ]);
                ?>
            </div>
            <div style="right:-4%; top: 2%" class="position-absolute ml-auto green-bg-color text-white rounded-left rounded-pill fe-08  py-1 pl-lg-3 pr-xl-4 pl-2 pr-4">
                New
            </div>
            <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="fe-12">Арахисовая паста с медом 200г</div>
                    <div class="d-flex mt-1">
                        <i class="far fa-heart grey-text mr-2 h5"></i>
                        <i class="fa fa-chart-bar grey-text h5"></i>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="text-success fe-12">В наличии</div>
                    <div class="text-muted card-text">Art: 34234234</div>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <div class="d-flex flex-wrap"><div class="text-success h4">14,890-20,000</div><div class="text-muted d-flex align-items-center">сум. за 1 шт</div></div>
                    </div>


                    <div class="card-text">
                        <?
                        echo ZKStarRatingWidget::widget([
                            'name' => 'gggfg',
                            'config' => [
                                'show' => false
                            ]
                        ]); ?>
                        <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
                    </div>
                </div>

                <div>

                </div>
            </div>

        </div>

    </div>
</div>

