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


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\user\UserFriend;
use zetsoft\models\auto\ChatMessage;
use zetsoft\models\auto\ChatNotify;
use zetsoft\widgets\notifier\ZVendroidPopoverWidget;
use zetsoft\widgets\themes\ZFriendRequestsWidget;
use zetsoft\widgets\themes\ZMessageWidgetOLD1;
use zetsoft\widgets\themes\ZNotifyWidget;


?>

<div class="container" style="margin-left: 500px;">

<?php

Az::$app->forms->zPjax->begin();
?>

<?php

$badgeMessage = ChatMessage::find()
    ->where([
        'receiver' => Az::$app->cores->auth->identity->id,
        'read' => false
    ])
    ->count();
if ($badgeMessage == 0) {
    $badgeMessage = '';
}
$contentMessage = ZMessageWidgetOLD1::widget();
echo ZVendroidPopoverWidget::widget([
    'config' => [
        'content' => Az::$app->cores->date->dateTime(),
        'icon' => 'fa fa-'.FA::_ENVELOPE,
        'title' => 'Сообшения',
        'badge' => $badgeMessage

    ]
]);


$badgeNotify = ChatNotify::find()
    ->where([
        'user_id' => Az::$app->cores->auth->identity->id,
        'read' => false
    ])
    ->count();
if ($badgeNotify == 0) {
    $badgeNotify = '';
}
$contentNotify = ZNotifyWidget::widget([]);
echo ZVendroidPopoverWidget::widget([
    'config' => [
        'badge' => $badgeNotify,
        'content' => Az::$app->cores->date->dateTime(),
        'icon' => 'fa fa-'.FA::_BELL,
        'title' => 'Уведомления'

    ]
]);


$badgeFriend = UserFriend::find()
    ->where([
        'person' => Az::$app->cores->auth->identity->id,
    ])
    ->count();
if ($badgeFriend === 0) {
    $badgeFriend = '';
}

$contentFriend = ZFriendRequestsWidget::widget();
echo ZVendroidPopoverWidget::widget([
    'config' => [
        'badge' => $badgeFriend,
        'content' => Az::$app->cores->date->dateTime(),
        'icon' => 'fa fa-'.FA::_USERS,
        'title' => 'Друзья'

    ]
]);
?>


<?php
Az::$app->forms->zPjax->end();
?>

</div>
