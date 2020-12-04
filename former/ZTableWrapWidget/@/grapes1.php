<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\former\ZTableWrapWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

/** @var ZView $this */
$this->title = Az::l('Конструктор сайтов');
$action->icon =false;

$service = Az::$app->App->eyuf->grapes;

$path = $service->getPath($this->httpGet('path'));
$assets = $this->viewAsset($path);
$scripts = $service->getPathAssets($assets, 'scripts');
$styles = $service->getPathAssets($assets);

$page = '';
if(file_exists($path))
    $page = $this->renderPartFile($path);


ZGrapesJsWidget::begin([
    'config' => [
        'scripts' => $scripts,
        'styles' => $styles,
        'widgets' => [
            ZTableWrapWidget::class
        ],
    ]
]);

echo $page;

ZGrapesJsWidget::end();


