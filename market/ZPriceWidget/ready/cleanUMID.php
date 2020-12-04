<?php
?>


<style>


    .flip-box {
        background-color: transparent;
        height: 100px;
    }

    .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    .flip-box:hover .flip-box-inner {
        transform: rotateX(180deg);
    }

    .flip-box-front, .flip-box-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-box-front {
        background-color:transparent;
    }

    .flip-box-back {
        background-color: #FFFFFF;
        border-radius: 5px;
        color: rgb(31, 45, 61);
        transform: rotateX(180deg);
    }
</style>
    <div class="container-fluid">
        <div class="">
            <h4 class="d-flex text-center align-items-center justify-content-center my-5 ">Экономить своё время и деньги </br> с помощью наших сервисов</h4>
            <div class="row mt-5 ">
                <div class="col-md-3 col-sm-6 col-6 flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front d-flex align-items-center justify-content-center ">
                            <i class="fal fa-truck fa-3x text-success" aria-hidden="true"></i>
                        </div>
                        <div class="flip-box-back d-flex align-items-center justify-content-center">
                            <h3 class="fp-20  text-center ">Удобная и быстрая доставка</h3>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-6 slow-transition flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front d-flex align-items-center justify-content-center">
                            <i class="fal fa-credit-card fa-3x text-success" aria-hidden="true"></i>
                        </div>
                        <div class="flip-box-back d-flex align-items-center justify-content-center">
                            <h3 class="fp-20  text-center">Оплата производится любым способом</h3>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-6 slow-transition flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front d-flex align-items-center justify-content-center">
                            <i class="fal fa-phone fa-3x text-success" aria-hidden="true"></i>
                        </div>
                        <div class="flip-box-back d-flex align-items-center justify-content-center">
                            <h3 class=" fp-20  text-center">Поддержка 24/7</h3>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-6 slow-transition flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front d-flex align-items-center justify-content-center">
                            <i class="fal fa-thumbs-up fa-3x text-success" aria-hidden="true"></i>
                        </div>
                        <div class="flip-box-back d-flex align-items-center justify-content-center">
                            <h3 class="fp-20 text-center">Гарантия качества</h3>
                        </div>
                    </div>

                </div>

            </div>
        </div>                                                          
    </div>





