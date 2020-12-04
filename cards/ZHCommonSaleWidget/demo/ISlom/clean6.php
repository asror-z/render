<?php


use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZSVGWidget;


?>

<style>

</style>

<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4 d-flex align-items-center">

            <div class="position-relative overflow-hidden">
                <div class="position-absolute p-2">
        <span style="left: 10%; top: 10% " class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 text-white rounded fe-10">
                -10%
            </span>
                </div>
            </div>
            <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img img-fluid"  alt="...">

        </div>
        <div class="col-md-8">
            <div class="card-body">
                <div class="fe-20">Арахисовая паста с мёдом &nbsp; 200г</div>
                <div class="d-flex justify-content-between">
                    <div class="green-text-color fe-14">В наличии <span class="text-muted ml-3 fe-8">Арт:1434234</span>
                        <div class="d-flex mt-3">
                        <div>
                            <?
                            echo ZSVGWidget::widget([
                                'config' => [
                                    'type' => ZSVGWidget::type['top_sell']
                                ]
                            ]);
                            ?>
                        </div>
                            <div class="mt-1">
                                <?
                                echo ZKStarRatingWidget::widget([
                                    'name' => 'gggfg',
                                    'config' => [
                                        'show' => false
                                    ]
                                ]);
                                ?>
                                <p class="text-center text-muted fe-10">(2 отзыва)</p>
                            </div>
                        </div>
                        <div class="d-flex card-text align-items-center mt-2">
                            <i class="far fa-heart grey-text pr-1 ml-2 mb-3 mt-4 h4"></i>
                            <p class="fe-12 ml-2 mt-4">Избранное</p>
                            <i class="fa fa-chart-bar grey-text pr-1 ml-4 mb-2 mt-4 h4"></i>
                            <p class="ml-2 mt-4">Сравнить</p>
                        </div>

                    </div>
                    <div>
                        <div class="text-danger d-flex ml-4">
                        </div>
                          <div class="d-flex flex-wrap">
                              <div class="text-center text-success fe-18 font-weight-bold">14,890 - 18,000</div>
                          </div>
                        <div class="text-center fe-16 mt-1 ml-1 text-muted">сум за 1шт</div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






