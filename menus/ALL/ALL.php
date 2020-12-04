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

use zetsoft\widgets\menus\ZChatSidebarWidget;
use zetsoft\widgets\menus\ZMenuEditorWidget;
use zetsoft\widgets\menus\ZMetisMenuWidget3;

?>

    <div class="row">
        <div class="col">
            <?
            echo ZChatSidebarWidget::widget([
                'config' => [

                    'url' => '/publish/inputs/user-inputs/demo_files/avatar-2.jpg',
                    'AdminOrUser' => 'Adminstrator',
                    'BgColor' => ZChatSidebarWidget::BgColor['bg-danger'],
                    'TextColor' => ZChatSidebarWidget::TextColor['text-dark'],

                ]
            ]);

            ?>

        </div>
    </div>

  <!--  <div class="row">
        <div class="col">
            <?/*
            echo ZMenuEditorWidget::widget([

            ]);

            */?>
        </div>
    </div>-->

    <div class="row">
        <div class="col">
             <?
             echo ZMetisMenuWidget3::widget([
                 'data' => [

                 ],
             ]);
             ?>
        </div>
    </div>



    <div class="row">
        <div class="col">
            <?
            echo ZChatSidebarWidget::widget([
                'config' => [

                    'url' => '/publish/inputs/user-inputs/demo_files/avatar-2.jpg',
                    'AdminOrUser' => 'Adminstrator',
                    'BgColor' => ZChatSidebarWidget::BgColor['bg-danger'],
                    'TextColor' => ZChatSidebarWidget::TextColor['text-dark'],

                ]
            ]);

            ?>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <?
            echo ZMenuEditorWidget::widget([

            ]);

            ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <?
            echo ZMetisMenuWidget3::widget([
                'data' => [

                ],
            ]);
            ?>
        </div>
    </div>

<?


