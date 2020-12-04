<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use zetsoft\models\shop\ShopReview;
use zetsoft\models\core\User;
use zetsoft\widgets\former\ZDynaWidget;

/** @var ShopReview $model */
$model = new ShopReview();

$model->configs->groups=[
    'rating_option',
    'text',
];

$model->configs->groupedRows=[
    'rating_option' => true,
    'text' => true,
];

$model->columns();
echo ZDynaWidget::widget([
    'model' => $model,

]);

