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
use zetsoft\widgets\market\ZProductBoxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidget2;
use zetsoft\dbitem\shop\ProductItem;

/*
 * Template
 * /render/market/XeMart%20-%20Ecommerce%20Template/html/04-category.html
 * */
/** @var ZView $this */
$this->title = Az::l('Bozor');
$action->icon = 'fa fa-rocket';
Az::$app->controller->layout = 'bozor';
Az::$app->params['widget'] = true;

?>

<!--<link href="/render/asrorz/css/ALL.css">-->


<section class="category">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">

                    <?php
                    require Root . "/render/images/ZSlickWidget/sample2.php";
                    ?>

                    <?php
                    require Root . "/render/images/ZSlickWidget/sample4.php";

                    ?>

                    <?php
                    #echo ZCategoryWidget::widget()
/*
                    $form = ZActiveForm::begin([
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
                            'color' => ZColor::color['none'],
                            'class' => 'zetColor',
                            //'btnStyle' => ZButtonWidget::btnStyle['none']
                        ]
                    ]);

                    ZActiveForm::end();*/

                    ?>


                </div>
            </div>


            </div>



            <div class="container row">
                <div  class="col-md-12 ">
                <?
                require Root . "/render/images/ZSlickWidget/sample.php";

                ?>


                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $('form').on('change', function () {
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


