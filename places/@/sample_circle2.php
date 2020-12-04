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


use zetsoft\widgets\places\ZAmchartWidget;


$datas = Az::$app->App->eyuf->main->statbycounty();
$table = Az::$app->App->eyuf->main->table();
$counts = Az::$app->App->eyuf->main->countsbycounty();

echo ZAmchartWidget::widget([
    'config' => [
        'table' => $table,
        'value' => $counts,
        'colorForEmpty' => true
    ]
]);
