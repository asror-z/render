<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Form;
use zetsoft\former\shop\ProductItemForm;

use zetsoft\system\Az;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetD;


$model = Az::$app->forms->dynas->dynamicModel();
$data = Az::$app->forms->dynas->dynamicTest($model);

echo ZDynaWidget::widget([
    'model' => $model,
    'data' => $data,
    'type' => ZDynaWidget::type['form'],
]);
