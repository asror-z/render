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
            \zetsoft\widgets\inputes\ZHPasswordInputWidget::class,
            \zetsoft\widgets\inputes\ZHRadioButtonGroupWidget::class,
            \zetsoft\widgets\inputes\ZHTextareaWidget::class,
            \zetsoft\widgets\inputes\ZIconPickerWidget::class,
            \zetsoft\widgets\inputes\ZImageCheckboxWidget::class,
        ],
    ]
]);

echo $page;

ZGrapesJsWidget::end();
