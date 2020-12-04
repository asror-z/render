<?php


use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZUrl;

// use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZIframeSpaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;


/** @var ZView $this */

$this->pjaxBegin();

echo date("Y-m-d H:i:s");



echo ZIframeSpaWidget::widget([
    'model' => $this->model,
    'config' => [
        'url' => ZUrl::to([
            '/crud/shop-order/update',
            'id' => 2029
        ]),
        'key' => 2029,
        'funcName' => 'dynaUpdate',
        'type' => ZIframeSpaWidget::type['update'],
        'height' => '700px',
        'width' => '1200px',
        'title' => 'Update',
        'src' => '/render/former/ZDynaWidget/assets/img/edit.svg',
        'img' => true,
        'hasIcon' => false,
        'icon' => 'fa'
    ]
]);

ZSweetAlert2Widget::begin([
    'grapesWrap' => false,
    'config' => [
        'grapes' => false,
        'funcName' => 'dynaUpdate',
        'width' => 'auto',
        'height' => 'auto',
        'begin' => true,
        'allowOutsideClick' => 0,
        'showCloseButton' => true,
        'footer' => '',
        'padding' => '0',
    ],
]);

?>

    <iframe id="dynaIframe"></iframe>

<?php

ZSweetAlert2Widget::end();


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
