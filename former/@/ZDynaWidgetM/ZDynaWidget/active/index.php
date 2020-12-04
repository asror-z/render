<?php


use zetsoft\models\user\User;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZKDynaGridNewWidget;
use zetsoft\widgets\former\ZDynaWidget;


$action->title = Azl . 'Список Пользователь';
$action->icon = 'fa fa-birthday-cake';

$model = new User();

/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,

]);










