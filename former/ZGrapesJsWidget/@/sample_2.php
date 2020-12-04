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

use yii\web\JsExpression;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use testing\Former\Grapes\forms;

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


echo ZGrapesJsWidget::widget([
    'config' => [
        'autoAdd' => '1',
        'dropzone' => '0',
    ],

    'event' => [
        'component:selected' => <<<JS
        function (event) {
        ajaxGrapes('/render/Former/Grapes/forms.php?id='+e.ccid);
            var id=e.ccid;
        
            
             $("#grButton").click(function () {
            
            var grElId =$("#myID").val();
            var val=$("#grInput").val();
            if (e.ccid===grElId){
            e.set('content', val);
            
            }
            
            
        });
        
      
       
        }

JS,
       /*'component:add' => <<<JS
          function (event) {
        ajaxGrapes('/render/Former/Grapes/forms.php?id='+e.ccid);
       
         $("#grButton").click(function () {
            var grElId =$("#myID").val();
            var val=$("#grInput").val();
            if (e.ccid===grElId){
            e.set('content', val);
            
            }
            
            
        });
        
       alert(e.ccid);

        }

JS,*/
    ]
]);

