<?php
/**
 * @author JakhongirKudratov
 */

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

$model = new \zetsoft\models\user\User();

/** @var ZView $this */
echo ZDynaWidgetJahongir::widget([
    'model' => $model,
    'config' => [
        'columnBefore' => [
            'enum'
        ],
        //start|JakhongirKudratov|2020-10-10

        'enumAttr' => 'gender',
        'enum' => [
            'male' => '<span class="text-primary">male</span>',
            'female' => '<span class="text-danger">female</span>'
        ],
        'enumFilter' => [
            'male' => 'male',
            'female' => 'female',
        ]

        //end|JakhongirKudratov|2020-10-10

    ]

]);
