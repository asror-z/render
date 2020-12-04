<?php


use zetsoft\widgets\inputes\ZKStarRatingWidget;

?>


<div class="container ">

    <div class="row mt-5">

        <div class="col-md-12 border rounded shadow">
            <div class="row ">
                <div class="col-md-8 mt-2 ">

                    <div class="">
                        <a href="#"><h4>Стационарный блендер Silanga BL550 Gray</h4></a>
                        <div class="accordion" id="accordionExample">
                            <a class=" text-left"
                               data-toggle="collapse" data-target="#collapseOne"
                            >Производитель процессора: Samsung, Поддержка 2G: Да, Страна:
                                Индия, Разъем....</a>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                <div class="">
                                    для наушников: 3.5 мм, Гарантия: 1 год, Проводная гарнитура: Да, Тип процессора:
                                    Exynos 9611, Порт USB: Type-C USB 2.0, Блок питания: Да, Емкость аккумулятора: 4000
                                    мАч, Сканер отпечатка пальца под экраном: Да, Технология Wi-Fi Direct: Да,
                                    Количество ядер: 8, Wi-Fi точка доступа: Да, Габаритные размеры (В*Ш*Г)
                                </div>
                            </div>

                        </div>

                        <div class="d-flex align-items-center">
                            <span>
                            <a href="#" class="font-italic fp-15 text-bold">MarketPlace.com</a>
                            </span>
                            <div class="d-flex ml-3">
                                <?
                                echo ZKStarRatingWidget::widget([
                                    'name' => 'gggfg',
                                    'config' => [
                                        'show' => false,
                                        'class' => ''

                                    ]
                                ]);
                                ?>
                                <a href="#"><span class="text-muted ml-2">5628 отзывов</span></a>
                            </div>
                        </div>

                        <span>Гарантия производителя.</span>
                    </div>
                </div>

                <div class=" col-md-4">

                        <div class="d-flex align-items-center">
                            <div class="align-items-center">
                                <del><h6 class="text-muted mb-0">21 990&#8381/шт</h6></del>
                            </div>
                            <div class="align-items-center">
                                <span class="rounded-left badge badge-danger ml-2 ">-9%</span>
                            </div>
                        </div>
                        <h4>20 000 &#8381/шт</h4>

                            <span><i class="fas fa-truck text-muted"></i></span>
                            <span class="text-success">Бесплатно курьером завтра</span>

                            <a href="#"><h6>Все варианты доставки</h6></a>

                        <h6 class="text-muted"><i class="far fa-credit-card"></i> Картой/Наличными
                        </h6>
                       <div>
                            <span class="text-muted">Цвет товара:красный <i
                                        class="fas fa-exclamation-triangle"></i></span>
                       </div>

                        <button type="button" class="btn btn-success btn-sm ">В магазин</button>
                    </div>

            </div>
        </div>




    </div>
</div>
   
