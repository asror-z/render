<?php

use zetsoft\system\assets\ZColor;
use zetsoft\widgets\navigat\ZButtonWidget; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">


    <style>
        .my-account .menu-list {
            list-style: none;
            border-bottom: 1px solid rgba(128, 128, 128, 0.493);

        }
        .my-account .menu-list a {
            text-decoration: none;
            font-size: 20px;
            font-weight: 500;
            color: black;

        }
        .my-account .menu-list a.active::after {
            content: "";
            display: block;
            width: 100%;
            height: 6px;
            background: limegreen;
            margin-bottom: -3px;
        }

        .icon-basket{
            border: 1px solid #53b929;
            border-radius: 5px;
            padding: 6px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #53b929;
            color: #ffffff;
            text-decoration: none;

        }
        .icon-basket img{
            color: #ffffff;
        }
        .clean-icon{
            font-size: 22px;
            color: gray;
        }


        .basket{
            border-bottom: 1px solid rgba(128, 128, 128, 0.548);

        }
        .price-basket{
            font-size: 18px;
            font-weight: 500;
            color: #53b929;
        }
        .clean-story{
            color: gray;
        }
        .btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active, .show>.btn-outline-success.dropdown-toggle {
            color: #fff!important;
            background-color: #28a745!important;
            border-color: #28a745!important;
        }
    </style>

</head>
<body>
<div class="my-account">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h2 class="content-title">
                    Мой профиль
                </h2>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="nav-menu">
                    <ul class="menu-list d-flex justify-content-around  pl-0">
                        <li class="menu-link"><a href="#" class="change">Изменить профиль</a></li>
                        <li class="menu-link"><a href="#" class="my-order active">Мои заказы</a></li>
                        <li class="menu-link"><a href="#" class="message ">Сообщения</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="select">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <?php
                    echo \zetsoft\widgets\navigat\ZButtonWidget::widget([
                        'config'=> [
                            'color' => ZColor::color['green-special'],
                            'text' => 'История заказов',
                            'btn' => true,
                            'btnType' => ZButtonWidget::btnType['link'],
                            'btnStyle' => ZButtonWidget::btnStyle['btn-transparent'],
                            'class' => 'btn btn-outline-success pr-5  rounded',
                            'url' => '#',
                            'btnRounded' => false,

                        ],
                    ]);
                ?>
                <?php
                echo \zetsoft\widgets\navigat\ZButtonWidget::widget([
                    'config'=> [
                        'color' => ZColor::color['green-special'],
                        'text' => 'Текущие заказы',
                        'btn' => true,
                        'btnType' => ZButtonWidget::btnType['link'],
                        'btnStyle' => ZButtonWidget::btnStyle['btn-transparent'],
                        'class' => 'btn btn-outline-success pr-5 rounded',
                        'url' => '#',
                        'btnRounded' => false,

                    ],
                ]);
                ?>

            </div>

            <div class="col-lg-7 d-flex justify-content-between align-items-center">
                <p class="year-order mt-5"><span class="date-order"><b>Март 20 </b></span>  2020 г. 10:03</p>
                <a href="#" class="clean-icon mt-5"><i class="fa fa-trash" aria-hidden="true"></i></a>

            </div>

            <?php
            $item = new \zetsoft\dbitem\shop\ProductItem();
            $item->price = [123];
            $item->currency = "$";
                echo \zetsoft\widgets\market\ZMButtonWidget::widget([
                    'config' => [],
                    'model' => $item
                ]);
            ?>

            <div class="col-lg-7 d-flex justify-content-between align-items-center">
            <p class="year-order mt-5"><span class="date-order"><b>Март 28 </b></span>  2020 г. 11:04</p>
            <a href="#" class="clean-icon mt-5"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </div>

            <?php
            $item = new \zetsoft\dbitem\shop\ProductItem();
            $item->price = [198];
            $item->currency = "$";
            echo \zetsoft\widgets\market\ZMButtonWidget::widget([
                'config' => [
                    'number' => 2,
                ],
                'model' => $item,
            ]);
            ?>



            <div class="col-12 mt-5 mb-5">
                <a href="#" class="clean-story">Очистить историю заказов</a>
            </div>


        </div>
    </div>
</div>


<script>

    const steps =
        [
            {name: 'Step 1', component: <Step1 />},
    {name: 'Step 2', component: <Step2 />},
    {name: 'Step 3', component: <Step3 />},
    {name: 'Step 4', component: <Step4 />},
    {name: 'Step 5', component: <Step5 />}
    ]
</script><script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.0/build/js/intlTelInput.js"></script>
</body>
</html>
