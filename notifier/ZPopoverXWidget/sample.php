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

use yii\widgets\Pjax;
use zetsoft\system\Az;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\user\UserFriend;
use zetsoft\models\auto\ChatMessage;
use zetsoft\models\auto\ChatNotify;
use zetsoft\widgets\notifier\ZPopoverXWidget;
use zetsoft\widgets\themes\ZFriendRequestsWidget;
use zetsoft\widgets\themes\ZMessageWidget;
use zetsoft\widgets\themes\ZMessageWidgetOLD1;
use zetsoft\widgets\themes\ZNotifyWidget;


?>
<div class="container ml-5 pl-5">


<?php


Az::$app->forms->zPjax->begin();

$badgeMessage = ChatMessage::find()
    ->where([
        'receiver' => Az::$app->cores->auth->identity->id,
        'read' => false
    ])
    ->count();

ZPopoverXWidget::begin([

    'config' => [
        'buttonIcon' => 'fa fa-'.FA::_ENVELOPE,
        'titleHeader' => 'Messages',
        'badge' => $badgeMessage,
    ]
]);

echo ZMessageWidget::widget([
]);
ZPopoverXWidget::end();


$badgeFriend = UserFriend::find()
    ->where([
        'person' => Az::$app->cores->auth->identity->id,
    ])
    ->count();
ZPopoverXWidget::begin([
    'config' => [
        'buttonIcon' => 'fa fa-'.FA::_USERS,
        'badge' => $badgeFriend,
    ]
]);

echo ZFriendRequestsWidget::widget();

ZPopoverXWidget::end();



$badgeNotify = ChatNotify::find()
    ->where([
        'user_id' => Az::$app->cores->auth->identity->id,
        'read' => false
    ])
    ->count();
ZPopoverXWidget::begin([
    'config' => [
        'buttonIcon' => 'fa fa-'.FA::_BELL,
        'titleHeader' => 'Messages',
        'badge' => $badgeNotify
    ]
]);
echo ZNotifyWidget::widget([]);
ZPopoverXWidget::end();

Az::$app->forms->zPjax->end();
?>
</div>


