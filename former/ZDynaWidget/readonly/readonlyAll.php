<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\user\User;
use zetsoft\models\user\UserCompany;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetCard;

/** @var ZView $this */
//start|JakhongirKudratov|2020-10-10

$action = new WebItem();

//end|JakhongirKudratov|2020-10-10

$action->title = Azl . 'Пользователь';


$model = new UserCompany();

$model->configs->readonlyAll = true;
$model->column();


/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
]);










