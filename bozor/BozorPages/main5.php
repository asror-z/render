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
$this->title = Az::l('Bozorboy');
$action->icon = 'fa fa-rocket';
Az::$app->controller->layout = 'bozorMain';
Az::$app->params['widget'] = true;

?>
<section class="menu">
    <div class="container">
        <div class="row">

            <!--ZMenuWidgetStart-->
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
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
                </div>

            </div>
            <div class="col-md-9 ">
                <div id="contento" class="border mb-3">
                    <?
                    echo \zetsoft\widgets\market\ZDilshodBoxWidget::widget([
                        //'model' => $model,
                        'model' => Az::$app->market->product->allProducts(4),
                        'config' => [
                            'widget' => ZProductCardWidget::class,
                            //'categoryId' => 6
                        ]
                    ]);
                    ?>
                </div>
                <?
                //                require Root . "/render/images/ZSlickWidget/sample.php";

                ?>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 px-0">

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
                            'dots' => false,
                            'slidesToShow' => 5,
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
        </div>







            </div>
        </div>
    </div>
</section>

<script>
    $(document).on('change', 'form', function () {
        $('#sendValues').click();
    });

    $('#sendValues').click(function () {
        $.ajax({
            url: '/core/product/setFilter.aspx',
            method: 'POST',
            data: $('#activeForm').serialize(),
            beforeSend: function (jqXHR) {
                console.log('beforeSend')
            },
            success: function (data) {
                $('#contento').html(data)
            },
            error: function () {
                console.warn("you didnt check yet")
            }
        })
    })

</script>




