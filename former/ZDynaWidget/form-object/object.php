<?php

/**
 * @author NurbekMakhmudov &&  Xolmat Ravshanov
 */

use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\FormDb;
use zetsoft\former\calls\CallStatsForm;
use zetsoft\system\Az;
use zetsoft\models\place\PlaceAdress;
use zetsoft\widgets\former\ZDynaWidgetRav;
use zetsoft\widgets\former\ZDynaWidget;

$model = new CallStatsForm();

$model->configs->orderCheck = true;
$model->configs->editClass = FormDB::editClass['sweetAs'];
$model->configs->type = Config::type['object'];

$model->columns();

// form to'ldirayapdi service
$data = Az::$app->calls->stats->agentCallStast();

echo ZDynaWidget::widget([
    'model' => $model,
    'data' => $data,
    'type' => ZDynaWidget::type['form'],
    'config' => [
        'hasToolbar' => true,
    ],
]);
