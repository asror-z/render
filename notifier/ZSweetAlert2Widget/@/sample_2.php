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


use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;
use zetsoft\widgets\notifier\ZSweetAlert2Widget_New;

echo ZSweetAlert2Widget_New::widget([
    'config' => [
        'funcName' => 'first',
        'title' => 'test title',
        'titleText' => 'test titleText',
        'text' => 'hi',

    ]
]);


echo ZButtonWidget::widget([
    'config' => [
        'text' => 'first',
        'btnStyle' => ZButtonWidget::btnStyle['btn-info'],


    ],

    'event' => [
      'click' => <<<JS
    function () {
           first()
    }
JS,

]
]);


?>


    <form>
        <input id="krill1">
        <input id="krill2">
    </form>

<script>
    $("#krill1").keypress(function (event) {
        var verified = String.fromCharCode(e.which).match(/[a-zA-Z-]/);
        if (verified) {
            e.preventDefault();
        }
    });

    $("#krill2").keypress(function (event) {
        var verified = String.fromCharCode(e.which).match(/[^а-яё]/ig,'');
        if (verified) {
            e.preventDefault();
        }
    });
</script>
