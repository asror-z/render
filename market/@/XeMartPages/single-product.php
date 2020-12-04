<?php

use rmrevin\yii\fontawesome\FA;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\images\ZLightGalleryWidget;
use zetsoft\widgets\images\ZNanoGaleryWidget;
use zetsoft\widgets\incores\ZICheckboxGroupWidget;
use zetsoft\widgets\incores\ZIRadioGroupWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZHHiddenInputWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZCategoryWidget;
use zetsoft\widgets\market\ZHotOfferWidget;
use zetsoft\widgets\market\ZMCardBtnWidget;
use zetsoft\widgets\market\ZDivsWidget;
use zetsoft\widgets\market\ZProductPropertyWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZTabWidget;
use zetsoft\widgets\values\ZFormViewWidget;

/*
 * Template
 * /render/market/XeMart%20-%20Ecommerce%20Template/html/05-single-product.html
 * */
Az::$app->controller->layout = 'market';

$product = new ProductItem();
$product->id = 1;
$product->name = 'Artel LED TV';
$product->url = 'salom.uz';
$product->price = 129;
$product->price_old = 199;
$product->currency = "$";
$product->title = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

";
#$product->amount = 5;
$product->image = [
    'https://picsum.photos/id/1/500/300',
    'https://picsum.photos/id/2/500/300',
    'https://picsum.photos/id/3/500/300',
    'https://picsum.photos/id/4/500/300',
];

$property1 = new \zetsoft\dbitem\shop\PropertyItem();
$property1->name = "Color";
$property1->items = ['white', "red", "grey"];

$property2 = new \zetsoft\dbitem\shop\PropertyItem();
$property2->name = "Size";
$property2->items = ['38\'', '42\''];

$property3 = new \zetsoft\dbitem\shop\PropertyItem();
$property3->name = "Lorem";
$property3->items = ['ip1', 'ip2'];

$property4 = new \zetsoft\dbitem\shop\PropertyItem();
$property4->name = "Lorem2";
$property4->items = ['ip13', 'ip23'];

$product->properties = [
    $property1,
    $property2
];


$product->allProperties = [
    $property1,
    $property2,
    $property3,
    $property4,

];

$product->categoryName = "Electronics";

?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <?= ZNanoGaleryWidget::widget([
                'data' => $product->image,
                'config' => [
                    //'galleryMaxItems' => 4
                ]
            ]); ?>
            <!--<img src="https://picsum.photos/600/500">-->
        </div>
        <?php $form = $this->activeBegin(); ?>
        <div class="col-lg-7">
            <div><?= $product->categoryName ?></div>
            <div></div><?= $product->name ?></div>
        <div><?= $product->currency ?>
            <?= $product->price ?> &nbsp;<del>
                <?= $product->currency ?>
                <?= $product->price_old ?>   </del>
        </div>
        <?php
        $app = new ALLApp();



        //
        // vdd($proporties);
        foreach ($product->properties as $property) {
            $column = new Form();
            $column->title = $property->name;
            $column->widget = ZHRadioButtonGroupWidget::class;
            $column->data = $property->items;
            $column->rules = [[validatorRequired]];
            $app->columns[$property->name] = $column;
        }
        $column = new Form();
        $column->title = $product->amount;
        $column->widget = ZKTouchSpinWidget::class;
        /*$column->options = [
            'config' => [
                'forceStepDivisibility' => ZKTouchSpinWidget::visibility['floor'],
            ]
        ];*/
        $app->columns['amount'] = $column;

        $column = new Form();
        $column->title = $product->id;
        $column->widget = ZHHiddenInputWidget::class;
        $column->value = $product->id;
        $app->columns['product_id'] = $column;

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
            'config' => [
                'btnStyle' => ZColor::btnStyle['btn-danger'],
                'text' => 'Add to cart',
                'btnType' => ZButtonWidget::btnType['submit'],
                'ajax' => true,
                'url' => ZUrl::to("/core/product/addToCart.aspx"),
                'data' => "$('form').serialize()"
            ],
            'event' => [
                'complete' => "function(data , textStatus , jqXHR){
                     console.log(data['responseText']);
                     $('#cart_total_amount').html(data['responseText']);
                }"
            ]
        ]);
        
        echo ZButtonWidget::widget([
            'config' => [
                'hasIcon' => true,
                'icon' => 'fa fa-' . FA::_HEART,
                'btnSize' => ZColor::btnSize['default'],
                'btnPaddingLeft' => ZButtonWidget::btnScale['0'],
                'btnPaddingRight' => ZButtonWidget::btnScale['0'],
                'btnPaddingTop' => ZButtonWidget::btnScale['0'],
                'btnPaddingBottom' => ZButtonWidget::btnScale['0'],
                'iconSize' => ZButtonWidget::iconSize['1x'],
                'ajax'=>true,
                'event'=>[
                    'click'=>" add_wish_list({product_id})"
                ]
            ]
        ]);
        echo ZButtonWidget::widget([
            'config' => [
                'hasIcon' => true,
                'icon' => 'fa fa-' . FA::_RANDOM,
                'btnSize' => ZColor::btnSize['default'],
                'btnPaddingLeft' => ZButtonWidget::btnScale['0'],
                'btnPaddingRight' => ZButtonWidget::btnScale['0'],
                'btnPaddingTop' => ZButtonWidget::btnScale['0'],
                'btnPaddingBottom' => ZButtonWidget::btnScale['0'],
                'iconSize' => ZButtonWidget::iconSize['1x'],
                'event'=>[
                    'click'=>"add_compare_list({product_id})"
                ]
            ]
        ]);
        $this->activeEnd();
        ?>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-10">
        <?php


        echo ZTabWidget::widget([
            'data' => [
                'Product detail' => $product->title,
                'Reviews' => '<br>',
                'Properties' => ZProductPropertyWidget::widget([
                    'data' => $product->allProperties
                ])
            ],
            'config' => [
                'type' => ZTabWidget::type['classic'],
                'mdTabColor' => ZTabWidget::mdTabColor['white'],
                'classicTabColor' => ZTabWidget::classicTabColor['tabs-orange'],
                'mdPills' => true,
                'tabPanelId' => 'tab-panel-id',
                'contentPanelId' => 'content-panel-id',
],

        ]);

        ?>
    </div>
    <div class="col-md-2 border">
        <?
        //echo ZCategoryWidget::widget()
        ?>
    </div>
</div>

</div>
