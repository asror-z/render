<?php


use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZUrl;
// use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;






echo ZButtonWidget::widget([


    'config' => [

        /**
         *
         * ALL
         */
        'text' => 'Button',
        'btnType' => ZButtonWidget::btnType['link'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-primary'],
        'btnSize' => ZButtonWidget::btnSize['btn-sm'],
        'btnRounded' => true,
        'btnFloating' => false,

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

        'iconColor' => '#ffffff'


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

        'iconColor' => '#ffffff'
    ],




]);

