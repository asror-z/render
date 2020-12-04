<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\former\ZAccardionWidget;
use zetsoft\widgets\former\ZAjaxForm;
use zetsoft\widgets\former\ZAjaxQWidget;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZBootstrapModalWidget;

?>

<!--<div class="row">
    <div class="col">
        <?/*
        echo ZAccardionWidget::widget([

        ]);


        */?>

    </div>
</div>-->

<div class="row">
    <div class="col">
        <?
        echo ZAjaxForm::widget([
            'config'=> [

            ]
        ]);

        ?>
    </div>
</div>

<div class="row">
    <div class="col">
        <?
        echo ZAjaxQWidget::widget([
            'config' => [
                'func' => 'first',
                'dataType' => 'html',
                'url' => "/ravshan/ravshan/information.aspx",

            ],
            'event' => [
                'complete' => <<<JS
        function myFunction(text){
            //var value = JSON.parse(text.responseText);
           $('#firstPre').text(text.responseText);
           console.log(text.responseText);
        }
JS,
            ]

        ]);
        ?>
    </div>
</div>

<div class="row">
    <div class="col">
        <?
        echo ZBootstrapModalWidget::widget([]);
        ?>
    </div>
</div>

<div class="row" style="margin-top: 50px;">
    <div class="col">  <?php
        echo ZAjaxWidget::widget([
            'config' => [
                'func' => 'ajax',
                'url' => '/core/tester/ajax/test.aspx',
                'type' => ZAjaxWidget::type['get'], //"POST", "GET", "PUT"

            ],


        ]);

        ?>
    </div>
</div>
