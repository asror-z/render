<?php


use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;

// use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZIframeSpaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;


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
