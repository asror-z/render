<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use yii\data\ActiveDataProvider;
use zetsoft\models\shop\ShopProduct;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZListViewWidgetD;

$model = Az::$app->market->product->allProducts();

echo ZListViewWidgetD::widget([
    'model' => $model
]);
