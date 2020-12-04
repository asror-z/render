<?php

use zetsoft\widgets\navigat\ZButtonOldWidget;
use zetsoft\widgets\consts\ZCardWidgetConst;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\navigat\ZBoxWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZRowWidget;
use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use yii\bootstrap\Html;


echo ZButtonOldWidget::widget([
    'config' => [
        'icon' => FAS::icon(FAS::_ANGLE_DOWN),
        'types' => ZButtonOldWidget::Type_Button,
        'title' => 'Main',
        'label' => 'Button',
        'class' => ZButtonOldWidget::Outline_Warning,
        'color' => ZButtonOldWidget::Color_Primary,
        'btnSize' => ZButtonOldWidget::Size_Normal,
        /*'urls' => [
            'widget/widget/sample',
            'file' => 'ZGalleryFancyboxWidget'
        ],*/
    ],
]);
echo ZButtonOldWidget::widget([
'config' => [
    'icon' => FAS::icon(FAS::_ANGLE_DOUBLE_UP),
    'types' => ZButtonOldWidget::Type_Link,
    'color' => ZButtonOldWidget::Outline_Secondary,
    'label' => 'Button',
    'btnSize' => ZButtonOldWidget::Size_Normal,
    'isApp' => true,
    'isCollapse' => true,
    'badgeType' => ZButtonOldWidget::Badge_Info,
    'badgeType' => 3
],
]);
echo ZButtonOldWidget::widget([
'config' => [
    'icon' => FAS::icon(FAS::_SAVE),
    'types' => ZButtonOldWidget::Type_Button,
    'label' =>'Button',
    'btnSize' => ZButtonOldWidget::Size_Normal,
    'isApp' => true,
    'badgeType' => ZButtonOldWidget::Badge_Info,
    'badgeType' => 3
],

]);
