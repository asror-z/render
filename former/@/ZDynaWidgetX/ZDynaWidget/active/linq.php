<?php


use kartik\export\ExportMenu;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZKDynaGridNewWidget;
use zetsoft\widgets\former\ZDynaWidget;


$action->title = Azl . 'Список Пользователь';
$action->icon = 'fa fa-birthday-cake';


$docs = new EyufDocument();
$docs->query = EyufDocument::find()
    ->where([
        'need_verify' => true,
    ]);


$docs->configs->edits = [
    'verified',
];
$docs->configs->nameOnEx = [
    'need_verify',
    'correct',
    'cholar_id',
    'status',
];

echo ExportMenu::widget([
    'dataProvider' => $docs->search(),
]);


echo ZDynaWidget::widget([
    'model' => $docs,
    'config' => [
        'title' => Az::l('Cписок документов на подтверждение'),
        'actionEdit' => false,
        'topCreate' => false,
        'actionDelete' => false,
        'actionClone' => false,
        'actionView' => true,
        'columnAction' => false,
        'columnRelation' => false,
        'topSort' => false,
        'topFilter' => false,
        'topSetting' => false,

    ],
]);










