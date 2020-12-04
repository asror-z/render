<?php


use zetsoft\dbitem\data\FormDb;
use zetsoft\models\ALL\Lang;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetNNew;
use zetsoft\widgets\inputes\ZKSelect2Widget;


$action->title = Azl . 'Список Переводы';
$action->icon = 'fa fa-film';

$model = new Lang();

$model->configs->columnID = false;
$model->configs->actionClone = false;
$model->configs->topCreate = false;
$model->configs->topDelete = false;
$model->configs-> = false;



/** @var ZView $this */
echo ZDynaWidgetNNew::widget([
    'model' => $model,
    //  'names' => [],
    //  'namesEx' => [],
    //  'before' => [],
    //  'after' => [],
]);










