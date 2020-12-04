<?php


use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZUrl;

// use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;


/** @var ZView $this */

$this->pjaxBegin();

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
