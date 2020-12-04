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


use zetsoft\models\auto\ChatMessage;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\chates\ZSmallChatWidget;use zetsoft\widgets\chates\ZUserMessageWidget;


/** @var ZView $this */


$messages=Az::$app->App->eyuf->chat->getSmallMess();


 if (isset($userId)) {
 if ($userId != null && isset($recId)) {
     $messages = Az::$app->App->eyuf->chat->getMessage();


     $data=[];

     foreach ($messages as $key => $value) {
         if ($value->sender == $recId) {
             $cmdk = true;
             $Name = $this->userIdentity()->name;
         } else {
             $Name = $userName;
             $cmdk = false;
         }

     }

     echo ZSmallChatWidget::widget([
         'config' => [
             'time' => $value->time,
             'text' => $value->text,
             'mine' => $cmdk,
             'userId' => $this->userIdentity()->id
         ]
     ]);
 }

 }

