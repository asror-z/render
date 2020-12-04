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
use zetsoft\widgets\former\ZGrapesJsWidget_Mirbosit;
use zetsoft\widgets\menus\ZMmenuWidget;

/** @var ZView $this */
$this->title = Az::l('Конструктор сайтов');

$page = '';
$path = Az::$app->App->eyuf->grapes->getPath($this->httpGet('path'));

if(file_exists($path))
    $page = $this->renderAjaxFile($path);

ZGrapesJsWidget_Mirbosit::begin([
    'config' => [
        'widgets' => [
           ZMmenuWidget::class
        ],
    ]
]);

echo $page;

ZGrapesJsWidget_Mirbosit::end();
