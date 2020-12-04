<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use yii\data\Sort;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\system\Az;
use zetsoft\widgets\cards\ZMarketCardsOnlyWidget;
use zetsoft\widgets\former\ZListViewWidget;
use zetsoft\widgets\former\ZListViewWidgetOld;
use zetsoft\widgets\former\ZListViewWidgetD;
use zetsoft\widgets\former\ZListWidget;

$model = new ProductItemForm();
$data = Az::$app->market->product->getProductItemForm();

echo ZListViewWidget::widget([
    'model' => $model,
    'data' => $data
]);

