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
use zetsoft\widgets\former\ZGrapesJsWidget;


// ]);


echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajaxOptions',
    ],
    'event' => [
        'complete' => <<<JS
        function(data) {
            $('.fa-cog').click();
            $(".gjs-traits-label").html(data.responseText);
        }
JS,
    ]

]);



echo ZGrapesJsWidget::widget([
    
    'event' => [
        'component:selected' => <<<JS
        function() {
            /*ajaxOptions('/ravshan/ravshan/option.aspx');*/
              /*   $(".fa.fa-cog").click();
                 console.log(e)
                     ajaxGrapes('/render/Former/Grapes/forms.php?id='+e.ccid);
            var id=e.ccid;
            
            $("#grButton").click(function () {
                
             var grElId =$("#myID").val();
             var val=$("#grInput").val();
            
            if (e.ccid===grElId){
             e.set('content', val);
           
             }
             else alert('wrong id')
           
            
        });*/
     
        }

JS,
    ],

]);


