<?php

use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;
use zetsoft\system\Az;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inptest\ZRatyStarWidget;
use zetsoft\widgets\inputes\ZImgRadioGroupWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;

use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZZoomWpWidget;
use zetsoft\widgets\navigat\ZGAccordionWidget; ?>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->


<div class="container-fluid bg-white mt-5 ml-5 ">
    <div class="d-flex">
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
       
        <div class="col-lg-4 ">
            <div class="row p-0">


                <div class="col-lg-6 d-flex justify-content-between mt-5">
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
                        <a href="#!" class="ml-2 fp-15 text-dark">(2 отзива)</a>

                    </div>
                </div>

                <div class="col-12">
                    <div class="row justify-content-between">
                        <div class="col-6 sizes-prod w-100">
                            <p class="fp-18 mt-1"><span class="price-card h2  text-success fp-35">140 890 - 180 000</span></p>
                            <p class="text-muted">сум за 1 шт</p>
                            <div class="price-prod">
                                <p class="size fp-22 ">размер</p>
                             </div>
                                    
                            <!--<div class="d-flex">
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
                            </div>-->
                            <?
                            $app = new ALLApp();
                            $config = new Config();
                            $app->configs = $config;
                            $column = new Form();
                            $column->widget = ZImgRadioGroupWidget::class;
                            $column->options = [
                                'data' => [
                                    'http://townandcountryremovals.com/wp-content/uploads/2013/10/firefox-logo-200x200.png',
                                    'http://townandcountryremovals.com/wp-content/uploads/2013/10/firefox-logo-200x200.png',
                                    'http://townandcountryremovals.com/wp-content/uploads/2013/10/firefox-logo-200x200.png',
                                    'http://townandcountryremovals.com/wp-content/uploads/2013/10/firefox-logo-200x200.png',
                                    'http://townandcountryremovals.com/wp-content/uploads/2013/10/firefox-logo-200x200.png',
                                    'http://townandcountryremovals.com/wp-content/uploads/2013/10/firefox-logo-200x200.png',
                                ]
                            ];
                            $app->columns['name'] = $column;
                            ?>
                        </div>
                     
                    </div>
                </div>

            </div>



            <div class="seltct-color mt-3">
                <p class="color fp-19">Цвет:</p>
                <a class="img-prod"><img width="75" class="border border-secondary p-1"
                                         src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                <a class="img-prod"><img width="75" class="border border-secondary p-1"
                                         src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                <a class="img-prod"><img width="75" class="border border-secondary p-1"
                                         src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                <a class="img-prod"><img width="75" class="border border-secondary p-1"
                                         src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

                <a class="img-prod"><img width="75" class="border border-secondary p-1"
                                         src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>

            </div>
        </div>
          <div class="col-md-5 d-flex">
          <p>Предложения магазинов</p>
                <div class="d-flex align-items-end">
                    <?php
                    echo ZKTouchSpinWidget::widget([
                      'config' => [
                          'buttonup_txt' => '<i class="fa fa-plus"></i>',
                          'buttondown_txt' => '<i class="fa fa-minus"></i>',
                          'buttonup_class' => 'btn btn-success',
                          'buttondown_class' => 'btn btn-success',
                    ],
                    'name' => '',
                    ]);
                    ?>
                </div>
          </div>
    </div>
</div>







