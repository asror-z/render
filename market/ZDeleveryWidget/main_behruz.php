<?php

use zetsoft\widgets\market\ZSVGWidget;


?>
<style>
    @media(max-width: 576px) {
        .vgor{
            font-size: 30px;
        }
        .vgorr{
            font-size: 35px;
        }
        .col-lg-6 svg{
            width: 300px;
            height: 300px;
        }
    }

</style>
    <div class="market-container">

        <div class="row">
            <div class="col-lg-6 my-3">
                <h2 class="mt-5">Доставляем</h2>
                <div class="d-flex mt-3">
                    <h1 class="text-success vgor">в 12 городах <h1 class="ml-3 vgorr">Узбекистанa</h1></h1>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6 col-sm-6 text-muted">
                        <h5>Андижанская область</h5>
                        <h5>Бухарская область</h5>
                        <h5>Джизакская область</h5>
                        <h5>Кашкадарьинская область</h5>
                        <h5>Наманганская область</h5>
                        <h5>Навоийская область</h5>

                    </div>
                    <div class="col-lg-6 col-sm-6 text-muted">
                        <h5>Самаркандская область</h5>
                        <h5>Сурхандарьинская область</h5>
                        <h5>Сырдарьинская область</h5>
                        <h5>Ташкентская область</h5>
                        <h5>Ферганская область</h5>
                        <h5>Хорезмская область</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?
                    echo ZSVGWidget::widget([
                    'config' => [
                        'type' => ZSVGWidget::type['marketLocationGray']
                    ]
                    ])
                ?>

            </div>
        </div>
    </div>
    </div>



