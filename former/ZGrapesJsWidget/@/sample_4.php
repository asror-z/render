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


use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZGrapesJsOld3;



echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajaxIframe',
    ],
    'event' => [
        'complete' => <<<JS
        function (data) {
             $(".gjs-traits-label").html(data.responseText);
        }
JS,
    ]

]);


// echo ZAjaxWidget::widget([
//     'config' => [
//         'func' => 'ajaxGrapes',
//     ],
//     'event' => [
//         'complete' => <<<JS
//         function (data) {
//              $(".gjs-traits-label").html(data.responseText);
//         }
// JS,
//     ]

// ]);

echo ZGrapesJsOld3::widget([
    'config' => [
        'autoAdd' => '1',
        'dropzone' => '0',
    ],

    'event' => [
        'component:selected' => <<<JS
        function (event) {
                
            
        ajaxIframe('/ravshan/ravshan/option.aspx?class=ZKSelect2Widget::class');
            
        }
        
       
        

JS,

        /* 'component:mount' => <<<JS
   function (event) {
    if (e.opt.temporary)  {
      return false;
    }
       else{
        return  ajaxGrapes('/render/Former/Grapes/forms.php?id='+e.ccid);
       
        }
       
      
}

JS,*/
    ]
]);
