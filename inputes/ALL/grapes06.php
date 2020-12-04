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
            \zetsoft\widgets\inputes\ZKDatecontrolWidget::class,
            \zetsoft\widgets\inputes\ZKDatepickerWidget::class,
            \zetsoft\widgets\inputes\ZKDateRangePickerWidget::class,
            \zetsoft\widgets\inputes\ZKDateTimePickerWidget::class,
            \zetsoft\widgets\inputes\ZKDepDropWidget::class,
        ],
    ]
]);

echo $page;
ZGrapesJsWidget::end();
