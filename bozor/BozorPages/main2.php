<?php

use zetsoft\dbitem\shop\PropertyItem;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;
use zetsoft\former\ALL\AzimForm;
use zetsoft\former\shop\FilterForm;
use zetsoft\system\actives\ZAjaxForm;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHCheckboxButtonGroupWidget;
use zetsoft\widgets\inputes\ZKRangeWidget;
use zetsoft\widgets\market\ZCategoryWidget;
use zetsoft\widgets\market\ZHotOfferWidget;
use zetsoft\widgets\market\ZMenuWidget;
use zetsoft\widgets\market\ZProductBoxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidget2;
use zetsoft\dbitem\shop\ProductItem;

/*
 * Template
 * /render/market/XeMart%20-%20Ecommerce%20Template/html/04-category.html
 * */
/** @var ZView $this */
$this->title = Az::l('BozorMain');
$action->icon = 'fa fa-rocket';
Az::$app->controller->layout = 'bozorMain';
Az::$app->params['widget'] = true;

?>
<section class="menu">
    <div class="container">
        <div class="row">

            <!--ZMenuWidgetStart-->
            <div class="col-md-3">
                <?
                echo ZMenuWidget::widget([
                    'name' => '123',
                    'config' => [
                        'open' => true,
                    ],
                ]);
                ?>
            </div>
            <div class="col-md-12">
                <?php
                //echo ZCategoryWidget::widget()

                $form = ZAjaxForm::begin([
                    'id' => 'activeForm'
                ]) ;
                $model = Az::$app->market->product->filterFormItems();

                echo ZFormWidget::widget([
                    'model' => $model,
                    'form' => $form,
                    'config' => [

                        'topBtn' => false,
                        'botBtn' => false,
                    ]
                ]);

                echo ZButtonWidget::widget([
                    'id' => 'sendValues',
                    'config' => [
                        'text' => 'send form',
                        'btnType' => ZButtonWidget::btnType['button'],
                    ]
                ]);

                ZAjaxForm::end();
                ?>

            </div>
            <!--ZMenuWidgetEnd-->

            <!--ZSlickWidgetStart-->
            <div class="col-md-9">

                    <?php
                    $items = [
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
                        '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',


                    ];
                    echo \zetsoft\widgets\images\ZSlickWidget::widget([
                        'config'=>[
                            'dots' => true,
                            'slidesToShow' => 1,
                            'slidesToScroll' => 1,
                            'autoplay' => true,
                            'autoplaySpeed' => 2000,
                            'items' => $items,
                            'id' => 'kygbkbt6asj',
                            'prevArrow'=> false,
                            'nextArrow'=> false,


                        ]

                    ]);
                    ?>



                </div>

            <!--ZSlickWidgetEnd-->

            </div>
        <div class="row">
            <div class="col-md-3">
                <?
                $item = new ProductItem();
                $item->name = "samsung aq7";
                $item->price = [123, 123, 777];
                $item->price_old = [];
                $item->currency = "$";
                $item->title = 'asjdjasdjhasjhdjkasjkdh';
                $item->images= ['/render/market/XeMart - Ecommerce Template/acer-predator-helios-300-ph315-52-75br-4-v1.jpg'];

                $card1 = \zetsoft\widgets\market\ZMarketCardsWidget::widget([
                    'model' => $item
                ]);
                $card2 = \zetsoft\widgets\market\ZMarketCardsWidget::widget([
                    'model' => $item
                ]);
                $card3 = \zetsoft\widgets\market\ZMarketCardsWidget::widget([
                    'model' => $item
                ]);
                $card4 = \zetsoft\widgets\market\ZMarketCardsWidget::widget([
                    'model' => $item
                ]);
                $card5 = \zetsoft\widgets\market\ZMarketCardsWidget::widget([
                    'model' => $item
                ]);

                $items = [
                    $card1,
                    $card2,
                    $card3,
                    $card4,
                    $card5,
                    /*'addasdasd1',
                    'ddadasdadas',
                    'addsadadasd',*/

                ];
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <?
                        echo \zetsoft\widgets\images\ZSlickWidget::widget([
                            'config' => [
                                'id' => "asdf",
                                'class' => "border",
                                'dots' => true,
                                'slidesToShow' => 1,
                                'slidesToScroll' => 1,
                                'autoplay' => true,
                                'autoplaySpeed' => 5000,
                                'items' => $items,

                            ]
                        ]);


                        ?>
                    </div>
                </div>


                ];

                ?>
            </div>
        </div>


            </div>
        </div>
    </div>
</section>




