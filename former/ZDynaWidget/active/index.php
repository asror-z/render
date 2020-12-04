<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\core\CoreSetting;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
/** @var ZView $this */


$action = new WebItem();

$action->title = Azl . 'Настройки';

$action->icon = 'fa fa-gift';
$action->icon =true;
$action->type = WebItem::type['html'];

$model = new \zetsoft\models\user\User();

/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
]);
