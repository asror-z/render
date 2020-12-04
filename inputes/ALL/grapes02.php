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
            \zetsoft\widgets\inputes\ZFontAwesomeIconPickerWidget::class,
            \zetsoft\widgets\inputes\ZHCheckboxButtonGroupWidget::class,
            \zetsoft\widgets\inputes\ZHCheckboxWidget::class,
            \zetsoft\widgets\inputes\ZHHiddenInputWidget::class,
            \zetsoft\widgets\inputes\ZHInputWidget::class,
        ],
    ]
]);

echo $page;

ZGrapesJsWidget::end();
