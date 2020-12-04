<?php

use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZFinGrapeWidgett;
use zetsoft\widgets\navigat\ZMMenuWidget;

/** @var ZView $this */
$aTwo = Az::$app->cores->menus->create([
    /*    'admin',*/
    'ruslan',
]);
$aOne = Az::$app->menus->menu->run();

$aALL = ZArrayHelper::merge($aOne, $aTwo);

echo ZFinGrapeWidget::widget();
