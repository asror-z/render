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


use zetsoft\dbitem\grap\GrapeItem;
use zetsoft\widgets\former\ZGrapesJsWidget;

$data  = [];

$item = new GrapeItem();
$item->label = 'safsa';
$item->category = 'cat';
$data[] = $item;


$item = new GrapeItem();
$item->label = '2222';
$item->category = 'c333at';
$data[] = $item;


$item = new GrapeItem();
$item->label = '1313131';
$item->category = '331';
$data[] = $item;


$item = new GrapeItem();
$item->label = '131';
$item->category = '13131';
$data[] = $item;



echo ZGrapesJsWidget::widget([


    'data' => $data

]);
