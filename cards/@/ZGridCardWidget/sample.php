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
use zetsoft\widgets\cards\ZGridCardWidget;


echo ZGridCardWidget::widget([
    'model' => Az::$app->market->product->allProducts(35)[0],
]);
