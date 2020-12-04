<?php

use zetsoft\models\page\PageAction;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;


/** @var ZView $this */
$this->pjaxBegin();

echo ZKSelect2Widget::widget([
    'name' => 'sdafsa',
    'data' => [
        'sadfasd',
        '14321543',
    ]
]);


echo date("Y-m-d H:i:s");

echo ZButtonWidget::widget([
    'config' => [
        'title' => 'Ссылка',
        'icon' => 'fas fa-external-link-alt',
        'pjax' => 1,
        'url' => '',
        'btnRounded' => false,
        'btn' => false,
        'hasIcon' => true,
    ],
    'active' => [
        'click' => false,
        'mousedown' => true,
        'mouseup' => true,
        'mouseover' => true,
        'mousemove' => true,
        'mouseout' => true,
        'dragstart' => true,
    ],
    'event' => [
        'click' => <<<JS
function(event){
console.log('ZButtonWidget | click')
 alert ('click');
}

JS,
        'mousemove' => <<<JS
function(event){
console.log('mousemove MY')
}

JS,
        'mouseout' => <<<JS
function(event){
console.log('mouseout MY')
}

JS,
    ],
]);


$this->pjaxEnd();
