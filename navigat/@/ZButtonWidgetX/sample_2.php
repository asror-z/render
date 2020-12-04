<?php


use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Url;
use zetsoft\models\auto\ChatNotify;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
// use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;

ZRowWidget::begin();
ZColWidget::begin([
    'config' => [
        'width' => 4
    ]
]);





echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */

        'btnType' => ZButtonWidget::btnType['link'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-danger'],
        'btnSize' => ZButtonWidget::btnSize['btn-sm'],
        'btnRounded' => true,
        'btnFloating' => false,

        'title' => 'Кнопка',
        'text' => 'Кнопка',
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::color['none'],
        'icon' => 'fa fa-'.FA::_CLONE,
        /**
         *
         * Button
         */
        'dataTarget' => '',

        /**
         *
         * Links
         */
        'href' => '#',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['post'],
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
        'confirm' => 'Вы уверены?',
        'hasConfirm' => true,


        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['medium'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],

        'iconColor' => ZColor::color['none']


    ]
]);





echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */

        'btnType' => ZButtonWidget::btnType['link'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-primary'],
        'btnSize' => ZButtonWidget::btnSize['btn-sm'],
        'btnRounded' => true,
        'btnFloating' => false,

        'text' => 'Кнопка',

        'title' => 'Кнопка',
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::color['none'],

        /**
         *
         * Button
         */
        'dataTarget' => '',

        /**
         *
         * Links
         */
        'href' => '#',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['post'],
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
        'confirm' => 'Вы уверены?',
        'hasConfirm' => false,


        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['medium'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],

        'hasIcon' => true,
        'iconColor' => '#ffffff'


    ]
]);



echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */

        'btnType' => ZButtonWidget::btnType['button'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-outline-success'],
        'btnSize' => ZButtonWidget::btnSize['btn-md'],
        'btnRounded' => false,
        'btnFloating' => false,

        'text' => 'Кнопка',
        'title' => 'Кнопка',
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::color['none'],

        /**
         *
         * Button
         */
        'dataTarget' => '',

        /**
         *
         * Links
         */
        'href' => '#',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['post'],
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
        'confirm' => 'Вы уверены?',
        'hasConfirm' => false,


        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['medium'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],

        'hasIcon' => true,

        'iconColor' => '#ffffff'
    ],




]);



echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */

        'btnType' => ZButtonWidget::btnType['button'],
        'btnStyle' => ZButtonWidget::btnStyle['none'],
        'btnSize' => ZButtonWidget::btnSize['btn-md'],
        'btnRounded' => false,
        'btnFloating' => false,

        'text' => 'Кнопка',
        'title' => 'Кнопка',
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::gradient['cloudy-knoxville-gradient'],

        /**
         *
         * Button
         */
        'dataTarget' => '',

        /**
         *
         * Links
         */
        'href' => '#',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['post'],
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
        'confirm' => 'Вы уверены?',
        'hasConfirm' => false,


        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['medium'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],

        'iconColor' => '#ffffff'
    ],




]);



echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */

        'btnType' => ZButtonWidget::btnType['button'],
        'btnStyle' => ZButtonWidget::btnStyle['none'],
        'btnSize' => ZButtonWidget::btnSize['btn-md'],
        'btnRounded' => true,
        'btnFloating' => false,

        'text' => 'Кнопка',
        'title' => 'Кнопка',
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::gradient['deep-blue-gradient'],

        /**
         *
         * Button
         */
        'dataTarget' => '',

        /**
         *
         * Links
         */
        'href' => '#',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['post'],
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
        'confirm' => 'Вы уверены?',
        'hasConfirm' => false,


        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['medium'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],

        'iconColor' => '#ffffff'
    ],




]);

$badgeFriend = date('Y:d:s');

echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */

        'hasIcon' => true,

        'btnType' => ZButtonWidget::btnType['button'],
        'btnStyle' => ZButtonWidget::btnStyle['none'],
        'btnSize' => ZButtonWidget::btnSize['default'],
        'btnRounded' => false,
        'btnFloating' => true,

        'text' => '',
        'title' => 'Кнопка',
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::gradient['dusty-grass-gradient'],

        /**
         *
         * Button
         */
        'dataTarget' => '',

        /**
         *
         * Links
         */
        'href' => '#',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['post'],
        'iconsSm' => false,


        /**
         *
         * Badge
         */
         'hasBadge' => true,
        'badge' => $badgeFriend,
        'badgeType' => ZButtonWidget::badgeType['badge-default'],


        /**
         *
         * Confirm
         */
        'confirm' => 'Вы уверены?',
        'hasConfirm' => false,


        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['medium'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],

        'iconColor' => '#ffffff'
    ],




]);

echo ZButtonWidget::widget([
    'config' => [
        'btnType' => ZButtonWidget::btnType['link'],
        'btnStyle' => ZButtonWidget::btnStyle['none'],
        'btnRounded' => false,
        'text' => '',
        'pjax' => true,
        'title' => 'Обновление',
        'ttSize' => ZButtonWidget::ttSize['small'],
        'ttSide' => ZButtonWidget::ttSide['bottom'],
        'btn' => false,
        'iconColor' => '#000000',
        'icon' => 'fa fa-'.FA::_SYNC,
    ],
    'id' => 'messagePjax'
]);



echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */
        'hasIcon' => true,
        'icon' => 'fab fa-'. FA::_TELEGRAM,
        'btnType' => ZButtonWidget::btnType['button'],
        'btnStyle' => ZButtonWidget::btnStyle['none'],
        'btnSize' => ZButtonWidget::btnSize['btn-lg'],
        'btnRounded' => false,
        'btnFloating' => false,

        'text' => 'badge',
        'title' => 'Кнопка',
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::gradient['aqua-gradient'],

        /**
         *
         * Button
         */
        'dataTarget' => '',

        /**
         *
         * Links
         */
        'href' => '#',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['post'],
        'iconsSm' => false,


        /**
         *
         * Badge
         */
        'badge' => '100',
        'badgeType' => ZButtonWidget::badgeType['badge-default'],
        'hasBadge' => true,

        /**
         *
         * Confirm
         */
        'confirm' => 'Вы уверены?',
        'hasConfirm' => false,


        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['medium'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],

        'iconColor' => '#222'
    ],




]);

echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */

        'btnType' => ZButtonWidget::btnType['link'],
        'btnStyle' => ZButtonWidget::btnStyle['none'],
        'btnSize' => ZButtonWidget::btnSize['btn-md'],
        'btnRounded' => false,
        'btnFloating' => false,

        'text' => '',
        'title' => 'Кнопка',
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::color['none'],

        /**
         *
         * Button
         */
        'dataTarget' => '',

        /**
         *
         * Links
         */
        'href' => '#',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['post'],
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
        'confirm' => 'Вы уверены?',
        'hasConfirm' => false,


        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['small'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],
        'hasIcon' => true,

        'iconColor' => '#fb3'
    ],




]);


echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */

        'btnType' => ZButtonWidget::btnType['link'],
        'btnStyle' => ZButtonWidget::btnStyle['none'],
        'btnSize' => ZButtonWidget::btnSize['btn-md'],
        'btnRounded' => false,
        'btnFloating' => false,

        'text' => 'button',
        'title' => 'Кнопка',
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::gradient['tempting-azure-gradient'],

        /**
         *
         * Button
         */
        'dataTarget' => '',

        /**
         *
         * Links
         */
        'href' => '#',
        'target' => ZButtonWidget::target['_self'],
        'method' => ZButtonWidget::method['post'],
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
        'confirm' => 'Confirm',
        'hasConfirm' => true,


        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['medium'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],
        'hasIcon' => false,
        'iconColor' => '#ffffff'
    ],




]);


echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */

        'url' => 'https://www.w3schools.com',
        'btnType' => ZButtonWidget::btnType['link'],
        'btnStyle' => ZButtonWidget::btnStyle['none'],
        'btnSize' => ZButtonWidget::btnSize['default'],
        'btnRounded' => false,
        'btnFloating' => false,

        'text' => '',
        'title' => 'Кнопка',
        'toggle' => ZButtonWidget::toggle['tooltip'],
        'color' => ZColor::color['none'],

        /**
         *
         * Button
         */
        'dataTarget' => '',

        /**
         *
         * Links
         */
        'href' => '#',
        'target' => ZButtonWidget::target['_blank'],
        'method' => ZButtonWidget::method['none'],
        'iconsSm' => false,
        'pjax' => 1,

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
        'confirm' => 'Вы уверены?',
        'hasConfirm' => false,


        /**
         *
         * Tooltip
         */
        'hintRounded' => true,
        'ttSize' => ZButtonWidget::ttSize['small'],
        'ttSide' => ZButtonWidget::ttSide['top'],
        'ttColor' => ZButtonWidget::ttColor['info'],
        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],
        'btn' => false,
        'iconColor' => '#222222',
        'icon' => 'fas fa-'.FA::_TRASH,
    ],




]);
     ?>

