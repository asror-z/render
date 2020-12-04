<?php

use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\display\ZCalendarWidgetOld;
use zetsoft\widgets\display\ZTimelineWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZInfoBoxWidget;
use zetsoft\widgets\themes\ZRowWidget;
use rmrevin\yii\fontawesome\FAS;

$this->title = 'Main page';
$this->params['breadcrumbs'][] = $this->title;
?>


<?
ZRowWidget::begin();
ZColWidget::begin([
    'config' => ['width' => 12]
]);
ZInfoBoxWidget::widget([
    'iconBg' => ZInfoBoxWidget::Bg_Primary,
    'title' => 'No bg and bar primary solid'
]);

echo User::find()->all();

