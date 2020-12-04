    <?php

use zetsoft\widgets\ajaxify\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidget2;

echo ZButtonWidget::widget([
    'config' => [
        'text' => 'ajax2',
        'ajax' => true,
        'url' => '/core/tester/umid/serverside.aspx',
        'type' => ZAjaxWidget::type['get'],
        'data' => "name : 'Yan', surname : 'Oblak'"
    ],
    'event' => [
        'click' => "function() {
            console.log('asd')
        }"
    ]
]);
