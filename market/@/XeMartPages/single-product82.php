<?php

use rmrevin\yii\fontawesome\FA;
use yii\bootstrap\Modal;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;
use zetsoft\models\user\UserCompany;
use zetsoft\models\user\User;
use zetsoft\service\forms\Active;
use zetsoft\system\actives\ZDynamicModel;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZFrame;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZListViewWidgetOld;
use zetsoft\widgets\images\ZLightGalleryWidget;
use zetsoft\widgets\images\ZNanoGaleryWidget;
use zetsoft\widgets\images\ZSlickWidget;
use zetsoft\widgets\incores\ZICheckboxGroupWidget;
use zetsoft\widgets\incores\ZIRadioGroupWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZHHiddenInputWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\market\ZCategoryWidget;
use zetsoft\widgets\market\ZHotOfferWidget;
use zetsoft\widgets\market\ZMarketCardsWidget;
use zetsoft\widgets\market\ZMCardBtnWidget;
use zetsoft\widgets\market\ZDivsWidget;
use zetsoft\widgets\market\ZProductPropertyWidget;
use zetsoft\widgets\market\ZSliderWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZModalNewWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZTabWidget;
use zetsoft\widgets\values\ZFormViewWidget;

/*
 * Template
 * /render/market/XeMart%20-%20Ecommerce%20Template/html/05-single-product.html
 * */


//$product_id = $this->httpGet('id');


Az::$app->controller->layout = 'bozorMain';

//$product = Az::$app->market->product->product($product_id);
$product = Az::$app->market->product->product(11);
if ($product === null) {
    echo Az::l("Ошибка при получении товара.");
    return null;
}
?>
<div class="container">
    <div class="row">
        <div class="col col-4">
            <?=ZLightGalleryWidget::widget([
                'data' => $product->image
            ])?>
        </div>
        <div class="col col-4">
            <?php
            $active = new Active();
            $active->id = 'formModal';


            $form = $this->activeBegin($active); ?>

                <div><?= $product->categoryName ?></div>
                <a href="<?= $product->url ?>">
                    <div class="text-success font-weight-bold"><?= $product->name ?></div>
                </a>
                <div class="text-danger font-weight-bold"><?= Az::$app->market->company->getPriceString($product->price, $product->currency) ?>
                    &nbsp;<del>
                        <?= Az::$app->market->company->getPriceString($product->price_old, $product->currency) ?>   </del>
                </div>
                <?php
                $app = new ALLApp();

                // vdd($proporties);
                foreach ($product->properties as $property) {
                    $column = new Form();
                    $column->title = $property->name;
                    $column->widget = ZHRadioButtonGroupWidget::class;
                    $column->options = [
                        'config' => [
                            'btnStyle' => ZHRadioButtonGroupWidget::btnStyle['btn-success'],

                        ]

                    ];
                    $column->data = $property->items;
                    $column->rules = [[validatorRequired]];
                    $app->columns[$property->name] = $column;

                }
                $column = new Form();
                $column->title = $product->amount;
                $column->value = 1;
                $column->widget = ZKTouchSpinWidget::class;
                $column->options = [
                    'config' => [
                        'buttonup_txt' => '<i class="fa fa-plus"></i>',
                        'buttondown_txt' => '<i class="fa fa-minus"></i>',
                        'buttonup_class' => 'btn btn-success',
                        'buttondown_class' => 'btn btn-success',
                    ]
                ];
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
                        //'text' => 'Add to cart',
                        'btnType' => ZButtonWidget::btnType['button'],
                        'type' => ZAjaxWidget::type['get'],
                        'ajax' => true,
                        'url' => ZUrl::to(["/core/product/modalContent"]),
                        'dataType' => 'html',
                        'data' => "$('#formModal').serialize()",
                        'icon' => 'fa fa-' . FA::_SHOPPING_CART,
                        'hasIcon' => true
                    ],
                    'event' => [
                        'success' => "function(response) {
                     $('#modalBody').html(response);
                }",
                        'click' => 'function(){$("#company-modal").modal(\'show\')}'
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
                    ]
                ]); 
            $this->activeEnd();
            ?>
        </div>
        <div class="col col-4"  id="market-panel">
            
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
                        'data' => $product->allProperties,
                    ])

                ],
            ]);

            ?>
        </div>
        <div class="col-md-2 border">
        </div>
    </div>


    <script>
        let radioBtns = document.querySelectorAll('input[type="radio"]');
        //console.log('radioBtns', radioBtns);
        radioBtns.forEach(item => {
            item.addEventListener('click', (event) => {
                //console.log($("#formModal").serialize());
                $.ajax({
                    url: '/core/product/modalContent.aspx',
                    type: 'GET',

                    data: $("#formModal").serialize(),
                    success: function (data) {
                        $('#market-panel').append(data)
                    }
                });
            })
        });


    </script>

