<?php

use zetsoft\widgets\inputes\ZKStarRatingWidget; ?>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="card w-75 ml-5">
            <div class="card-body d-flex">
            <div class="col-lg-2 col-md-2 col-sm-2" style="border-right: 1px solid lightgrey">
                <h5 class="card-title">SAMSUNG</h5>
                <h6 class="card-text">
                    <?
                    echo ZKStarRatingWidget::widget([
                        'name' => 'gggfg',
                        'config' => [
                            '   show' => false
                        ]
                    ]);
                    ?>
                    <a href="">202 600 отзывов</a>
                </h6>
               <a href=""><i class="fa fa-phone d-flex" aria-hidden="true"></i><span>Показать телефон</span></a>
            </div>
                <div class="col-lg-4 col-md-4 col-sm-4"  style="border-right: 1px solid lightgrey">
                    <span class="" data-tid="f6ca4a97"></span>
                    <span class="d-flex" style="color: lightgreen">
                    Бесплатный самовывоз неизвестно </span>
                    <a href="">в 1 135 из 2 700 пунктов.</a> <br>
                    <span class=""style="color: lightgreen" >Бесплатно курьером</span>
                    <a href="">Все варианты доставки.</a>
                    <span><h6>Варианты оплаты уточняйте в магазине.</h6></span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2" style="border-right: 1px solid lightgrey;">
                <span class="d-flex justify-content-between"> <a href="" class="fp-15 ">Цвет товара: </a> <h6 style="margin-left: 5px; color: red;">красный</h6></span>
                    <span class="d-flex"> <a href="">Еще 2 варивнта</a> </span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2" style="border-right: 1px solid lightgrey">
                  <span class="d-flex"> <strike>100000$</strike> <bolder class="background:red" style="background: #ec0000;color: white;border-radius: 9px 2px 2px 9px; font-weight:800; margin-left: 10px;"  > -100%</bolder> </span>
                    <h5>1000₽</h5>
                    <h5> от 1000₽ мес</h5>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 d-flex align-items-center" >
                 <button class="btn btn-warning btn-md d-flex p-15 ">В магазин</button>
                </div>
            </div>
        </div>
    </div>
</div>
