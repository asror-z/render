<?php


use rmrevin\yii\fontawesome\FA;
use yii\widgets\Pjax;
use zetsoft\models\auto\ChatMessage;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\column\ZScrollPager;
use zetsoft\widgets\notifier\ZKPopoverXWidget;
use zetsoft\widgets\notifier\ZPopoverXScrollButtonWidget;
use zetsoft\widgets\notifier\ZPopoverXWidget;


?>
<div class="container ml-5 pl-5">


    <?php
    Az::$app->forms->zPjax->begin();
    /*$badgeMessage = CoreMessage::find()
        ->where([
            'receiver' => Az::$app->cores->auth->identity->id,
            'read' => false
        ])
        ->count();*/
        $model = new User();

    echo ZPopoverXScrollButtonWidget::widget([
        'config' => [
            'buttonIcon' => 'fa fa-user',
            'titleHeader' => 'Messages',
            'badge' => $model,
            'isBtn' => true,
            'size' => ZPopoverXScrollButtonWidget::size['lg'],
            'content' => '',
        ]
    ]);
    Az::$app->forms->zPjax->end();
    ?>
</div>


