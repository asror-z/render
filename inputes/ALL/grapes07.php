<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
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
            \zetsoft\widgets\inputes\ZKNumberWidget::class,
            \zetsoft\widgets\inputes\ZKPasswordInputWidget::class,
            \zetsoft\widgets\inputes\ZKRangeInputWidget::class,
            \zetsoft\widgets\inputes\ZKSelect2Widget::class,
            \zetsoft\widgets\inputes\ZKSortableInputWidget::class,
        ],
    ]
]);

echo $page;
ZGrapesJsWidget::end();
