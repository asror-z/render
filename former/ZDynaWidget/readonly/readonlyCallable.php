<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\user\User;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;


/** @var ZView $this */


$action = new WebItem();

$action->title = Azl . 'Пользователь';

$action->icon = 'fa fa-graduation-cap';
$action->icon =true;
$action->type = WebItem::type['html'];



$model = new User();


$model->configs->readonly = function ($model, $key) {

    if ($model->status === 'online') {
        return true;
    }

    return false;

};

/** @var ZView $this */

echo ZDynaWidget::widget([
    'model' => $model,
]);










