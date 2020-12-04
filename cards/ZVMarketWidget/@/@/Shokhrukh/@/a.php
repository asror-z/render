
<?php
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;


/** @var ZView $this */
$id = $this->myId();
?>
<div id="<?= $id ?>" class="card m-2">



    <div class="position-relative overflow-hidden">
        <div class="position-absolute p-2 d-flex">
            <?
            if (in_array(ProductItem::statuses['top_sell'], $product->status))
                echo ZSVGWidget::widget([
                    'config' => [
                        'type' => ProductItem::statuses['top_sell']
                    ]
                ]);
            ?>

            <div class="pl-3">
                <?
                if (in_array(ProductItem::statuses['free_delivery'], $product->status))
                    echo ZSVGWidget::widget([
                        'config' => [
                            'type' => ProductItem::statuses['free_delivery']
                        ]
                    ]);
                ?>
            </div>
        </div>

        <? if($product->is_multi === false && $product->discount !== null){      ?>
            <span style="right: 2%; top: 4%" class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 mr-2 text-white rounded fe-10">
                    <?= $product->discount; ?> %
                </span>
        <? }      ?>
        <img src="<?= Root.$product->image[0] ?>" class="card-img-top" alt="...">
    </div>

    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="fe-12"><?= $product->name ?></div>
            <div class="d-flex mt-1">
                <i class="far fa-heart grey-text mr-2 h5"></i>
                <i class="fa fa-chart-bar grey-text h5"></i>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div class="text-success fe-12"><?= $product->exist ?></div>
            <div class="text-muted card-text"><?= Az::l('Артикул') ?>: <?= $product->barcode ?></div>
        </div>

        <div class="d-flex justify-content-between">
            <div>
                <div class="d-flex flex-wrap">
                    <? if($product->currencyType === ProductItem::currencyType['before']) {?>
                        <div class="text-muted d-flex align-items-center">
                            <? echo $product->currency ?>
                        </div>
                    <? } ?>
                    <div class="text-success h4">
                        <? if(!$product->is_multi){ ?>
                            <?= $product->new_price ?>
                        <? }else{ ?>
                            <?= $product->min_price .= ( $product->max_price !== null) ? ' - '. $product->max_price : ''?>
                        <? }?>
                    </div>
                    <? if($product->currencyType === ProductItem::currencyType['after']) {?>
                        <div class="text-muted d-flex align-items-center">
                            <?= $product->currency ?> за 1 <?= $product->measure ?>
                        </div>
                    <? } ?>
                </div>
                <? if(!$product->is_multi){ ?>
                    <div class="text-danger mt-n2">
                        <strike class="h5"><?= $product->price_old ?></strike>
                    </div>
                <? }?>

            </div>


            <div class="card-text">
                <?
                echo ZKStarRatingWidget::widget([
                    'name' => 'gggfg',
                    'config' => [
                        'show' => false,
                        'value' => $product->rating,
                    ]
                ]); ?>
                <h6 class="card-text text-muted text-center">
                    <a href="/"><?= $product->reviewCount ?>
                        <?= Az::l('отзыва') ?>
                    </a>
                </h6>
            </div>
        </div>

        <div>

        </div>
    </div>
    <? if (!$product->is_multi) { ?>
        <button  class="btn button-bg-color add-card text-white" data-catalog-id="<?= $product->catalogId?>">
            <?= Az::l('Добавить в корзину') ?>
        </button>
    <? } ?>

    <div  class="touch-main d-none">
        <div class="d-flex justify-content-center">
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
                    ],
                ]);
                ?>
            </div>
            <div id="basket-delete-<?= $id ?>">
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

