<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

        @media (min-width: 1281px) {
            .resp-card-size{
                height: 210px;
            }
            .resp-photo{
                min-width: 100px;
                min-height: 100px;
                max-width: 318px;
                max-height: 210px;
            }
        }
        @media (min-width: 1025px) and (max-width: 1280px) {
            .resp-card-size{
                height: 210px;
            }
            .resp-photo{
                min-width: 100px;
                min-height: 100px;
                max-width: 300px;
                max-height: 210px;
            }

        }
        /*
          ##Device = Tablets, Ipads (portrait)
          ##Screen = B/w 768px to 1024px
        */

        @media (min-width: 768px) and (max-width: 1024px) {

            .resp-text{
                font-size: 20px;
            }

        }

        @media (min-width: 480px) and (max-width: 768px) {

            .resp-text{
                font-size: 20px;

            }
            .resp-photo{
                min-width: 80px;
                min-height: 150px;
                max-width: 200px;
                max-height: 210px;
            }

        }

        /*
          ##Device = Most of the Smartphones Mobiles (Portrait)
          ##Screen = B/w 320px to 479px
        */

        @media (min-width: 320px) and (max-width: 480px) {
            .resp-text{
                font-size: 15px;
            }
            .resp-photo-mob{
                margin-top: 50px;
                margin-left: 5px;
                min-width: 80px;
                min-height: 200px;
            }

            .resp-icon{
                width: 30px;
                height: 30px;
            }
            .resp-margin{
                margin-top: -24px;
            }
        }

    </style>
</head>
<body>



<div class="col-md-10 offset-md-1 zlist" id="{id}">
    <div class="row d-flex shadow-lg pt-2 mt-5 pb-2 rounded">
        <div class="col-md-4 p-1 resp-photo-mob resp-card-size">
            <!--<img width="auto" height="204px" src="{cardImage650x700}"  alt="">
            -->
            <div class="mini-card--image--all-horizontal" id="mini-card--image-horizontal-{id}">
                <!--<img class="w-100 h-50" src="{image}">-->
            </div>
        </div>

        <div class="col-md-8">
            <div class="row text-center wrap pl-3">
                <h2 class="ml-5 resp-text">Прага пирожное</h2>
                <h2 class="ml-5 resp-text">200г</h2>
            </div>
            <div class="row w-50 mt-3 ml-5">
                <p class="text-success fz-16">{isHave}</p>
                <p class="ml-4 text-black-50">art:1434234</p>
            </div>
            <div class="row mt-2">
                <div class="d-flex col-md-12">
                    <div class="col-md-6 d-flex p-0">
                        <img width="20%"  height="60%" src="/render/market/ZGlotrCardWidget/medal_new.svg"/>


                        <div class"resp-margin">
                        {rate}
                        <p class="ml-4">(2 отзыва)</p>
                    </div>

                </div>

                <div class="col-md-5 ml-auto ">
                    <h2 class="text-success text-center summary resp-text">{price}</h2>
                    <h3 class="text-center text-black-50 fp-22 pb-n4 summary resp-text">{currency} за 1шт</h3>
                </div>

            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="d-flex align-items-center col-md-6">
                    <i class="far fa-heart grey-text fa-2x pr-2 ml-2 resp-text"></i>
                    <p class="ml-1 resp-text">избраннoе</p>
                    <i class="fa fa-chart-bar grey-text fa-2x pr-2 ml-5 resp-text"></i>
                    <p class="ml-1 resp-text">сравнить</p>
                </div>
                
                <div class="col-md-6 w-100 ml-auto">
                    <!--<button class="btn btn-success w-100 fs-1x">Добавит в корзину
                    -->
                    <button class="w-100 border border-0 bg-success p-2 rounded text-white addtocard" id="addtocard-{id}"><i class=""></i>Добавить в корзину</button>
                    <div class="inputhide" id="inputhide-{id}">
                        <div class="d-flex">
                            
                            <button class="clearcard btn p-1" id="clearcard-{id}">
                                <i class="fas fa-backspace fa-3x"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>




</body>
</html>
