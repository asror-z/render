<?php

use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZAjaxWidgetNewElbek;
use zetsoft\widgets\navigat\ZButtonWidget;


echo ZAjaxWidgetNewElbek::widget([
    'config' => [
        'func' => 'ajax',
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
        'click' => "ajax()"
    ],
]);
