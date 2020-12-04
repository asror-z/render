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

use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZFriendRequestsWidget;
use zetsoft\widgets\themes\ZMessageWidgetOLD1;
use zetsoft\widgets\themes\ZNotifyWidget;
use zetsoft\widgets\themes\ZProfileWidget;
use zetsoft\widgets\themes\ZProfilWidget;
use zetsoft\widgets\themes\ZRowWidget;





/*Az::$app->forms->zPjax->begin();*/

ZRowWidget::begin();
ZColWidget::begin([
    'config' => [
        'width' => 5,
    ]
]);
echo ZMessageWidgetOLD1::widget();


echo ZNotifyWidget::widget();


echo ZFriendRequestsWidget::widget();


ZColWidget::end();
ZRowWidget::end();
echo ZProfileWidget::widget();
/*
Az::$app->forms->zPjax->end();*/
