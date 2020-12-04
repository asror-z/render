<!--Zoirjon Sobirov['linus']-->
<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb31Widget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

/*echo "value first map";
echo "<pre>";
print_r($model->jsonb_10);
echo "</pre>";*/
echo ZGoogleDb31Widget::widget([
    'config' => [
        'data' => [3, 16,17,18],
        'height' => 500,
        'width' => 800,
        'searchAutoComplete' => true,
        'searchPlaceImageShow' => false,
        'zoom' => 12,
        'markerCount' => 5,
        'limitWayPoints' => 10,
        'draggable' => true,
        'mapUseType' => 'read',
        'depend' => 'coreinput-string_9',
    ]
]);


$this->activeEnd();




?>
