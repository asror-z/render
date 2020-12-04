<?php

use kartik\popover\PopoverX;
use yii\bootstrap\Html;
use zetsoft\widgets\market\ZSliderWidget;


echo \zetsoft\widgets\images\ZSlickWidget::widget([
        'data' => [
            9 => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTe9Oj1PKONL0DOP5enQT3_RDR5ZAwNrFs2rRVu3HtmmrwkQrck&usqp=CAU",
            10 => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRqPlTa92NsEbY-oBv9-Z-KqmyW5hGsb8EVHC9Rc_XQchJuQB9h&usqp=CAU",
            11 => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTK_-mI_3_60aH0vmlOsCb4dknHUyTnAcBpqfSoN7cLOkwWsfUq&usqp=CAU",
        ],
        'config' => [
            'path' => '/image/',
            'autoplay' => true,
            'autoplaySpeed' => 3000,
            'arrows' => false,
            'heightImg' => '50vh',
            'widthImg' => '100vh',
            'dots' => true,
            'rows' => 1,
            'centerPadding' => '',
            'speed' => 400,
            'touchMove' => true,
            'fade' => false,
            'centerMode' => true,
            'slidesToShow' => 1,
            'slidesToScroll'=> 1,
            'rtl' => false,
            'infinite' => true,
            'grapes' => true,
        ],




]);