<?php


use zetsoft\models\user\User;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
/** @var ZView $this */

$action->title = Azl . 'Пользователь';

$action->icon = 'fa fa-graduation-cap';
$action->icon =true;
$this->csrf = true;
$action->type = WebItem::type['html'];



$model = new User();

$model->configs->readonlyWidgetAll = true;

/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
]);










