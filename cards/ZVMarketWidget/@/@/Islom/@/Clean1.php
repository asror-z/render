<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZSVGWidget;
use zetsoft\widgets\market\ZTabItemWidget;

?>




<div class="card-group">
    <div class="card m-2">
        <div>
            <?
            echo ZSVGWidget::widget([
            'config' => [
                'type' => ZSVGWidget::type['free_delivery']

            ]
                ]);
            ?>
        </div>
        <div class="position-relative">
            <span class="postion-absolute">
                
            </span>
            <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
        </div>

<!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
-->
                                         

        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Арахисовая паста с медом 200г</div>
                <div class="d-flex mt-1">
                    <i class="far fa-heart grey-text mr-2 card-text"></i>
                    <i class="fa fa-chart-bar grey-text card-text"></i>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="card-text">В наличии</div>
                <div class="text-muted card-text">Art: 34234234</div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="d-flex"><h2 class="text-success card-text">14,890</h2><h4 class="text-muted card-text">сум. за 1 шт</h4> </div>
                <div class="card-text">
                    <?
                    echo ZKStarRatingWidget::widget([
                        'name' => 'gggfg',
                        'config' => [
                            'show' => false
                        ]
                    ]); ?>
                    <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
                </div>

            </div>
            
        </div>
        <a href="#" class="btn button-bg-color text-white">Добавить в корзину</a>
    </div>








    <div class="card m-2">
        <!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
        -->
        <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top resp-photo" alt="...">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Арахисовая паста с медом 200г</div>
                <div class="d-flex mt-1">
                    <i class="far fa-heart grey-text mr-2"></i>
                    <i class="fa fa-chart-bar grey-text"></i>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="card-title card-text">В наличии</div>
                <div class="card-text">Art: 34234234</div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="d-flex"><h2 class="text-success card-text">14,890</h2><h4 class="text-muted card-text">сум. за 1 шт</h4> </div>
                <div class="card-text">
                    <?
                    echo ZKStarRatingWidget::widget([
                        'name' => 'gggfg',
                        'config' => [
                            'show' => false
                        ]
                    ]); ?>
                    <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
                </div>

            </div>


            <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
        </div>
        <a href="#" class="btn button-bg-color text-white">Добавить в корзину</a>
    </div>

</div>
