<?php


use zetsoft\widgets\inputes\ZKStarRatingWidget;


?>

<style>
    .summary {
        font-family: 'Righteous', cursive;
    }
    @media (min-width: 1281px) {
        .resp-photo{
            background-position: center center;
            background-size:  contain;
            background-repeat:  no-repeat;
            width: 100%;
            height: auto;
            margin-left: 5px;
            background-image: url("https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
        }
        .resp-text{
            font-size: 35px;
        }
        .resp-btn {
            font-size: 15px;
            width: 100%;
            height: auto;
        }
        .resp-icon{
            width: 100px;
            height: 100px;
        }
    }
    @media (min-width: 1025px) and (max-width: 1280px) {
        .resp-photo{
            background-position: center center;
            background-size:  contain;
            background-repeat:  no-repeat;
            width: 100%;
            height: auto;
            margin-left: 5px;
            background-image: url("https://images.pexels.com/photos/1624487/pexels-photo-1624487.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        }
        .resp-icon{
            width: 100px;
            height: 100px;
        }

    }


    @media (min-width: 768px) and (max-width: 1024px) {
        .resp-text{
            font-size: 20px;
        }
        .resp-icon{
            width: 100px;
            height: 100px;
        }

    }
    @media (min-width: 481px) and (max-width: 767px) {

        .resp-icon{
            width: 100px;
            height: 100px;
        }

    }


    @media (min-width: 320px) and (max-width: 480px) {
        .resp-text{
            font-size: 20px;
        }
        .resp-photo{
            background-position: center center;
            background-size:  contain;
            background-repeat:  no-repeat;
            width: 100%;
            height: auto;
            margin-left: 5px;
            background-image: url("https://images.pexels.com/photos/1624487/pexels-photo-1624487.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        }
        .resp-icon{
            width: 30px;
            height: 30px;
        }
        .resp-btn{
            font-size: 10px;
            width: auto;
            height: 40px;
        }
    }
</style>

<!--<div class="container">
    <div class="row">
        <div class="col-6">-->
<div class="d-flex rounded shadow my-4">
    <div class="col-md-4 d-flex align-items-center justify-content-center resp-photo">

    </div>

    <div class="">
        <div class="d-flex flex-column text-center">
            <h2 class="mt-1 resp-text ">Арахисовая паста с мёдом &nbsp; 200г</h2>
            <div class="">
                <p class="text-success">В наличии <span class="text-muted">art:1434234</span></p>
                <p class="ml-2"></p>
            </div>

        </div>

        <div class="">
            <div class="d-flex">

                <div class="d-flex justify-content-start p-0">
                    <div class="p-0 resp-icon">
                        <img class="w-100 h-75 mr-auto" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
                    </div>

                    <div class="mt-xl-3 mt-n4">
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

                <div class="d-flex justify-content-end ">
                    <h2 class="text-success text-center summary  resp-text">162.000</h2>
                    <h3 class="text-center text-light summary resp-text">сум за 1шт</h3>
                </div>
            </div>

        </div>

        <div class="row col-md-12">
            <div class="d-flex align-items-center col-md-6">
                <i class="far fa-heart grey-text pr-1 ml-2 mb-2 resp-text"></i>
                <p class="ml-2">Избранное</p>
                <i class="fa fa-chart-bar grey-text pr-1 ml-4 mb-2 resp-text"></i>
                <p class="ml-2">Сравнить</p>
            </div>
            <div class="col-md-5 ml-auto">
                <button class="btn btn-success resp-btn">Добавить в корзину</button>
            </div>
        </div>
    </div>
</div>
<!--       </div>
   </div>
</div>-->





