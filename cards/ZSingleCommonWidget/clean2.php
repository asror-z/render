<?php

use zetsoft\dbitem\data\TabItem;
use zetsoft\system\Az;
use zetsoft\widgets\cards\ZMiniStoreWidget;
use zetsoft\widgets\inptest\ZRatyStarWidget;
use zetsoft\widgets\inputes\ZImgRadioWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;

use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;
use zetsoft\widgets\market\ZZoomWpWidget;
use zetsoft\widgets\navigat\ZSlimScrollWidget;
use zetsoft\widgets\navigat\ZSmartTabWidget; ?>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->


<div class="container-fluid bg-white mt-5 w-auto mx-0">
    <div class="row pl-2">
        <div class="col-lg-3 col-sm-7 d-flex pt-0 pr-0 pb-0 pl-0">
            <?php /*echo ZZoomWidget::widget([
                    'data' => $product->image
                ]) */

            Az::$app->market->wish->writeViewed(2);
            ?>
            <?php echo ZZoomWpWidget::widget([
                /*'data'=> $product->image*/
            ]) ?>
        </div>

        <div class="col-lg-9">
            <div class="row d-flex justify-content-between w-100">
                <span>
                    <h3 class="fp-40">Мужская сумка водонепроницаемая</h3>
                </span>
               <div class="icon" style="margin-top: 10px; margin-right: 145px"> <span">
                    <i class="fa fa-heart fa-2x text-light"></i>
                    <i class="fa fa-random fa-2x ml-4 text-light"></i>
                </span>
               </div>
            </div>
            <div class="row">


                <div class="col-lg-6 ">

                    <div class="row p-0">

                        <div class="col-lg-6 d-flex justify-content-between mt-1">
                            <div class="stars d-flex align-items-center w-40">
                                <img class="img-fluid resp-icon" width="25"
                                     src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
                                <?php
                                echo ZKStarRatingWidget::widget([
                                    'name' => 'gggfg',
                                    'config' => [
                                        'show' => false
                                    ]
                                ]);
                                ?>
                                <a href="#!" class="ml-2 fp-12 text-muted p-1">(2 отзыва )</a>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row justify-content-between">
                                <div class="col-12 sizes-prod w-100">
                                    <p class="fp-18 mt-2"><span class="price-card h2  text-success fp-35">140 890 - 180 000</span>
                                    </p>
                                    <p class="text-muted fp-15">сум за 1 шт</p>
                                    <div class="price-prod">

                                        <p class="size fp-26 ">размер</p>
                                    </div>
                                    <div class="d-flex">
                                        <button type="button"
                                                class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn btn-outline-secondary">34
                                        </button>
                                        <button type="button"
                                                class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">36
                                        </button>
                                        <button type="button"
                                                class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">38
                                        </button>
                                        <button type="button"
                                                class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">40
                                        </button>
                                    </div>

                                    <div class="d-flex">
                                        <button type="button"
                                                class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn btn-outline-secondary">42
                                        </button>
                                        <button type="button"
                                                class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">44
                                        </button>
                                        <button type="button"
                                                class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">46
                                        </button>
                                        <button type="button"
                                                class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">48
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="seltct-color mt-3">
                        <p class="color fp-19">Цвет:</p>
                        <a class="img-prod"><img width="55" class="border border-secondary p-1"
                                                 src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                        <a class="img-prod"><img width="55" class="border border-secondary p-1"
                                                 src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                        <a class="img-prod"><img width="55" class="border border-secondary p-1"
                                                 src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                        <a class="img-prod"><img width="55" class="border border-secondary p-1"
                                                 src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                        <a class="img-prod"><img width="55" class="border border-secondary p-1"
                                                 src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                    </div>
                </div>

                <div class="col-6 d-flex flex-column justify-content-between">
                    <h3 style="margin-left: 40px">Предложения магазинов</h3>
                    <div class="d-flex align-items-center w-100">
                        <?php
                        ZSlimScrollWidget::begin([
                            'config' => [
                                'width' => '400px',
                                'height' => '250px',
                                'begin' => true
                            ]
                        ]);

                        echo \zetsoft\widgets\inputes\ZImgRadioWidget::widget([
                            'config' => [
                                'src' => '',
                                'title' => '',
                                'checkMarkPosition' => ZImgRadioWidget::position['bottom-left'],
                                'content' => ZMiniStoreWidget::widget()
                            ]
                        ]);
                        echo \zetsoft\widgets\inputes\ZImgRadioWidget::widget([
                            'config' => [
                                'src' => '',
                                'title' => '',
                                'checkMarkPosition' => ZImgRadioWidget::position['bottom-left'],
                                'content' => ZMiniStoreWidget::widget()
                            ]
                        ]);
                        echo \zetsoft\widgets\inputes\ZImgRadioWidget::widget([
                            'config' => [
                                'src' => '',
                                'title' => '',
                                'checkMarkPosition' => ZImgRadioWidget::position['bottom-left'],
                                'content' => ZMiniStoreWidget::widget([
                                    'config' => [
                                        'logoname' => 'Puma',
                                        'price' => '1080.00',
                                    ]
                                ])
                            ]
                        ]);
                        echo \zetsoft\widgets\inputes\ZImgRadioWidget::widget([
                            'config' => [
                                'src' => '',
                                'title' => '',
                                'checkMarkPosition' => ZImgRadioWidget::position['bottom-left'],
                                'content' => ZMiniStoreWidget::widget()
                            ]
                        ]);
                        echo \zetsoft\widgets\inputes\ZImgRadioWidget::widget([
                            'config' => [
                                'src' => '',
                                'title' => '',
                                'checkMarkPosition' => ZImgRadioWidget::position['bottom-left'],
                                'content' => ZMiniStoreWidget::widget()
                            ]
                        ]);


                        ZSlimScrollWidget::end();
                        ?>
                    </div>
                    <div class="col-md-7 d-flex align-items-center w-100 ">
                        <?php
                        echo ZKTouchSpinWidget::widget([
                            'config' => [
                                'buttonup_txt' => '<i class="fa fa-plus"></i>',
                                'buttondown_txt' => '<i class="fa fa-minus"></i>',
                                'buttonup_class' => 'btn btn-success',
                                'buttondown_class' => 'btn btn-success',
                                'class' => 'text-center',

                            ],
                            'name' => 'ddsdsdfdf',
                        ]);
                        ?>
                        <div class="align-items-center ml-3 mb-2 ">
                            <?php
                            echo ZSVGWidget::widget([
                                'config' => [
                                    'type' => 'basket_delete'
                                ]
                            ])
                            ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div> <br>
<br
<br
<div class="row mr-0 ml-0">
    <div class="col-md-9 mt-3 fp-20">
        <?php
        $data = [];


        $item = new TabItem();
        $item->label = 'Информация';
        $item->content = 'Lorem iASFADFFAFSFpsum';

        $data[] = $item;

        $item = new TabItem();
        $item->label = 'Характеристика';
        $item->content = 'kjsndosnnsdnsdvnjsnvjsnjnjndvnj';

        $data[] = $item;

        $item = new TabItem();
        $item->label = 'Отзывы';
        $item->content = 'Lorem ipsum2SASDSDFSDFSDFSDSFAFDFFSDFS';

        $data[] = $item;

        $item = new TabItem();
        $item->label = 'Вопросы и Ответы';
        $item->content = 'Lorem ipsuAFAFSDFSFSFSFSFm2SASDSDFSDFSDFSDSFAFDFFSDFS';

        $data[] = $item;

        echo ZSmartTabWidget::widget([
            'config' => [
                'theme' => ZSmartTabWidget:: theme['Classic'],
                'animation' => ZSmartTabWidget:: animation['fade'],
                'orientation' => ZSmartTabWidget:: orientation['horizontal'],
                'justified' => ZSmartTabWidget::justified['true'],
                'isAjax' => ZSmartTabWidget::isAjax['false'],
            ],
            'data' => $data

        ]);

        ?>
    </div>

</div>






