<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\former\shop\ProductItemForm;
use zetsoft\system\Az;
use zetsoft\widgets\cards\ZProductTabsOnlyWidget;
use zetsoft\widgets\cards\ZProductTabsOnlyWidgetD;

$model = new ProductItemForm();

$data = Az::$app->market->product->getProductItemForm();

echo ZProductTabsOnlyWidgetD::widget([
    'model' => $model,
    'data' => $data,
    'config' => [
        'pager' => ZProductTabsOnlyWidgetD::type['link'],
    ]
]);
