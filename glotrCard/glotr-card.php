<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use widgets\inptest\ZStarratingWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZStarDobtcoWidget;

?>

<style>
    .index-info-item {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        padding: 15px;
        border-radius: 4px;
        box-shadow: 0px 0px 41.28px 1.72px rgba(5, 8, 9, 0.15);
        flex-grow: 1;
        overflow: hidden;
    }


    .index-info-title {
        font-size: 18px;
        text-transform: uppercase;
        color: #222222;
        opacity: .5;
        margin-bottom: 6px;
        text-align: center;
    }
    .company-star-rating {
        margin-bottom: 6px;
    }
    .index-info-text {
        font-size: 18px;
        margin-bottom: 6px;
    }
    .text-semibold {
        font-family: "Roboto-Medium", sans-serif;
    }
    .index-info-btn {
        text-align: center;
        margin-top: auto;
    }
    .rating-img{
        width:40px;
        height: 35px;

    }
</style>

<div class="index-info-item">
    <span class=" index-info-icon rating-icon"><img class="rating-img" src="/render/glotrCard/icons8.png" alt=""></span>
    <span class="index-info-title text-bold">Рейтинг компаниии</span>

    <?php
        echo ZStarDobtcoWidget::widget([])
    ?>

    <div class="company-star-rating" data-value="22">
        <div class="stars-outer">
            <div class="stars-inner" style="width: 4.4%;"> </div>
        </div>
    </div>
    <span class="text-semibold index-info-text">22 баллов</span>
    <div class="index-info-btn btn-primary px-4 py-1 rounded">
        <a class="index-info-link text-white" href="#">Подробнее</a> </div>

</div>

