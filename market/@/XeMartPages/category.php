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
$this->title = Az::l('Категория');
$action->icon = 'fa fa-rocket';
//Az::$app->controller->layout = 'bozorMain';
Az::$app->params['widget'] = true;
$app = new ALLApp();
$column = new Form();

?>
<section class="category">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                //echo ZCategoryWidget::widget()
                $proporties = Az::$app->market->product->propertsByCategory(4);

                foreach ($proporties as $property) {
                    $column->title = $property->name;
                    $column->widget = ZHCheckboxButtonGroupWidget::class;
                    $column->data = $property->items;
                }
                $app->columns[] = $column;
                $app->cards = [];
                $model = Az::$app->forms->former->model($app);
                $this->pjaxBegin();
                $form = $this->activeBegin();

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
                        'hidden' => true,
                        'text' => 'send form',
                        'btnType' => ZButtonWidget::btnType['button'],
                    ]
                ]);

                $this->activeEnd();
                $this->pjaxEnd();
                ?>
            </div>
            <div class="col-md-8 ">

               <div class="row">
                   <div class="col-md-12 border">
                       <?
                       //vd($properties);

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
               </div>
                <div class="row">
                    <div class="col-md-12">
                        <?

                        require Root . "/render/images/ZSlickWidget/sample.php";
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
</script>

