<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\cards\ZMiniCardWidget;
use zetsoft\widgets\market\ZZoomWpWidget;
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="classic-tab mt-5 px-2">

                <ul class="nav d-flex text-center row justify-content-between" id="myClassicTabShadow" role="tablist">


                    <li class="nav-item border border-dange px-0 col-sm">
                        <a class="nav-link  waves-light text-muted w-100 fp-17 active show" id="profile-tab-classic-shadow"
                           data-toggle="tab" href="./clean_Axror_2.php"
                           role="tab" aria-controls="profile-classic-shadow" aria-selected="true">Описание</a>
                    </li>


                    <li class="nav-item border border-dange px-0 col-sm">
                        <a class="nav-link waves-light fp-17 w-100 text-muted" id="follow-tab-classic-shadow"
                           data-toggle="tab" href="#follow-classic-shadow"
                           role="tab" aria-controls="follow-classic-shadow" aria-selected="false">Характеристики</a>
                    </li>


                    <li class="nav-item border border-dange px-0 col-sm">
                        <a class="nav-link waves-light fp-17 w-100 text-muted" id="contact-tab-classic-shadow"
                           data-toggle="tab" href="#contact-classic-shadow"
                           role="tab" aria-controls="contact-classic-shadow" aria-selected="false">Цены 123</a>
                    </li>
                    <li class="nav-item border border-dange px-0 col-sm">
                        <a class="nav-link waves-light fp-17 w-100 text-muted" id="awesome-tab-classic-shadow"
                           data-toggle="tab" href="#awesome-classic-shadow"
                           role="tab" aria-controls="awesome-classic-shadow" aria-selected="false">Карта 123</a>
                    </li>
                    <li class="nav-item border border-dange px-0 col-sm">
                        <a class="nav-link waves-light fp-17 w-100 text-muted" id="awesome-tab-classic-shadow"
                           data-toggle="tab" href="#awesome-classic-shadow"
                           role="tab" aria-controls="awesome-classic-shadow" aria-selected="false">Отзывы 123</a>
                    </li>
                    <li class="nav-item border border-dange px-0 col-sm">
                        <a class="nav-link waves-light fp-16 w-100 text-muted" id="awesome-tab-classic-shadow"
                           data-toggle="tab" href="#awesome-classic-shadow"
                           role="tab" aria-controls="awesome-classic-shadow" aria-selected="false">Обзоры 123</a>
                    </li>
                    <li class="nav-item border border-dange">
                        <a class="nav-link waves-light fp-17 text-muted" id="awesome-tab-classic-shadow"
                           data-toggle="tab" href="#awesome-classic-shadow"
                           role="tab" aria-controls="awesome-classic-shadow" aria-selected="false">Вопросы о товаре 123</a>
                    </li>


                </ul>

                <!--     <div class="tab-content row card" id="myClassicTabContentShadow">-->
                <!-- <div class="tab-pane fade active show" id="profile-classic-shadow" role="tabpanel"
                         aria-labelledby="profile-tab-classic-shadow">
                         <?/*
                         echo $this->require( '/render/cards/ZSingleCommonWidget/clean_Axror_1.php');
                         */?>
                    </div>  -->

                <div class="tab-pane fade" id="profile-classic-shadow" role="tabpanel"
                     aria-labelledby="profile-tab-classic-shadow">
                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                        nisi ut
                        aliquid ex ea commodi c
                        quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                        pariatur?</p>
                </div>
                <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel"
                     aria-labelledby="follow-tab-classic-shadow">
                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                        nisi ut
                        aliquid ex ea commodi c
                        quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                        pariatur?</p>
                </div>
                <div class="tab-pane fade" id="contact-classic-shadow" role="tabpanel"
                     aria-labelledby="contact-tab-classic-shadow">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum
                        molestias excepturi sint occaecati cupiditate
                        non
                        provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                        dolorum fuga.
                        Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                        nobis est
                        eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis
                        voluptas
                        assumenda est, omnis dolor repellendus. </p>
                </div>
                <div class="tab-pane fade" id="awesome-classic-shadow" role="tabpanel"
                     aria-labelledby="awesome-tab-classic-shadow">
                    <p> sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore
                        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia
                        deserunt mollit anim id est laborum.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="col-5" style="display: block">
        <?php /*echo ZZoomWidget::widget([
                    'data' => $product->image
                ]) */

        Az::$app->market->wish->writeViewed(2);
        ?>
        <?php echo ZZoomWpWidget::widget([
            /*'data'=> $product->image*/
        ]) ?>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-6 d-flex flex-column align-items-end">
                <div>
                    <h6 class="mb-0">
                        Цвет товара: Неважно
                    </h6>
                </div>
                <div>
                    <div class="select-color d-flex justify-content-start mt-2">
                        <a class="img-prod mr-1">
                            <img width="40" class="border border-secondary p-1" src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png">
                        </a>
                        <a class="img-prod mr-1">
                            <img width="40" class="border border-secondary p-1" src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png">
                        </a>
                        <a class="img-prod mr-1">
                            <img width="40" class="border border-secondary p-1" src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png">
                        </a>
                        <a class="img-prod mr-1">
                            <img width="40" class="border border-secondary p-1" src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png">
                        </a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="mb-0">
                        Состояние товара: Неважно
                    </h6>
                </div>
                <div>
                    <div class="select-status d-flex justify-content-start align-items-start mt-2">
                        <a class="img-prod mr-1 border p-2">
                            <p class="fe-08 mb-0">
                                Новый
                            </p>
                            <p class="fe-08 mb-0">
                                от 37 999 ₽
                            </p>
                        </a>
                        <a class="img-prod mr-1 border p-2">
                            <p class="fe-08 mb-0">
                                Новый
                            </p>
                            <p class="fe-08 mb-0">
                                от 37 999 ₽
                            </p>
                        </a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6>Коротко о товаре</h6>
                    <ul class="pl-4 mb-0 fe-08">
                        <li class="font-weight-light">смартфон с Android 9.0</li>
                        <li class="font-weight-light">смартфон с Android 9.0</li>
                        <li class="font-weight-light">смартфон с Android 9.0</li>
                        <li class="font-weight-light">смартфон с Android 9.0</li>
                        <li class="font-weight-light">смартфон с Android 9.0</li>
                        <li class="font-weight-light">смартфон с Android 9.0</li>
                        <li class="font-weight-light">смартфон с Android 9.0</li>
                    </ul>
                    <div class="mb-3">
                        <a href="#">Все характеристики</a>
                    </div>
                    <div class="mb-3">
                        <a href="#">Задать вопрос о товаре</a>
                    </div>
                    <div>
                        <a href="#">Все товары <span class="font-weight-bold">SAMSUNG</span> </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <?
                echo ZMiniCardWidget::widget([

                ])
                ?>
                <?
                echo ZMiniCardWidget::widget([

                ])
                ?>
                <?
                echo ZMiniCardWidget::widget([

                ])
                ?>
            </div>
        </div>
    </div>
</div>

</div>


