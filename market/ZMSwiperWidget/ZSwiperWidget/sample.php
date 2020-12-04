<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\market\ZMSwiperWidget;

echo ZMSwiperWidget::widget([
     'data' => [
        'qewfg1',
        'qewfg1',
        'qewfg1',
        'qewfg1',
        'qewfg1',
        'qewfg1',
        'qewfg1',
        'qewfg1',
        'qewfg1',
     ],
     'config' => [
        'slidesPerView' => 5,
        'spaceBetween' => 20,
        'centeredSlides' => false,
        'pagination.el' => '.swiper-pagination',
        'pagination.clickable' => false
     ]
]);
