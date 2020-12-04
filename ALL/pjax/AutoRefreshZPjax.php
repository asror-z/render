<?php

/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use yii\bootstrap\Html;
use yii\widgets\Pjax;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\blocks\ZRefreshWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZMessageWidgetOLD1;
use zetsoft\widgets\themes\ZNotifyWidget;
use zetsoft\widgets\themes\ZFriendRequestsWidget;
use zetsoft\widgets\notifier\ZPopoverXWidget;
use zetsoft\models\auto\ChatMessage;
use zetsoft\models\auto\ChatNotify;
use zetsoft\models\user\UserFriend;

echo HTML::beginTag('div', ['class' => 'col-xs-12']);
?>
<?php


Az::$app->forms->zPjax->begin();

ZCardWidget::begin();
echo Html::a("Refresh", Az::$app->request->url, [
    'class' => 'btn btn-sm btn-primary',
    'id' => 'zGrid',
    'data-pjax' => 1
]);

ZCardWidget::end();
?>
    <h1>Current time: <?= date('H:i:s') ?></h1>

<?php
Az::$app->forms->zPjax->end();

?>
    <div class="container">
        <?

       
        Az::$app->forms->zPjax->begin();

        
        $badgeFriend = UserFriend::find()
            ->where([
                'person' => Az::$app->cores->auth->identity->id,
            ])
            ->count();
        if ($badgeFriend === 0) {
            $badgeFriend = '';
        }
        ZPopoverXWidget::begin([
            'config' => [
                'buttonIcon' => 'fa fa-' . FA::_USERS,
                'badge' => $badgeFriend
            ]
        ]);

        echo date('Y:d:s');

        ZPopoverXWidget::end();

        Az::$app->forms->zPjax->end();


        /*echo ZExpandableSearchWidget::widget([]);*/

        ?>
    </div>

    <!--<div style="width: 100px; margin-right: 15px; ">-->
    <div class="mt-2">

        <?


        Az::$app->forms->zPjax->begin();

        $badgeMessage = ChatMessage::find()
            ->where([
                'receiver' => Az::$app->cores->auth->identity->id,
                'read' => false,

            ])
            ->count();
        if ($badgeMessage == 0) {
            $badgeMessage = '';
        }
        ZPopoverXWidget::begin([

            'config' => [
                'badge' => $badgeMessage,
                'buttonIcon' => '',
                'titleHeader' => 'Messages',
//                           'placement' => ZPopoverXWidget::placement['bottom bottom-right']
            ]
        ]);
        echo ZMessageWidgetOLD1::widget([]);
        ZPopoverXWidget::end();

        Az::$app->forms->zPjax->end();

        ?>
    </div>

    <div class="mt-2">

        <?


        Az::$app->forms->zPjax->begin();

        $badgeFriend = UserFriend::find()
            ->where([
                'person' => Az::$app->cores->auth->identity->id,
            ])
            ->count();
        if ($badgeFriend === 0) {
            $badgeFriend = '';
        }

        $badgeFriend = date('Y:d:s');

        ZPopoverXWidget::begin([
            'config' => [
                'buttonIcon' => '',
                'badge' => $badgeFriend
            ]
        ]);

        echo ZFriendRequestsWidget::widget();

        ZPopoverXWidget::end();

        Az::$app->forms->zPjax->end();
        ?>
    </div>

    <div class="mt-2">

        <?
        Az::$app->forms->zPjax->begin();

        $badgeNotify = ChatNotify::find()
            ->where([
                'user_id' => Az::$app->cores->auth->identity->id,
                'read' => false
            ])
            ->count();
        if ($badgeNotify == 0) {
            $badgeNotify = '';
        }
        ZPopoverXWidget::begin([
            'config' => [
                'buttonIcon' => '',
                'titleHeader' => 'Messages',
                'badge' => $badgeNotify
            ]
        ]);
        echo ZNotifyWidget::widget([]);
        ZPopoverXWidget::end();


        Az::$app->forms->zPjax->end();
        ?>
    </div>


    <h1>Current time: <?= date('H:i:s') ?></h1>
<?php
echo HTML::endTag('div');
