<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 * made by: Khojiakbar Kodirov
 *
 */

use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\widgets\market\ZCategoryWidget;
use zetsoft\widgets\market\ZHotOfferWidget;
use zetsoft\widgets\market\ZMessageBoxWidget;
use zetsoft\widgets\market\ZReytingWidget;
use zetsoft\widgets\navigat\ZBreadCrumbWidget;
use zetsoft\widgets\market\ZMegaMenuWidget ;
use zetsoft\widgets\navigat\ZButtonWidget;


echo ZMegaMenuWidget::widget([]) ;

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 border">
            <?
            echo ZMessageBoxWidget::widget([

            ]) ;
            ?>
            <?
            echo ZMessageBoxWidget::widget([

            ]) ;
            ?>
            <?
            echo ZMessageBoxWidget::widget([

            ]) ;
            ?>
        </div>
        <div class="col-md-4 border">
            <form action="" method="post" name="quesReg" style="margin-top: 10px;">
                <p class="question-title">
                    Не нашли, что искали
                </p>
                <p class="question-text">
                    Мы будем рады помочь! Отправьте нам сообшение, и мы свяжемся с вами при первой
                    возможности.
                </p>

                <p class="input-title">
                    Введите свой сообшение
                </p>
                <?
                echo \zetsoft\widgets\inputes\ZSimpleCountableWidget::widget([]) ;
                ?>

                <div style="position:relative; left: 60px ;">
                <?
                echo ZButtonWidget::widget([


                    'config' => [
                        'btnType' => ZButtonWidget::btnType['button'],
                        'btnStyle' => ZButtonWidget::btnStyle['btn-outline-success'],
                        'btnSize' => ZButtonWidget::btnSize['btn-lg'],
                        'btnRounded' => false,
                        'btnFloating' => false,

                        'text' => 'Отправить сообщение',
                        //'title' => 'Кнопка',
                        'toggle' => ZButtonWidget::toggle['tooltip'],
                        'color' => ZColor::color['none'],

                     

                        'href' => '#',
                        'target' => ZButtonWidget::target['_self'],
                        'iconsSm' => false,


                        'badge' => '100',
                        'badgeType' => ZButtonWidget::badgeType['badge-default'],


                        /**
                         *
                         * Confirm
                         */
                        'confirm' => 'сообщение было отправлено!',
                        'hasConfirm' => true,


                        /**
                         *
                         * Tooltip
                         */
                        'hintRounded' => true,
                        'ttSize' => ZButtonWidget::ttSize['medium'],
                        'ttSide' => ZButtonWidget::ttSide['top'],
                        'ttColor' => ZButtonWidget::ttColor['warning'],
                        'ttAnimate' => ZButtonWidget::ttAnimate['bounce'],

                        'iconColor' => '#ffffff'
                        
                    ]
                ]);
                ?>
                </div>


            </form>
        </div>
    </div>

</div>











