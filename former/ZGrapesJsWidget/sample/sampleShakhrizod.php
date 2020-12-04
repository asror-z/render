<?php

use zetsoft\models\page\PageAction;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZGrapesJsWidgetShakhrizod;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;

/** @var ZView $this */
$action->icon =false;
$this->grape=true;

Az::$app->params['widget'] = true;

$actionId = $this->httpGet('key');
$PageAction = PageAction::findOne($actionId);

$name = 'ALL/core/widget/class';

if ($PageAction)
    $name = $PageAction->name;

$path = Root . '/webhtm/' . $name . '.php';
$path = str_replace('\\', '/', $path);


$assets = $this->viewAsset($path);
$pregs = Az::$app->utility->pregs;

$scripts = ZArrayHelper::getValue($pregs->pregMatchAll($assets, '<script src="(.*?)".*?>'), 1);
$links = ZArrayHelper::getValue($pregs->pregMatchAll($assets, '<link href="(.*?)".*?>'), 1);

$page = $this->renderFile($path);

ZGrapesJsWidgetShakhrizod::begin([
    'config' => [
        'scripts' => $scripts,
        'styles' => $links,
        'categories' => [
            'former',
            'inputes',
            'columns'
        ],
        'saveFile' => $path
    ]
]);

echo $page;

ZGrapesJsWidgetShakhrizod::end();

$this->title = Az::l('Конструктор сайтов');
