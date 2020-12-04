<?php

/**
 *
 *
 * Author:  Musoxon Adulkhamidov
 *
 *
 */

use yii\bootstrap\Html;
use yii\widgets\Pjax;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\navigat\ZLanguagePicker;
use zetsoft\widgets\navigat\ZLanguagePicker4;
use zetsoft\widgets\themes\ZCarolinaWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZFriendRequestsWidget;
use zetsoft\widgets\themes\ZMessageWidgetOLD1;
use zetsoft\widgets\themes\ZNotificationsWidget;
use zetsoft\widgets\themes\ZProfilWidget;
use zetsoft\widgets\themes\ZRowWidget;


/* @var ZView $this */
Az::$app->forms->zPjax->begin();


ZRowWidget::begin();
ZColWidget::begin([
    'config' => [
        'width' => 5,
    ]
]);

echo Az::$app->cores->date->dateTime();


/*
echo ZNotificationsWidget::widget([
]);


echo ZFriendRequestsWidget::widget([
]);


echo ZMessageWidget::widget([

]);


echo ZLanguagePicker::widget([
]);

echo ZCarolinaWidget::widget([
]);

echo ZProfilWidget::widget([
]);*/


ZColWidget::end();
ZRowWidget::end();


Az::$app->forms->zPjax->end();




?>


