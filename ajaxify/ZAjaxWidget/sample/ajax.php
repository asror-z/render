<?php

use zetsoft\widgets\ajaxify\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;


?>



    <textarea id="text"></textarea>

    <button class="btn btn-info" id="buttonTest">button</button>

<?




echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajax',
        'url' => '/test/metrika/test3.aspx',
    ],

    'event' => [
        'success' => <<<JS
            function (text) {
                //var value = JSON.parse(text.responseText);
                //console.log(value[1]);
                $('#text').text(text.responseText);
                //console.log(text.responseText);
                $('#okButton').text(text.responseText);
                //console.log($('#okButton'));
            }
JS,

      'done' => <<<JS
        
        setTimeout(function() {
        $('#buttonTest').click()
        
        }, 5)
        
    
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
        function (text) {
         ajax();
    }
JS
    ],
]);


 ?>

