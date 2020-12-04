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
            \zetsoft\widgets\inputes\ZKStarRatingWidget::class,
            \zetsoft\widgets\inputes\ZKSortableWidget::class,
            \zetsoft\widgets\inputes\ZKSwitchInputWidget::class,
            \zetsoft\widgets\inputes\ZKTouchSpinWidget::class,
            \zetsoft\widgets\inputes\ZKTimePickerWidget::class,
        ],
    ]
]);

echo $page;
ZGrapesJsWidget::end();
