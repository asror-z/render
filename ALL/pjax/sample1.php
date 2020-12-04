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
use zetsoft\widgets\notifier\ZPopoverXNewWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZMessageWidgetOLD1;
use zetsoft\widgets\themes\ZNotifyWidget;
use zetsoft\widgets\themes\ZFriendRequestsWidget;
use zetsoft\widgets\notifier\ZPopoverXWidget;
use zetsoft\models\auto\ChatMessage;
use zetsoft\models\auto\ChatNotify;
use zetsoft\models\user\UserFriend;


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

    echo ZPopoverXNewWidget::widget([
        'config' => [
            'buttonIcon' => 'fa fa-' . FA::_USERS,
            'badge' => date('Y:d:s'),
            'content' => date('Y:d:s')
        ]
    ]);

    ?>

    <div id="popover" class="popover popover-x popover-{size} popover-primary">
        <div class="arrow"></div>
        <div class="popover-header popover-title">
            <div class="popover-buttons">
                <button class="close mx-2 close-button" data-dismiss="popover-x">x</button>
                <span class="close refresh-button">{button}</span>
            </div>
            {titleHeader}
        </div>
        <div class="popover-body popover-content">
            <div id="testrailvisible">
                {content}
            </div>
        </div>
    </div>

<?

    Az::$app->forms->zPjax->end();


    /*echo ZExpandableSearchWidget::widget([]);*/

    ?>


</div>
