<?php

use zetsoft\system\Az;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlert2ColumnWidget;
use zetsoft\widgets\notifier\ZSweetAlertWidget;
use zetsoft\widgets\places\ZGoogleWidgetKH;



echo ZSweetAlertWidget::widget([
    'config' => [
        'type' => ZSweetAlertWidget::type['html'],
        'functionName'=> 'html',
        'title' => '<strong>Title</strong>',
        'text' => 'text',
        'html' => '',
        'footer' => '<strong>some text</strong>',
        'width' => 600,
        'padding' => '10px',
        'scrollbarPadding' => 'undifiend',
        'icon' => ZSweetAlertWidget::icon['question'],
        'iconHtml' => '<i class="fab fa-github fa-2x"></i>',
        'toast' => false, //apperance of alert
        'target' => 'body',  //maybe css selectors example $('.target-div')
        'preConfirm' => 'function (){}',
        'background' => '#fff',

        /*
         * Close Button
         * */
        'buttonsStyling' => true,
        'showCloseButton' => true,
        /*
         * Cancel Button
         * */
        'showCancelButton' => true,
        'cancelButtonColor' => '',
        'cancelButtonText' => Az::l('Отмена'),
        /*
         * Confirm Button
         * */
        'showConfirmButton' => true,
        'confirmButtonColor' => '#3085d6',
        'confirmButtonText' => Az::l('Подтвердить'),
        /*
        * Image Settings
        * */
        'url' => '',
        'imageWidth' => '',
        'imageHeight' => '',
        'imageAlt' => '',
        /*
        * Timer Settings
        * */
        'timer' => '11500',  //1500 ms
        /*
        * Input Settings
        * */
        'input' => ZSweetAlertWidget::input['text'],  //input types select, email and etc.
        'inputPlaceholder' => '',
        'inputOptions' => '{}',
        'inputAttributes' => '{
            name: "asdad",
            value: 4
        }',

        'grow' => ZSweetAlertWidget::grow['false'],  //appereance of alert: column, row
        'position' => ZSweetAlertWidget::position['center'],

    ]
]);








?>

<div id="sweet">sweetalertconfirm</div>

<script>

    $('#sweet').click(function () {
        html
    })

</script>
