<?php

/**
 * @author NurbekMakhmudov
 */

use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\FormDb;
use zetsoft\former\calls\CallStatsForm;
use zetsoft\models\shop\ShopOrder;
use zetsoft\system\Az;
use zetsoft\models\place\PlaceAdress;
use zetsoft\widgets\former\ZDynaWidgetN;
use zetsoft\widgets\former\ZDynaWidgetRav;
use zetsoft\widgets\former\ZDynaWidget;


$model = new ShopOrder();

echo ZDynaWidget::widget([
    'model' => $model,
    'config' => [

    ],
]);


/*$model = new CallStatsForm();

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
        'columns' => [
            [
                'class' => '\kartik\grid\FormulaColumn',
                'value' => function ($model, $key, $index, $widget) {
                    $p = compact('model', 'key', 'index');
                    // Write your formula below
                    return $widget->col(3, $p) + $widget->col(4, $p);
                }
            ]
        ],
        'hasToolbar' => true,
    ],
]);*/
