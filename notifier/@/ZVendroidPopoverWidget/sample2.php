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
use zetsoft\system\Az;
use zetsoft\widgets\notifier\ZVendroidPopoverWidget;
use zetsoft\widgets\notifier\ZVendroidPopoverWidget_new;
use zetsoft\widgets\themes\ZFriendRequestsWidget;
use zetsoft\widgets\themes\ZMessageWidget;
use zetsoft\widgets\themes\ZMessageWidgetOLD1;
use zetsoft\widgets\themes\ZNotifyWidget;


Az::$app->forms->zPjax->begin();
?>

    <div class="vd_mega-menu-wrapper">
        <div class="vd_mega-menu pull-right">

            <ul class="mega-ul">

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
$contentMessage = ZMessageWidget::widget();
echo ZVendroidPopoverWidget::widget([
    'config' => [
        'content' => $contentMessage,
        'icon' => 'fa fa-'.FA::_ENVELOPE,
        'title' => 'Сообшения',
        'badge' => $badgeMessage
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
        'content' => $contentFriend,
        'icon' => 'fa fa-'.FA::_USERS,
        'title' => 'Friends'

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
        'content' => $contentNotify,
        'icon' => 'fa fa-' . FA::_BELL,
        'title' => Az::l('Уведомления'),

    ]
]);


Az::$app->forms->zPjax->end();

?>





            </ul>
        </div>
    </div>


<button class="btn btn-info">button</button>
