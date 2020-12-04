<?php


use zetsoft\models\place\PlaceAdress;
use zetsoft\models\shop\ShopBrand;
use zetsoft\models\user\User;
use zetsoft\models\test\Test3;
use zetsoft\service\forms\Active;
use zetsoft\widgets\former\ZTabularWidgetD1;


$model = new PlaceAdress();
$form = $this->activeBegin();
    echo ZTabularWidgetD1::widget([
        'form'=>$form,
        'model'=>$model,
        'config' => [
                    
        ]

    ]);
$this->activeEnd();

