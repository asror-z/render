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
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\inputes\ZSimpleCountableWidget;
use zetsoft\widgets\inputes\ZTinyCloudWidget;

/** @var ZView $this */

$action->icon =false;
$this->grape=true;
$getPath = str_replace(bname(Yii::$app->request->get('path')), 'content', Yii::$app->request->get('path'));
$path = Root . '\\' . $getPath  . '.php';
$page = '';
$path = str_replace('\\', '/', $path);

if(file_exists($path))
    $page = $this->renderAjaxFile($path);

ZGrapesJsWidget::begin([
    'config' => [
        'saveFile' => $path,
        'widgets' => [
            ZTinyCloudWidget::class
        ],
    ]
]);

echo $page;

ZGrapesJsWidget::end();
$this->title = Az::l('Конструктор сайтов');
