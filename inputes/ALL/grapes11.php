<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

/*
ZTelInputWidget
ZTextAreaWidget
ZTinyCloudWidget
 */

use zetsoft\system\Az;
use zetsoft\widgets\former\ZGrapesJsWidget;

$this->title = Az::l('Конструктор сайтов');

$page = '';
$path = Az::$app->App->eyuf->grapes->getPath($this->httpGet('path'));

if(file_exists($path))
    $page = $this->renderAjaxFile($path);

ZGrapesJsWidget::begin([
    'config' => [
        'widgets' => [
            \zetsoft\widgets\inputes\ZTelInputWidget::class,
            \zetsoft\widgets\inputes\ZTextAreaWidget::class,
            \zetsoft\widgets\inputes\ZTinyCloudWidget::class,
        ],
    ]
]);

echo $page;
ZGrapesJsWidget::end();

