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
            \zetsoft\widgets\inputes\ZPrettyCheckboxWidget::class,
            \zetsoft\widgets\inputes\ZRadioButtonGroup::class,
            \zetsoft\widgets\inputes\ZRadioListWidget::class,
            \zetsoft\widgets\inputes\ZSelect2Widget::class,
            \zetsoft\widgets\inputes\ZSimpleCountableWidget::class,
        ],
    ]
]);

echo $page;
ZGrapesJsWidget::end();
