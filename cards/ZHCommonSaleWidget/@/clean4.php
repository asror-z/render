<?php


use zetsoft\widgets\inputes\ZKStarRatingWidget;


?>


<style>
    .summary {
        font-family: 'Righteous', cursive;
    }

    @media (min-width: 1281px) {
        .resp-photo {
            background-position: center center;
            background-size: contain;
            background-repeat: no-repeat;
            /* min-width: 250px;*/
            height: auto;
            margin: 5px 5px 5px 5px;
            background-image: url("https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
        }

        .resp-text {
            font-size: 35px;
        }

        .resp-btn {
            font-size: 15px;
            width: 100%;
            height: auto;
        }

        .resp-icon {
            width: 100px;
            height: 100px;
        }

        .resp-rate {
            padding-top: 45px;
        }
    }

    @media (min-width: 1025px) and (max-width: 1280px) {
        
        .resp-icon {
            width: 100px;
            height: 100px;
        }

        .resp-rate {
            padding-top: 45px;
        }
        .resp-photo {
            background-position: center center;
            ;
            background-repeat: no-repeat;
            background-size: contain;
            margin: 5px 5px 5px 5px;
            /* width: 300px;*/
            height: auto;
            margin-left: 2px;
            background-image: url("https://images.pexels.com/photos/1624487/pexels-photo-1624487.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        }

    }


    @media (min-width: 768px) and (max-width: 1024px) {
        .resp-text {
            font-size: 20px;
        }

        .resp-icon {
            width: 80px;
            height: 80px;
        }


        .resp-rate {
            padding-top: 45px;
        }
        .resp-photo {
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            margin: 3px 3px 3px 3px;
            background-image: url("https://images.pexels.com/photos/1624487/pexels-photo-1624487.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        }
    }

    @media (min-width: 481px) and (max-width: 767px) {

        .resp-icon {
            width: 100px;
            height: 100px;
        }

        .resp-rate {
            padding-top: 45px;
        }
        .resp-text {
            font-size: 20px;
        }
        .resp-photo {
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            margin: 3px 3px 3px 3px;
            background-image: url("https://images.pexels.com/photos/1624487/pexels-photo-1624487.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        }
    }


    @media (min-width: 320px) and (max-width: 480px) {
        .resp-text {
            font-size: 20px;
            margin-left: 20px;
            
        }

        .resp-photo {
            background-position: center center;
            background-size: contain;
            background-repeat: no-repeat;
            margin: 2px 2px 2px 2px;
            background-image: url("https://images.pexels.com/photos/1624487/pexels-photo-1624487.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        }
        .second-matter{


            margin-left: 0!important;
           
        }
        .resp-icon {
            width: 30px;
            height: 30px;
        }

        .resp-btn {
            font-size: 10px;
            width: auto;
            height: 40px;
            padding-bottom: 3px;
        }

        .resp-rate {
            padding-top: 25px;
        }
    }
</style>


<div class="d-flex flex-wrap rounded shadow my-4 ">
    <div class="col-md-4 col-sm-2 col-xs-1 d-flex align-items-center resp-photo fluid"></div>
    <div class="">
        <div class="d-flex align-items-end flex-column pr-3">


        </div>
        <div class="d-flex flex-sm-column flex-md-row align-content-between one">
            <div class="m-3">
                <div class="mt-1 resp-text ">Арахисовая паста с мёдом &nbsp; 200г</div>
                <div class="text-success">В наличии <span class="text-muted">art:1434234</span></div>
                <div class="d-flex">

                    <div class="d-flex mr-auto p-0">
                        <div class="p-0 resp-icon">
                            <img class="w-100 h-75 mr-auto"
                                 src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
                        </div>

                        <div class="resp-rate mt-n4">
                            <?
                            echo ZKStarRatingWidget::widget([
                                'name' => 'gggfg',
                                'config' => [
                                    'show' => false
                                ]
                            ]);
                            ?>
                            <p class="ml-4">(2 отзыва)</p>
                        </div>
                    </div>
                </div>



                <div class="d-flex align-items-end">
                    <div class="d-flex">
                        <i class="far fa-heart grey-text pr-1 ml-2 mb-2 resp-text"></i>
                        <p class="ml-2">Избранное</p>
                        <i class="fa fa-chart-bar grey-text pr-1 ml-4 mb-2 resp-text"></i>
                        <p class="ml-2">Сравнить</p>
                    </div>
                </div>

            </div>
            <div class="ml-5 cl-l second-matter">
                <div class="mt-1 resp-text"> </div>
                <div class="">
                    <br>
                    <br>
                    <h2 class="text-success text-center summary  resp-text">162.000</h2>
                    <h3 class="text-center text-light summary resp-text">сум за 1шт</h3>
                </div>
                <div class="d-flex justify-content-end float-lg-right">
                    <button class="btn btn-success resp-btn ">Добавить в корзину</button>
                </div>
            </div>
        </div>
        <!--       </div>
           </div>
        </div>-->




