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
use zetsoft\widgets\cards\ZMarketCardsOnlyWidget3;


echo zetsoft\widgets\market\ZProductTabsOnlyWidget2::widget([
    'model' => Az::$app->market->product->allProducts(35),
    'config' => [
        'pager'=>zetsoft\widgets\market\ZProductTabsOnlyWidget2::type['link'],
        'widget' => zetsoft\widgets\market\ZProductCardWidget::class,
    ]]);


