<?php


use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\Order;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetJaxongir;

$model = new CoreAdvancedItem();


/*echo ZDynaWidget::widget([
    'model' => $model,

]);*/
$form = $this->activeBegin();

echo ZDynaWidgetJaxongir::widget([
    'model' => $model,
    'config' => [
        'columnRadio' => true
    ]
]);
$this->activeEnd();
