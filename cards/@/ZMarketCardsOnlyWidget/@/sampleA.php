<?php


/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\cards\ZProductTabsOnlyWidgetA;


echo ZProductTabsOnlyWidgetA::widget([
    'model' => Az::$app->market->product->allProducts(35),
    'config' => [
        'pager' => zetsoft\widgets\market\ZProductTabsOnlyWidget1::type['link'],
        'widget' => zetsoft\widgets\market\ZMarketCardsOnlyWidgetA::class,
    ]
]);


