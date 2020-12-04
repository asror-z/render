<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\grid\DataColumn;
use kartik\grid\GridView;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetD24;

$model = new User();

$model->configs->group = [
    'name',
    'phone',
    
];

$model->configs->groupedRow = [
    'name',
    'phone',

];






$model->columns();

echo "Ma'lumot kiritilgan katakchaga o'ng tomonidagi kiritilmaganlarini birlashtiradi";

echo ZDynaWidget::widget([
    'model' => $model,
    'config' => [
        'summary' => true,
    ]
]);
