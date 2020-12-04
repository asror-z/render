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
use zetsoft\system\Az;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\helpers\ZStringHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\former\ZGrapesJsWidget1;
use zetsoft\widgets\former\ZGrapesJsWidget_JK;
use zetsoft\widgets\former\ZGrapesJsWidget_JK_2;
use zetsoft\widgets\former\ZGrapesJsWidget_M;
use zetsoft\widgets\former\ZGrapesJsWidgetAzimjon;
use zetsoft\widgets\navigat\ZButtonWidget;


/** @var ZView $this */

Az::$app->params['widget'] = true;


$folders = [
    'former',
    'animo',
    'inputes'
];


echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajaxGrapes',
        'dataType' => 'html',


    ],
    'event' => [
        'success' => <<<JS
        function(responce) {
             $(".gjs-traits-label").html(responce);
        }
JS,
        'error' => <<<JS
        function(error) {
            console.log(error);
        }
JS,

    ]

]);

echo ZGrapesJsWidget_JK_2::widget([
    'config' => [
        'autoAdd' => '1',
        'dropzone' => '0',
        'categories' => $folders
    ],
    'event' => [
        'component:add' => <<<JS
    function (event) {
        console.log(e);
    }
JS,

        'component:selected' => <<<JS
   function (event) {
            $(".gjs-traits-label").html('');
            $(".fa.fa-cog").click();
            
            let className = e.attributes.name;
            ajaxGrapes('/core/tester/grapes/forms2.aspx?className='+className);
            
             $('form').change(function() {
                $('#sendOptions').click();
             });
            $('#sendOptions').click(function() {
              $.ajax({      
                type: "GET",
                url: '/core/widget/widget2.aspx?' + $('#activeForm').serialize() + '&widget=' + className,
                success: function(data) {       
                    e.set('content', data);
                },
              });
          });
        }
JS,


    ]

]);


?>

