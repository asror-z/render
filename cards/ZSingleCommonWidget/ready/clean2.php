
<?php

use zetsoft\dbitem\data\TabItem;
use zetsoft\system\Az;
use zetsoft\widgets\cards\ZHorizontalWidget;
use zetsoft\widgets\cards\ZHorizontalWidgetUMiD;
use zetsoft\widgets\inptest\ZRatyStarWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;

use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;
use zetsoft\widgets\market\ZZoomWpWidget;
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

        <div class="col-lg-7 ml-2">
            <div class="row d-flex justify-content-between w-75 ml-1">
                <div class="col-md-5">
                    <span>
                    <h3 class="fp-33">Мужская сумка водонепроницаемая</h3>
                </span>
                    <span>
                    <i class="fa fa-heart fa-2x text-muted"></i>
                    <i class="fa fa-random fa-2x ml-4 text-muted"></i>
                </span>
                </div>
            </div>
            <div class="row">


            <div class="col-lg-6 ">

            <div class="row p-0">
    
                <div class="col-lg-7 d-flex justify-content-between mt-1">
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
                        <a href="#!" class="ml-2 fp-12 text-muted p-1">(2 отзыва)</a>

                    </div>
                </div>

                <div class="col-12">
                    <div class="row justify-content-between">
                        <div class="col-12 sizes-prod w-100 ml-2">
                            <p class="fp-18 mt-2"><span class="price-card h2  text-success fp-35">140 890 - 180 000</span></p>
                            <p class="text-muted">сум за 1 шт</p>
                            <div class="price-prod">

                                <p class="size fp-22 ">размер</p>
                                    </div>
                            <div class="d-flex">
                                <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn btn-outline-secondary">34
                                </button>
                                <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">36</button>
                                <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">38</button>
                                <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">40</button>
                            </div>

                            <div class="d-flex">
                                <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn btn-outline-secondary">42
                                </button>
                                <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">44</button>
                                <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">46</button>
                                <button type="button" class="btn pt-1 pb-1 pr-3 pl-3 fp-18 btn-outline-Secondary">48</button>
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
              <h3>Предложения магазинов</h3>    
              
                <a href="#"
                   class="add-cart btn button-bg-color text-white mx-0 mt-0 px-md-5 px-2 w-100 ">
                    Добавить в
                    корзину</a>

                    </div>

<!--                <button class="btn btn-success add-cart">Добавить в корзину</button>-->

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
    <div class="row mr-0 ml-0">
        <div class="col-md-9 mt-3"   >
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
    </div>




<script>
    $(document).ready(function () {
        $('.add-cart').on("click", function () {
            $(this).addClass('d-none');
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


