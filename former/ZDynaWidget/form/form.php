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
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetD;

$model = new ProductItemForm();
$model->configs->spa = false;
$data = [];

$item = new ProductItemForm();
$item->name = 'fds';
$item->id = 1;

$data[] = $item;

$item = new ProductItemForm();
$item->name = 'trfuy';
$item->id = 2;

$data[] = $item;

echo ZDynaWidget::widget([
    'model' => $model,
    'data' => $data,
    'type' => ZDynaWidget::type['form'],
    
]);
