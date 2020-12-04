<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZListViewWidgetForScroll;
use zetsoft\widgets\former\ZListViewWidgetD1;

$model = new \zetsoft\models\place\PlaceAdress();
//vdd(Az::$app->controller->module->id.Az::$app->controller->id.Az::$app->controller->actionId);
echo ZListViewWidgetForScroll::widget([
    'model' => $model,
    'config' => [
        'type' => ZListViewWidgetForScroll::type['model'],
        'itemView' => function ($model, $key, $index, $widget){
            return $model->name;
        }
    ]
]);
