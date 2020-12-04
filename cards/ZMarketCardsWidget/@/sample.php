<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\widgets\market\ZMarketCardsWidget;
use zetsoft\widgets\market\ZTabItemWidget;

$item = new ProductItem();
$item->name = "samsung aq7";
$item->price = [123, 123, 777];
$item->price_old = [324, 364, 388];
$item->currency = "$";
$item->title = 'asjdjasdjhasjhdjkasjkdhaskldjklajsdjaskjd';
$item->images = ['/render/market/XeMart - Ecommerce Template/html/images/tab-1.png'];


?>

    <div class="row">
        <div class="col-2">
            <?

        /*    echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => \zetsoft\widgets\market\ZMarketCardsWidget::type['featureVertical'],
                ],
                'model' => $item
            ]);*/
            ?>
        </div>
        <div class="col-4">
            <?

            /*echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => \zetsoft\widgets\market\ZMarketCardsWidget::type['featureVertical'],
                ],
                'model' => $item
            ]);*/
            ?>
        </div>
        <div class="col-4">
            <?

           /* echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => \zetsoft\widgets\market\ZMarketCardsWidget::type['featureVertical'],
                ],
                'model' => $item
            ]);*/
            ?>
        </div>
    </div>

<?php


/*echo ZMarketCardsWidget::widget([
    'config' => [
        'type' => \zetsoft\widgets\market\ZMarketCardsWidget::type['featureHorizontal'],
    ],
    'model' => $item
]);*/
/*
echo ZMarketCardsWidget::widget([
    'config' => [
        'type' => \zetsoft\widgets\market\ZMarketCardsWidget::type['bestDeals'],
    ],
    'model' => $item
]);

echo ZMarketCardsWidget::widget([
    'config' => [
        'type' => \zetsoft\widgets\market\ZMarketCardsWidget::type['counterCard'],
    ],
    'model' => $item
]);*/
