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
                var value = JSON.parse(text.responseText);
                //console.log(value[1]);
                $('#text').text(text.responseText);
                console.log(text.responseText);
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
        function (text) {
         ajax('/ravshan/ravshan/notify.aspx?id=10');
    }
JS
    ],
]);



