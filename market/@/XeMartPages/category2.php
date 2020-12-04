<?php

use zetsoft\dbitem\shop\PropertyItem;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;
use zetsoft\former\ALL\AzimForm;
use zetsoft\former\shop\FilterForm;
use zetsoft\system\actives\ZAjaxForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inptest\ZMaterialCheckboxWidget;
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
$this->title = Az::l('Категория 2');
$action->icon = 'fa fa-rocket';
Az::$app->controller->layout = 'bozorMain';
Az::$app->params['widget'] = true;

?>
<section class="category">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                //echo ZCategoryWidget::widget()

                $form = ZAjaxForm::begin([
                    'id' => 'activeForm'
                ]) ;
                //$model = Az::$app->market->product->filterFormItems();
                $app = new ALLApp();


                $proporties = Az::$app->market->product->propertsByCategory(4);
                //
                // vdd($proporties);
                foreach ($proporties as $property) {
                    $column = new Form();
                    $column->title = $property->name;
                    $column->widget = ZMaterialCheckboxWidget::class;
                    $column->data = $property->items;
                    $app->columns[] = $column;
                }
                $app->cards = [];
                $model = Az::$app->forms->former->model($app);

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
            <div class="col-md-8 ">
                <div id="contento" class="border mb-3">
                    <?
                    echo \zetsoft\widgets\market\ZDilshodBoxWidget::widget([
                        //'model' => $model,
                        /*'model' => Az::$app->market->product->allProducts(4),*/
                        'config' => [
                            'widget' => ZProductCardWidget::class,
                            //'categoryId' => 6
                        ]
                    ]);
                    ?>
                </div>
                <?
                require Root . "/render/images/ZSlickWidget/sample.php";

                ?>
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

