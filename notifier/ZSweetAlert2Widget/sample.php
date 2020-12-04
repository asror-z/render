<?php

use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlertWidget;

//notify something
echo ZSweetAlertWidget::widget([
    'config' => [
        'functionName' => 'error',
        'title' => 'Ooops...',
        'icon' => ZSweetAlertWidget::icon['success'],
        'text' => 'Something went wrong!',
        'footer' => '<a href>Why do I have this issue?</a>',
        'toast' => false,
    ],
]);
//with using html tags
echo ZSweetAlertWidget::widget([
    'config' => [
        'functionName' => 'confirm',
        'title' => '<strong>HTML <u>example</u></strong>',
        'icon' => ZSweetAlertWidget::icon['info'],
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
        'footer' => ''
    ],
]);
echo ZSweetAlertWidget::widget([
    'config' => [
        'functionName' => 'input',
        'title' => '<strong>HTML <u>example</u></strong>',
        'icon' => ZSweetAlertWidget::icon['info'],
        'input' => ZSweetAlertWidget::input['textarea'],
        'showCloseButton' => true,
        'showCancelButton' => true,
        'confirmButtonText' => '<i class="fa fa-thumbs-up"></i> Great!',
        'cancelButtonText' => '<i class="fa fa-thumbs-down"></i>',
        'footer' => ''
    ],
]);

echo  ZSweetAlertWidget::widget([
    'config' => [
        'functionName' => 'iframe',
        'iframe' => true,
        'url' => '/core/elfind/all.aspx',
    ]
]);


echo ZButtonWidget::widget([
    'config' => [
        'text' => 'button',
        'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
    ],
    'event' => [
        'click' => 'confirm'
    ]
]);

echo ZButtonWidget::widget([
    'config' => [
        'text' => 'button',
        'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
    ],
    'event' => [
        'click' => 'iframe'
    ]
]);


echo ZSweetAlertWidget::widget();
?>
<button
    class="btn btn-warning"
    onclick="Swal.fire({
      title: 'How old are you?',
      icon: 'question',
      input: 'textarea',
      inputAttributes: {
        rows: 4,
      },
    })"
>Button</button>






<button id="disabledButton" class="btn btn-warning">Button can't click</button>

<script type="text/javascript">
     $('#disabledButton').click(function () {
         Swal.fire({
             position: 'top-end',
             icon: 'success',
             title: 'Your work has been saved',
             showConfirmButton: false,
             timer: 1500
         })
     })
</script>

