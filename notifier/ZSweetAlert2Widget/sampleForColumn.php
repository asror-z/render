<?php

use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlert2ColumnWidget;
use zetsoft\widgets\places\ZGoogleWidgetKH;


$button =  ZButtonWidget::widget([
    'config' => [
        'text' => 'button',
        'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
    ],
    'event' => [
        'click' => 'confirm'
    ]
]);

 echo ZSweetAlert2ColumnWidget::widget([
    'config' => [
        'button' => $button,

        'functionName' => 'confirm',
        'title' => 'HTML example',
        //'icon' => ZGoogleWidgetKH::className(),
        'icon' => ZSweetAlert2ColumnWidget::icon['success'],
        'html' =>
            'You can use <b>bold text</b>, ' .
            '<a href="//sweetalert2.github.io">links</a> ' .
            'and other HTML tags',
        'showCloseButton' => true,
        'showCancelButton' => true,
        'focusConfirm' => false,
        'btnStyling' => false,
        'confirmButtonText' => '<i class="fa fa-thumbs-up"></i> Great!',
        'cancelButtonText' => '<i class="fa fa-thumbs-down"></i>',
        'footer' => '',
        'text' => '',
        'input' => ZSweetAlert2ColumnWidget::input['textarea'],  //input types select, email and etc.
        'inputPlaceholder' => '',
        'inputOptions' => '{}',
        'inputAttributes' => '{
            name: "asdad",
            value: "dsfsdfdsfdsfdsf ",
        }',
        'timer' => 12000,

        'grow' => ZSweetAlert2ColumnWidget::grow['false'],  //appereance of alert: column, row
        'position' => ZSweetAlert2ColumnWidget::position['top-start'],
    ],
]);






?>


