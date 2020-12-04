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

use zetsoft\models\page\PageAction;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZGrapesJsWidgetAbdulloh_Mirbosit;

/** @var ZView $this */

$action->icon =false;
Az::$app->params['widget'] = true;

$actionId = $this->httpGet('key');
$PageAction = PageAction::findOne($actionId);

$path = Root . '/webhtm/ALL/core/widget/class.php';
$path = str_replace('\\', '/', $path);
$page = $this->renderAjaxFile($path);

ZGrapesJsWidgetAbdulloh_Mirbosit::begin([
    'config' => [
        'saveFile' => $path
    ]
]);

echo $page;

ZGrapesJsWidgetAbdulloh_Mirbosit::end();
$this->title = Az::l('Конструктор сайтов');
