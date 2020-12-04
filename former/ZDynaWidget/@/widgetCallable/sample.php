<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\menus\ZMmenuWidget;
use zetsoft\widgets\menus\ZMmenuWidgetSh;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\place\PlaceCountry;


/** @var ZView $this */


$model = new PlaceCountry();

$model->configs->widget = [
    'alpha3' => function ($model) {

        vd($model->attributes);

        $widget = ZInputWidget::class;

        switch ($model->alpha2) {
            case 'CN';
                $widget = ZKSelect2Widget::class;
                break;

            default;
                $widget = ZKSwitchInputWidget::class;
                break;

        }

        return $widget;
    }
];
$model->columns();

/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
]);

          
