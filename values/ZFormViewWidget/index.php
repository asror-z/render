<?php


use zetsoft\models\App\eyuf\EyufCompatriot;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
/** @var ZView $this */

$action->title = Azl . 'Список Соотечественники';

$action->icon = 'fa fa-graduation-cap';

$action->icon =true;
$action->type = WebItem::type['html'];


$model = new EyufCompatriot();
//$model->configs->edit=false;

/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
    /*'config' => [
        'title' => 'Cтипендианты',
        'topCreate' => false,
        'actionDelete' => false,
        'actionClone' => false,
        'edit' => false,
        'columnAction' => false,
        'search' => false,

    ],*/
]);










