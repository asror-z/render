<?php


use zetsoft\widgets\inputes\ZKStarRatingWidget;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <style>
        .summary {
            font-family: 'Righteous', cursive;
        }


        .horizontal-card {
            margin-top: 10px;
            position: relative;
            max-height: 300px;
            border: 2px solid limegreen;
            border-radius: 5px;
        }

        
        
    </style>
</head>
<body>

        <div class="container">
            <div class="row">

                <div class="col-md-11">


                    <div class="d-flex horizontal-card">

                        <div class="col-md-4 horizontal-image">
                            <img src="https://my-nature.ru/image/cache/catalog/api-produkciya/agidel600_600-800x800.png" class="image-horizontal--item w-100 h-100" alt="">
                        </div>

                        <div class="col-md-8 horizontal-main">
                            <div class="row text-center">
                                <h2 class="mt-5 ml-3 texts">Арахисовая паста с мёдом</h2>
                                <h2 class="mt-5 ml-5 texts">200г</h2>
                            </div>
                            <div class="row w-50 mt-3 ml-1">
                                <p class="text-success">В наличии</p>
                                <p class="ml-4">art:1434234</p>
                            </div>
                            <div class="row mt-2">
                                <div class="d-flex col-md-12">

                                     <div class="col-md-6 d-flex p-0">
                                        <div class="col-md-3 p-0">
                                            <img class="w-100 h-75 mr-auto" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
                                        </div>
                                         
                                         <div class="pb-5">
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

                                     <div class="col-md-5 ml-auto ">
                                          <h2 class="text-success text-center summary ">162.000</h2>
                                          <h3 class="text-center text-light summary">сум за 1шт</h3>
                                     </div>

                                </div>

                            </div>
                            
                            <div class="row col-md-12 horizontal-card-bottom position-absolute left-0 mb-3">
                                <div class="d-flex align-items-center col-md-6">
                                    <i class="far fa-heart grey-text fa-2x pr-2 ml-2"></i>
                                    <p class="ml-2">избранние</p>
                                    <i class="fa fa-chart-bar grey-text fa-2x pr-2 ml-5"></i>
                                    <p class="ml-2">сравнить</p>
                                </div>
                                <div class="col-md-5 w-100 ml-auto mb-2">
                                     <button class="btn btn-success w-100 fs-1x">Добавить в корзину</button>
                                </div>


                            </div>
                            
                        </div>

                    </div>

                </div>

            </div>
        </div>


</body>
</html>

