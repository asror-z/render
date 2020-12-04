<?php

use zetsoft\widgets\former\ZAjax2Widget;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;


?>



    <textarea id="text"></textarea>

    <button class="btn btn-info" id="buttonTest">button</button>

<?




echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajax',
        'url' => '/core/tester/ajax/test.aspx',
        'type' => ZAjaxWidget::type['get'], //"POST", "GET", "PUT"
        'data' => [
            'item1' => 'aaaa',
            'item2' => json_encode(['0000','1111','2222','3333']),
        ]
    ],


    'event' => [
        'success' => <<<JS
            function (data) {
                console.log(data);
                //var value = JSON.parse(text.responseText);
                //console.log(value[1]);
                $('#text').text(data);
                //console.log(text.responseText);
                $('#okButton').text(data);
                //console.log($('#okButton'));
            }
JS,


    ],

]);


echo ZButtonWidget::widget([
    'id' => 'okButton',
    'event' => [
        'click' => <<<JS
        function (text) {
         ajax();
    }
JS
    ],
]);


 ?>

