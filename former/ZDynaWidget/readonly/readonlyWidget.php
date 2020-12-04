<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\user\User;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
/** @var ZView $this */

//start|JakhongirKudratov|2020-10-10

$action = new WebItem();

//end|JakhongirKudratov|2020-10-10

$action->title = Azl . 'Пользователь';

$action->icon = 'fa fa-graduation-cap';
$action->icon =true;
$this->csrf = true;
$action->type = WebItem::type['html'];



$model = new User();

$model->configs->readonlyWidget = [
    'role' => false,
    'email' => true
];

/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
]);










