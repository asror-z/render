<?php

/**
 * @author NurbekMakhmudov &&  Xolmat Ravshanov
 */

use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\FormDb;
use zetsoft\models\place\PlaceAdress;
use zetsoft\widgets\former\ZDynaWidgetRav;
use zetsoft\widgets\former\ZDynaWidget;

$model = new PlaceAdress();

$model->configs->orderCheck = true;
$model->configs->editClass = FormDB::editClass['sweetAs'];
$model->configs->type = Config::type['object'];

$model->columns();

echo ZDynaWidget::widget([
    'model' => $model,
]);
