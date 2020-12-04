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
ZKTouchSpinWidget
ZKTreeInputWidget
ZKTypeaheadWidget
ZMultiJsWidget
ZPeriodPickerWidget
 * */

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
            \zetsoft\widgets\inputes\ZKTouchSpinWidget::class,
            \zetsoft\widgets\inputes\ZKTreeInputWidget::class,
            \zetsoft\widgets\inputes\ZKTypeaheadWidget::class,
            \zetsoft\widgets\inputes\ZMultiJsWidget::class,
            \zetsoft\widgets\inputes\ZPeriodPickerWidget::class,
        ],
    ]
]);

echo $page;
ZGrapesJsWidget::end();

