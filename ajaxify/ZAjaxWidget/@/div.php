<?php

use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

?>
    <div id="widget"></div>


<?

echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajax',
        'url' => '/ravshan/ravshan/ajax.aspx?hello=58',
        'data' => '',
    ],

    'event' => [
        'complete' => <<<JS
            function a(jqXHR, textStatus) {
                $('#widget').html()
            }
JS,
    ],

]);



echo ZButtonWidget::widget([
    'event' => [
        'click' => "ajax"
    ],
]);
