<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\tree\TreeView;
use zetsoft\models\test\TestTreeProduct;
use zetsoft\models\test\TestTreeProductOdilov;

$model = TestTreeProductOdilov::findOne(1);
vdd($model->rules);

/*$model = new TestTreeProduct;
$model->id =1;
$model->root =1;
$model->lft =1;
$model->rgt =1;
$model->lvl =0;
$model->icon_type = 0;
$model->name ="root";*/
/*if (!$model->save()){

    vdd($model->errors);

}

    $models = TestTreeProduct::find()->all();
    vdd($models);*/

//$model->save();

echo TreeView::widget([
    'query' => TestTreeProductOdilov::find()->addOrderBy('root, lft'),
    'headingOptions' => ['label' => 'Categories'],
    'fontAwesome' => false,     // optional
    'isAdmin' => false,         // optional (toggle to enable admin mode)
    'displayValue' => 1,        // initial display value
    'softDelete' => true,       // defaults to true
    'cacheSettings' => [
        'enableCache' => true   // defaults to true
    ]
]);
