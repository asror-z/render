<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\widgets\cards\ZMarketCardsWidget;
use zetsoft\widgets\cards\ZTabItemWidget;


echo ZMarketCardsWidget::widget([
    'config' => [
        'type' => \zetsoft\widgets\market\ZMarketCardsWidget::type['featureUniversal'],
    ],
    'model' => $product
]);
