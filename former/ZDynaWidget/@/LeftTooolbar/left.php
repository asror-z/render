<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetLeftButtons;
use zetsoft\models\shop\ShopOrder;
use zetsoft\widgets\navigat\ZButtonAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = new ShopOrder();


$b = ZButtonWidget::widget([
    'config' => [
        'btnType' => ZButtonWidget::btnType['link'],
        'btnRounded' => true,
        'btnFloating' => false,
        'title' => Az::l('Word'),
        'toggle' => ZButtonWidget::toggle['tooltip'],

        'hasIcon' => true,
        'icon' => 'fa fa-file-word-o',
        'class' => 'btn-outline-success text-success pb-2 pt-2',
    ]
]);
$ajax = ZButtonAjaxWidget::widget([
    'config' => [
        'url' => '/core/product/setToCart.aspx',
        'type' => ZAjaxWidget::type['get'], //"POST", "GET", "PUT"
        'data' => '{id: $("#form").val()}',
    ],
    'event' => [
        'success' => <<<JS
    function x(data) {
        console.log(data)   
    }
JS,

    ]
]);

echo ZDynaWidget::widget([
    'model' => $model,
    'leftBtn' =>[
        'update' => [
            'content' => $b . $ajax,
            'options' => ['class' => 'btn-group p-1 mr-0 {btnSize} {iconSize}']
        ],
    ],
    'config' => [
        'columnBefore' => false,
        'columnAfter' => false,
    ]
    

]);
