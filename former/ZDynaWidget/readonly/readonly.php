<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\user\User;
use zetsoft\models\user\UserCompany;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
/** @var ZView $this */

//start|JakhongirKudratov|2020-10-10

$action = new WebItem();

//end|JakhongirKudratov|2020-10-10

$action->title = Azl . 'Пользователь';





$model = new UserCompany();

//start|JakhongirKudratov|2020-10-10

$model->configs->readonly = [
    'name',
    'role',
    'sex' ,
    'status',
    'email'
];
$model->columns();

//end|JakhongirKudratov|2020-10-10

/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
]);










