<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\former\ZJqueryPjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;


$this->fileJs('https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js');

?>

<div class="myContainer" id="aaaaaaaaaaa">

</div>

<div class="bbbb" id="bbbb">

<?
echo ZButtonWidget::widget([
    'config' => [
        'func' => 'test',
        'btnStyle' => ZButtonWidget::btnStyle['btn-info'],
        'btnType' => ZButtonWidget::btnType['button'],
        'pjax' => 0,
        'text' => 'click'
    ],
    'active' => [
        'click' => true
    ],
    'event' => [
        'click' => <<<JS
        function() {
              pjaxtest();
        console.log('aa');
        }
JS,

    ]

]);
?>

</div>

<button id="myButton" class="btn btn-outline-primary" data-pjax="true">my_button</button>

<h1>My Site</h1>

<div class="container" id="pjax-container">
    Go to
    <a class="btn btn-danger">next page</a>.
</div>

<script>
    $(document).ready(function(){
        $(document).pjax('a', '#pjax-container',{
            'url' : '/render/former/ZJqueryPjaxWidget/samplehtm.html',
        });

         $(document).on('click', '#myButton', function (e) {

        $.pjax.click(e, '#pjax-container',{
            url : '/render/former/ZJqueryPjaxWidget/samplehtm.html'
        });
         });

    });
</script>

<?


echo ZJqueryPjaxWidget::widget([
    'config' => [
        'func' => 'pjaxtest',
        'selector' => '#aaaaaaaaaaa',
        'url' => '/render/former/ZJqueryPjaxWidget/samplehtm.html',
        'type' => ZJqueryPjaxWidget::type['get'],
        'dataType' => ZJqueryPjaxWidget::dataType['html'],
        'container' => '#bbbb',
    ],
    'event' => [
        'error' => <<<JS
    function(result) {
           console.log(result);
    }
JS,

    ]

]);





?>
