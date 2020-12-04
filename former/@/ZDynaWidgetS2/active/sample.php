<?php


use zetsoft\models\user\UserCompany;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\core\CoreSession;
use zetsoft\models\user\User;
use zetsoft\system\conapp\CoresModule;
use zetsoft\widgets\former\ZDynaWidgetS2;
use zetsoft\widgets\former\ZDynaWidgetNew;
use zetsoft\widgets\notifier\ZPopoverXWidget;

$model = new PlaceCountry();


echo ZDynaWidgetS2::widget([
    'model' => $model
]);
