<?php

use zetsoft\models\App\eyuf\Card;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZSingleProductWidget;

/*$cards = Az::$app->menu->orders->product();

echo ZSingleProductWidget::widget([
    'config' => [
        'cards' => $cards,
    ]
]);*/
?>
<div class="ht-body owl-carousel w-25">
    <div class="ht-item">
        <div class="ht-img">
            <a href="#"><img
                        src="https://img.freepik.com/free-vector/iphone-x-with-gradient-wallpaper_23-2147845834.jpg?size=338&ext=jpg"
                        alt="" class="img-fluid"></a>
            <span>- 59%</span>
            <ul class="list-unstyled list-inline counter-box">
                <li class="list-inline-item">185 <p>Days</p></li>
                <li class="list-inline-item">11 <p>Hrs</p></li>
                <li class="list-inline-item">39 <p>Mins</p></li>
                <li class="list-inline-item">51 <p>Sec</p></li>
            </ul>
        </div>
        <div class="ht-content">
            <p><a href="">Items Title Here</a></p>
            <ul class="list-unstyled list-inline fav">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
            </ul>
            <ul class="list-unstyled list-inline price">
                <li class="list-inline-item">$120.00</li>
                <li class="list-inline-item">$150.00</li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(".ht-body").owlCarousel({
        autoplay: false,
        autoplayHoverPause: true,
        smartSpeed: 500,
        loop: true,
        responsiveClass: true,
        items: 1,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        margin: 0,
        dots: false,
    });
</script>
