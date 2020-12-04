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

$model = new ProductItemForm();

$data = Az::$app->market->product->getProductItemForm();
$this->pjaxBegin();
echo ZProductTabsOnlyWidget::widget([
    'model' => $model,
    'data' => $data,
    'config' => [
        'pager' => ZProductTabsOnlyWidget::type['link'],
    ]
]);
$this->pjaxEnd();
