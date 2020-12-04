<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\assets\ZColor;
use zetsoft\widgets\navigat\ZButtonAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidgetAzimjon;

echo ZButtonWidget::widget([
    'config' => [
        'text' => 'button ozi',
        'title' => '',
        'btn' => true,
        'btnType' => ZButtonWidget::btnType['button'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-transparent'],
        'hasIcon' => true,
        'icon' => 'fal fa-user fa-2x text-danger',
        'btnRounded' => true,
        'btnFloating' => false,
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::color['none'],
        'colorHover' => ZColor::color['none'],
        'colorFocus' => ZColor::color['green'],
        'colorActive' => ZColor::color['none'],
        'class' => 'border-none',
        'hidden' => false,
        /**
         *
         * Button
         */
        'dataTarget' => '',
        'ic-target' => '',
        'ic-push-url' => true,
        /**
         *
         * Links
         */
        'url' => '/shop/user/main-common/index.aspx',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['none'],
        'iconsSm' => false,
        /**
         *
         * Badge
         */
        'badge' => '100',
        'badgeType' => ZButtonWidget::badgeType['badge-default'],
        /**
         *
         * Confirm
         */
        'hasConfirm' => true,
        'confirm' => 'Вы уверены?',
        'confirmTitle' => 'Подтверждение',
        'canselLabelText' => 'cancel',
        'confirmLabelText' => 'ok',
        'blank' => false,
        
        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['medium'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],
        /**
         *
         * Icon
         */

        'iconSize' => ZButtonWidget::iconSize['default'],
        'iconColor' => ZColor::color['warning-color'],
        'download' => false,
        'iconSizePx' => '',
    ],
    'event' => [
        'click' => 'function () { console.log("clicked !!!") }'
    ]
]);
