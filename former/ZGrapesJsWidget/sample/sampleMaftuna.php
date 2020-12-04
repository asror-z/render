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
use zetsoft\widgets\former\ZGrapesJsWidget1;
use zetsoft\widgets\former\ZGrapesJsWidgetMaftuna;

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

?>

<div id="widget"></div>


<?


echo ZGrapesJsWidgetMaftuna::widget([
    'config' => [
        'autoAdd' => '1',
        'dropzone' => '0',
    ],

    'event' => [
        'component:selected' => <<<JS
        function (event) {
                $(".fa.fa-cog").click();
                  ajaxGrapes('/core/tester/grapes/forms.aspx?id='+e.ccid);
            var id=e.ccid;
            
             $("#grButton").click(function () {
                
            var grElId =$("#myID").val();
            var val=$("#grInput").val();
            
            if (e.ccid===grElId){
            e.set('content', val);
           
            }
            /*else alert('wrong id')*/
            
            
        });
        
        
       
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
