<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\dbdata\wdg\WidgetData;
use zetsoft\dbitem\grap\GrapeItem;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\former\ZGrapesJsWidget1;
use zetsoft\widgets\former\ZGrapesJsWidget_JK;
use zetsoft\widgets\former\ZGrapesJsWidget_JK_2;
use zetsoft\widgets\former\ZGrapesJsWidget_M;
use zetsoft\widgets\former\ZGrapesJsWidgetAzimjon;
use zetsoft\widgets\former\ZGrapesJsWidgetMuhriddin;
use zetsoft\widgets\navigat\ZButtonWidget;



/** @var ZView $this */

$this->grape=true;


echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajaxGrapes',

    ],
    'event' => [
        'complete' => <<<JS
        function (data) {
             $(".gjs-traits-label").html(data.responseText);
        }
JS,
    ]

]);

echo ZGrapesJsWidgetMuhriddin::widget([
    'config' => [
        'autoAdd' => '1',
        'dropzone' => '0',
        'categories' => [
            'former',
            'animo',
            'inputes'
        ]
    ],
    'event' => [
        'selector:add' => <<<JS
        function (e){
            console.log($(this));
            console.log(e);
        }
JS,

    ]

]);


