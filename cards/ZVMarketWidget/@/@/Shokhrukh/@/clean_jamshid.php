<?php


use zetsoft\widgets\inputes\ZKStarRatingWidget;

?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4 mt-5">
                <div class="card shadow border">
                    <div class="ml-4 px-1 py-3">
                        <h6 class="text-muted">ПОПУЛЯРНОЕ ПРЕДЛОЖЕНИЕ</h6>

                        <div class="d-flex align-items-center">
                            <div class="align-items-center">
                                <del><h6 class="text-muted mb-0">21 990&#8381/шт</h6></del>
                            </div>
                            <div class="align-items-center">
                                <span class="rounded-left badge badge-danger ml-2 ">-9%</span>
                            </div>
                        </div>
                        <h4>20 000 &#8381/шт</h4>
                        <div clas="">
                            <span><i class="fas fa-truck text-muted"></i></span>
                            <span class="text-success">Бесплатно курьером завтра</span>
                        </div>
                        <a href="#"><h6 class="">Все варианты доставки</h6></a>

                        <div class="text-muted"><i class="far fa-credit-card"></i> Картой/Наличными
                        </div>
                        <span class="text-muted">Цвет товара:красный <i class="fas fa-exclamation-triangle"></i></span>
                    </div>

                    <div class="d-flex justify-content-around border-top border-bottom">
                        <div><a href="#"  class="font-italic fp-26">Samsung.com</a></div>
                        <div class="d-flex flex-column">
                            <?
                            echo ZKStarRatingWidget::widget([
                                'name' => 'gggfg',
                                'config' => [
                                    'show' => false,
                                    'class'=> ''

                                ]
                            ]);
                            ?>
                            <span class="text-muted ml-2">5628 отзивов</span>
                        </div>
                    </div>
                    <div class="btn btn-success">
                        <submit>В магазин</submit>
                    </div>


                </div>
            </div>
           
        </div>
    </div>
</div>


