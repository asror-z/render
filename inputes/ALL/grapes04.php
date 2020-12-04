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
use zetsoft\widgets\inptest\ZInputUniverseWidget;

$this->title = Az::l('Конструктор сайтов');

$page = '';
$path = Az::$app->App->eyuf->grapes->getPath($this->httpGet('path'));

if(file_exists($path))
    $page = $this->renderAjaxFile($path);

ZGrapesJsWidget::begin([
    'config' => [
        'widgets' => [
            \zetsoft\widgets\inputes\ZInputLatinWidget::class,
            \zetsoft\widgets\inputes\ZInputMaskWidget::class,
            ZInputUniverseWidget::class,
            \zetsoft\widgets\inputes\ZInputWidget::class,
            \zetsoft\widgets\inputes\ZjQueryCustomCaretWidget::class,
        ],
    ]
]);

echo $page;
ZGrapesJsWidget::end();
