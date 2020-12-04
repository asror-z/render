<?php


use zetsoft\models\place\PlaceAdress;
use zetsoft\models\shop\ShopBrand;
use zetsoft\models\user\User;
use zetsoft\models\test\Test3;
use zetsoft\service\forms\Active;
use zetsoft\widgets\former\ZTabularWidget;
use zetsoft\widgets\former\ZTabularWidgetD;



$model = new PlaceAdress();
$active = new Active();
$form = $this->activeBegin();
    echo ZTabularWidget::widget([
        'form'=>$form,
        'model'=>$model,

    ]);
$this->activeEnd();

