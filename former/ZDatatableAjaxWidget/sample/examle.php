<?php

use zetsoft\dbitem\data\TabItem;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZDatatableAjaxWidget;

/* @var Zview $this */
$model = new User();

$modelClass = basename($model->clazz);

echo ZDatatableAjaxWidget::widget([
    'model' => $model,
    'config' => [
        'ajaxUrl' => '/api/ajax/dataTableData.aspx',
        'modelClass' => $modelClass
    ]
]);


/*$users = User::findOne(118);

$items = [];
foreach ($users as $user) {

    $item = new TabItem();
    $item->name = $users->name;
    $item->label = $users->title;
    $item->url = $users->role;

    $items[] = $item;
}
echo $items;*/
