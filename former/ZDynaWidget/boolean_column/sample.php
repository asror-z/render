<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\core\CoreSetting;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetJahongir;

/** @var ZView $this */

$action = new WebItem();
$action->title = Azl . 'Настройки';

$action->icon = 'fa fa-gift';
$action->icon =true;
$action->type = WebItem::type['html'];

//start|JakhongirKudratov|2020-10-10

$model = new \zetsoft\models\user\User();
$model->query = \zetsoft\models\user\User::find()
    ->where([
        'verified_email' => true
    ])
    ->orWhere([
        'verified_email' => false
    ]);

//end|JakhongirKudratov|2020-10-10

/** @var ZView $this */
echo ZDynaWidgetJahongir::widget([
    'model' => $model,
    'config' => [
        'columnBefore' => [
            'boolean'
        ],
        //start|JakhongirKudratov|2020-10-10
        
        'booleanAttr' => 'verified_email',

        //end|JakhongirKudratov|2020-10-10
    ]
]);
