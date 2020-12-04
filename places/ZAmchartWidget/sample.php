<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\places\ZAmchartWidget;


/** @var ZView $this */

//$action->title = Azl . 'Карта';

$datas = Az::$app->App->eyuf->main->statbycounty();
$table = Az::$app->App->eyuf->main->table();
$counts = Az::$app->App->eyuf->main->countsbycounty();

$name = Az::$app->App->eyuf->main->getNames();

echo ZAmchartWidget::widget([
    'config' => [
        'table' => $table,
        'value' => $counts,
        'name' => $name,
        'colorForEmpty' => false
    ]
]);
