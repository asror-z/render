<?php

use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;


?>

    <textarea id="text"></textarea>

<?


echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajax',
    ],

    'event' => [
        'complete' => <<<JS
            function (text) {
            
            var texts = text.responseText;
                console.log(texts);
                
                var value = JSON.parse(texts);
                
                //console.log(value[1]);
                
                $('#text').text(text.responseText);
                $('#okButton').text(text.responseText);
                
                //console.log($('#okButton'));
            }
JS,
    ],

]);


echo ZButtonWidget::widget([
    'id' => 'okButton',
    'event' => [
        'click' => <<<JS
        function () {
         ajax('/core/tester/detail/ajax.aspx?id=35');
    }
JS
    ],
]);



