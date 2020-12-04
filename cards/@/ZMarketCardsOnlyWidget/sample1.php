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
use zetsoft\widgets\market\ZProductTabsWidget;



echo zetsoft\widgets\cards\ZProductTabsOnlyWidget::widget([
    'model' => Az::$app->market->product->allProducts(35),
    'config' => [
        'pager'=>zetsoft\widgets\cards\ZProductTabsOnlyWidget::type['link'],
        'widget' => zetsoft\widgets\cards\ZProductCardWidget::class,
    ]]);


