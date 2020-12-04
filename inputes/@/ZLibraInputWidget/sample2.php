<?php

use zetsoft\models\shop\ShopOrder;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZInputBtnWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZLibraInputWidget;
use zetsoft\system\kernels\ZActiveTrait;
use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\data\Config;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZFormWidgetA;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\widgets\themes\ZCardWidget;

/** @var ZView $this */

/*$id = $this->httpGet('id');*/
$model = ShopOrder::findOne(54);

$model->configs->nameOn = [
    'weight'
];


$model->configs->widget = [
    'weight' => ZHInputWidget::class,
];
$model->configs->options = [
    'weight' => [
        'config' => [
            'buttonText' => Azl."Обновить",
            'type' => ZInputWidget::type['text'],
            'class'=>'clickme',
            'inputId'=> '#test',


        ],
    ],
];


if ($this->modelSave($model)) {
    $this->paramSet(paramIframe, true);
    $this->urlRedirect(['onComplect', false]);
}

$model->columns();

$form = $this->activeBegin();

echo ZLibraInputWidget::widget([
    'config' => [
        'funcName' => 'libra',
        'inputSelector' => '#shoporder-weight',
        'buttonSelector' => '#w15',
    ]
]);


echo ZLibraInputWidget::widget([
    'config' => [
        'funcName' => 'libra',
        'inputSelector' => '#shoporder-weight',
        'buttonSelector' => '#w13',
    ]
]);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'isCard' => false,
        'topBtn' => false,
    ],
    'event' => [
        'formOpen' => 'libra'
    ]
]);


$this->activeEnd();
?>



 <script>

/*     $( "clickme" ).click(function() {
         $( "#shoporder-weight" ).toggleAttribute(readonly);
     });*/

 </script>
