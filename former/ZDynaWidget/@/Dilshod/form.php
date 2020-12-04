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

$model = new ProductItemForm();
$model->configs->spa = false;
$data = [];

$item = new ProductItemForm();
$item->name = 'fds';
$item->id = 1;

$data[] = $item;

echo ZDynaWidget::widget([
    'model' => $model,
    'data' => $data,
    'config' => [
        'type' => 'form'
    ]
]);
