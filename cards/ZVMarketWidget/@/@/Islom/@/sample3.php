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
use zetsoft\widgets\cards\newWidgets\ZVerticalCardWidget3;

echo ZVerticalCardWidget3::widget([
    'model' => Az::$app->market->product->allProducts(35),
    'config' => [
        'itemName' => 'vvvvvv'
    ]
]);
