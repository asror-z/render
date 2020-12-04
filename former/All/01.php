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


/* render/menus/ZChatSidebarWidget
render/menus/ZMenuEditorWidget
render/menus/ZMetisMenuWidget
render/menus/ZMMmenuWidget
 *
 * */

use zetsoft\widgets\former\ZAccardionWidget;
use zetsoft\widgets\former\ZAjaxForm;
use zetsoft\widgets\former\ZAjaxQWidget;
use zetsoft\widgets\former\ZBootstrapModalWidget;
use zetsoft\widgets\menus\ZChatSidebarWidget;
use zetsoft\widgets\menus\ZMenuEditorWidget;
use zetsoft\widgets\menus\ZMetisMenuWidget3;

?>

    <div class="row">
        <div class="col">
            <?
            echo ZAccardionWidget::widget([

            ]);


            ?>

        </div>
    </div>

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



<?


