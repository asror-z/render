<?php


use zetsoft\widgets\incores\ZMCheckboxWidget;
use zetsoft\widgets\inptest\ZChechBoxesWidget; ?>


<style>
    .input-checkbox {
        opacity: 1 !important;
        pointer-events: initial;
    }
</style>

<div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 shadow-sm rounded px-3 py-3 bg-white">
        <div class="blocks-shadow">
            <h3 class="fp-25">Состав заказа</h3>
            <div class="">
                <img src="https://olcha.uz/image/80x80/wb4hldkfQb0bp2SFYQhsPBDVZZwSbHDL7urgdVXyidMhtQDbqsU9VGqhUULd.jpeg"
                     class=" float-left" alt="Сумка - рюкзак помощница для мамы, Red/White">
                <div class="border-bottom">
                    <a href="#" class="fp-20">
                        Сумки
                    </a>
                    <p class="fp-20 m-0" style="min-height: 36px">Сумка - рюкзак помощница для мамы, Red/White</p>
                    <p class="fp-12"><span class="">1шт x </span>270
                        000 сум</p>
                </div>
            </div>

            <div class="pl-3 pr-3 border-bottom">
            
                <p class="mb-3 fp-20 mt-3">Выбранный способ доставки и
                    оплаты</p>

                <h3 class="title fp-20 fw-700 mb-2">Доставка:</h3>

                <p class="m-0 fp-20">Доставка на дом или в офис</p>

                <p class="fp-20"><span class="checkout__grey">Тип доставки: </span><span>Не выбрано</span></p>

                <h3 class=" fp-20 mb-0">Способ оплаты: </h3>
                <p class="">Наличный расчет</p>

                </div>

            <div class="pl-3 pr-3 border-bottom ">
                <p class="fp-20">Итого: <span class="text-bold fp-20 float-right" data-original="270000">270 000 сум</span>
                </p>
            </div>

            <div class="pl-3 pr-3 border-bottom ">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex p-1 justify-content-lg-between checkbox-main">
                        
                       <?
                        echo ZMCheckboxWidget::widget([])
                       ?>
                        <p class="ml-3">
                            Нажимая "Оформить заказ", я соглашаюсь с <a href="#" class="link">публичным договором оферты</a>
                        </p>

                    </div>

                </div>


                <button disabled="true" class="btn btn-block btn-success rounded checking-btn">
                    Оформить заказ
                </button>
            </div>
            <p class="fp-15 text-center">Для расчета стоимости доставки крупногабаритного товара весом
                более 1кг обращайтесь к оператору Call-центра*</p>
        </div>
    </div>
</div>


