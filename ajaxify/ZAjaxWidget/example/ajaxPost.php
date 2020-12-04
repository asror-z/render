<?php

use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;


?>



    <textarea id="text"></textarea>

    

<?




echo \zetsoft\widgets\ajaxify\ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajax',
        'url' => '/api/cpas/lead/set-lead.aspx',
        'type' => \zetsoft\widgets\ajaxify\ZAjaxWidget::type['post'], //"POST", "GET", "PUT"
        'data' => [
            'a' => 'b'
        ],
    ],

    'event' => [
        'success' => <<<JS
            $('#text').text(event);   
JS,


      'error' => <<<JS
        
      console.log(event);
        
    
JS,

    ],

]);


echo ZButtonWidget::widget([
    'id' => 'okButton',
    'config' => [
        'text' => 'Button2'
],
    'event' => [
        'click' => <<<JS
     
         ajax();
    
JS
    ],
]);


 ?>

