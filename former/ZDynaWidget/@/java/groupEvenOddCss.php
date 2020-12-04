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

$model->configs->groupEvenCssClasses=[
    'rating_option' => 'p-5',
    'text' => 'p-5',
];

$model->configs->groupOddCssClasses=[
    'rating_option' => 'random',
    'text' => true,
];

$model->columns();
echo ZDynaWidget::widget([
    'model' => $model,

]);

