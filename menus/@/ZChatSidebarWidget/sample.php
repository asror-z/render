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


use zetsoft\widgets\menus\ZChatSidebarWidget;

echo ZChatSidebarWidget::widget([
   'config' => [

           'url' => '/publish/inputs/user-inputs/demo_files/avatar-2.jpg',
           'AdminOrUser' => 'Adminstrator',
           'BgColor' => ZChatSidebarWidget::BgColor['bg-danger'],
           'TextColor' => ZChatSidebarWidget::TextColor['text-dark'],
   

]
]);
