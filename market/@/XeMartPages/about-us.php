<?php

use zetsoft\system\Az;
use zetsoft\widgets\images\ZSlickWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\market\ZDivsWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\market\ZMSwiperWidget;
/*
 * Template
 * /render/market/XeMart%20-%20Ecommerce%20Template/html/03-about-us.html
 * */
Az::$app->controller->layout = 'bozorMain';

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Welcome to <span>XeMart</span></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quod facere praesentium
                odit. Repellat porro et laudantium, atque similique distinctio.<br> Nemo quidem obcaecati aut
                possimus
                voluptatibus dignissimos facilis sit. Qui.Lorem ipsum dolor sit amet,
                consectetur
                adipisicing elit. Eos ipsum, ut! Numquam nesciunt, ex obcaecati libero asperiores reprehenderit
                ratione minus commodi magni fugit non nemo quas dolorum nisi ducimus laboriosam!
            </p>
            <?
                echo ZButtonWidget::widget([
                    'config' => [
                            'text' => 'Read More',
                            'btnSize' => ZButtonWidget::btnSize['btn-md'],
                            'btnStyle' => ZButtonWidget::btnStyle['btn-outline-primary'],
                            'btnScale' => ZButtonWidget::btnScale['1']
                    ]
                ])
            ?>
        </div>
        <div class="col-md-6" style="margin-bottom: 30px;">
            <?
                echo ZDivsWidget::widget([
                    'config' => [
                            'height' => 300,
                            'background' => 'gray'
                    ]
                ]);
            ?>
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-4">
            <?
            echo ZDivsWidget::widget([
                'config' => [
                    'height' => 200,
                    'background' => 'gray'
                ]
            ]);
            ?>
        </div>
        <div class="col-md-4">
            <?
            echo ZDivsWidget::widget([
                'config' => [
                    'height' => 200,
                    'background' => 'gray'
                ]
            ]);
            ?>
        </div>
        <div class="col-md-4">
            <?
            echo ZDivsWidget::widget([
                'config' => [
                    'height' => 200,
                    'background' => 'gray'
                ]
            ]);
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="history">
                <h5>Our History</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ut iure doloribus ratione quia nam
                    ducimus
                    nemo, culpa vero eveniet magni fugit non nemo quas dolorum nisi ducimus laboriosam.</p>
                <ul class="list-unstyled">
                    <li>
                        <?
                            echo ZHCheckboxWidget::widget([
                                'config' => [
                                        'placeholder' => 'Numquam nesciunt, ex obcaecati libero asperiores'
                                ]
                            ])
                        ?>
                    </li>
                    <li>
                        <?
                        echo ZHCheckboxWidget::widget([
                            'config' => [
                                'placeholder' => 'Ipsa ut iure doloribus ratione quia nam ducimus'
                            ]
                        ])
                        ?>
                    </li>
                    <li>
                        <?
                        echo ZHCheckboxWidget::widget([
                            'config' => [
                                'placeholder' => 'Reprehenderit ratione minus commodi magni'
                            ]
                        ])
                        ?>
                    </li>
                    <li>
                        <?
                        echo ZHCheckboxWidget::widget([
                                'config' => [
                                    'placeholder' => 'Porro et laudantium, atque similique'
                        ]
                        ])
                        ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="history">
                <h5>Our History</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ut iure doloribus ratione quia nam
                    ducimus
                    nemo, culpa vero eveniet magni fugit non nemo quas dolorum nisi ducimus laboriosam.</p>
                <ul class="list-unstyled">
                    <li>
                        <?
                        echo ZHCheckboxWidget::widget([
                            'config' => [
                                    'placeholder' => 'Numquam nesciunt, ex obcaecati libero asperiores'
                            ]
                        ])
                        ?>

                    </li>
                    <li>
                        <?
                        echo ZHCheckboxWidget::widget([
                            'config' => [
                                'placeholder' => 'Ipsa ut iure doloribus ratione quia nam ducimus'
                            ]
                        ])
                        ?>
                    </li>
                    <li>
                        <?
                        echo ZHCheckboxWidget::widget([
                            'config' => [
                                'placeholder' => 'Reprehenderit ratione minus commodi magni'
                            ]
                        ])
                        ?>
                    </li>
                    <li>
                        <?
                        echo ZHCheckboxWidget::widget([
                            'config' => [
                                'placeholder' => ' Porro et laudantium, atque similique'
                            ]
                        ])
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <?
            echo ZSlickWidget::widget([
                'config' => [
                    'dots' => true,
                    'slidesToShow' => 3,
                    'slidesToScroll' => 1,
                    'autoplay' => false,
                    'autoplaySpeed' => 5000,
                    'items' => [
                        'item1' => 'item1',
                        'item2' => 'item2',
                        'item3' => 'item3',
                        'item4' => 'item4',
                        'item5' => 'item5',
                        'item6' => 'item6',
                        'item7' => 'item7',
                    ]
                ]
            ]);
            ?>
        </div>

    </div>

    <div class="row">
        <div class="container">
            <?
            echo ZMSwiperWidget::widget([
                'config' => [
                    'slidesPerView' => 4,
                    'spaceBetween' => 20,
                    'items' => [
                        'item1' => 'item1',
                        'item2' => 'item2',
                        'item3' => 'item3',
                        'item4' => 'item4',
                        'item5' => 'item5',
                        'item6' => 'item6',
                        'item7' => 'item7',
                    ]
                ]
            ]);
            ?>
        </div>
    </div>


</div>
