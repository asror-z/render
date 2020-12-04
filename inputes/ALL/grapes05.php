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
ZJqueryEmojiareaJsWidget
ZJqueryTextareafullscreenWidget
ZJqueryTextareaLibraryWidget
ZKCheckboxXWidget
ZKColorInputWidget
 * */

use zetsoft\system\Az;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\inputes\ZJqueryTextareaLibraryWidget;

$this->title = Az::l('Конструктор сайтов');

$page = '';
$path = Az::$app->App->eyuf->grapes->getPath($this->httpGet('path'));

if(file_exists($path))
    $page = $this->renderAjaxFile($path);

ZGrapesJsWidget::begin([
    'config' => [
        'widgets' => [
            \zetsoft\widgets\inputes\ZJqueryEmojiareaJsWidget::class,
            \zetsoft\widgets\inputes\ZJqueryTextareafullscreenWidget::class,
            ZJqueryTextareaLibraryWidget::class,
            \zetsoft\widgets\inputes\ZKCheckboxXWidget::class,
            \zetsoft\widgets\inputes\ZKColorInputWidget::class,
        ],
    ]
]);

echo $page;
ZGrapesJsWidget::end();

