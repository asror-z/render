<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\widgets\incores\ZGrapesCheckboxWidget;
use zetsoft\widgets\inptest\ZMaterialCheckboxWidget;
use zetsoft\widgets\inputes\ZKRangeWidget;
use zetsoft\widgets\market\ZMarketCardsWidget;
use zetsoft\widgets\market\ZMyCardWidget;
use zetsoft\widgets\navigat\ZAccLayWidget;
use zetsoft\widgets\navigat\ZBreadCrumbWidget;


echo ZBreadCrumbWidget::widget([])
?>

<div class="row">
    <div class="col-md-3">
        <h1 class="text-uppercase">Филтры</h1>

        <?php
        echo ZAccLayWidget::widget([
            'config' => [
                'bgColor' => ZAccLayWidget::bgColor['bg-info'],
                'textColor' => ZAccLayWidget::textColor['text-dark'],
                'icon' => 'fa fa-home',
                'title' => 'lorem',
                'content' => ZMaterialCheckboxWidget::widget([
                        'config' => [
                            'color' => ZMaterialCheckboxWidget::colors['orange'],
                            'label' => 'Bez Glotena'
                        ]
                    ]) . ZMaterialCheckboxWidget::widget([
                        'config' => [
                            'color' => ZMaterialCheckboxWidget::colors['green'],
                            'label' => 'Bez Saxara'
                        ]
                    ]) . ZMaterialCheckboxWidget::widget([
                        'config' => [
                            'color' => ZMaterialCheckboxWidget::colors['deeppurple'],
                            'label' => 'Bezlaktozniy'
                        ]
                    ]) . ZMaterialCheckboxWidget::widget([
                        'config' => [
                            'color' => ZMaterialCheckboxWidget::colors['purple'],
                            'label' => 'Postniy'
                        ]
                    ]),
            ]
        ]);
        echo ZAccLayWidget::widget([
            'config' => [
                'bgColor' => ZAccLayWidget::bgColor['bg-info'],
                'textColor' => ZAccLayWidget::textColor['text-dark'],
                'icon' => 'fa fa-home',
                'title' => 'lorem',
                'content' => ZKRangeWidget::widget([
                    'config' => [
                        'type' => ZKRangeWidget::type['double '],
                        'start' => [10],
                        'range' => [
                            'min' => 10,
                            'max' => 150
                        ],
                        'format' => [
                            'suffix' => " so'm"
                        ]
                    ]
                ])
            ]
        ]);
        echo ZAccLayWidget::widget([
            'config' => [
                'bgColor' => ZAccLayWidget::bgColor['bg-info'],
                'textColor' => ZAccLayWidget::textColor['text-dark'],
                'icon' => 'fa fa-home',
                'title' => 'lorem',
                'content' => ZMaterialCheckboxWidget::widget([
                        'config' => [
                            'color' => ZMaterialCheckboxWidget::colors['blue'],
                            'label' => 'Bez Glotena'
                        ]
                    ]) . ZMaterialCheckboxWidget::widget([
                        'config' => [
                            'color' => ZMaterialCheckboxWidget::colors['yellow'],
                            'label' => 'Bez Saxara'
                        ]
                    ]) . ZMaterialCheckboxWidget::widget([
                        'config' => [
                            'color' => ZMaterialCheckboxWidget::colors['red'],
                            'label' => 'Bezlaktozniy'
                        ]
                    ]) . ZMaterialCheckboxWidget::widget([
                        'config' => [
                            'color' => ZMaterialCheckboxWidget::colors['green'],
                            'label' => 'Postniy'
                        ]
                    ]),
            ]
        ]);
        ?>

    </div>
    <div class="col-md-9 ">
        <h1 class="text-uppercase">Ташкент, Фархадский базар</h1>
        <div class="d-flex">
            <?php
            $item = new ProductItem();
            $item->name = "samsung aq7";
            $item->price = [123, 123, 777];
            $item->price_old = [17];
            $item->currency = "$";
            $item->title = 'asjdjasdjhasjhdjkasjkdhaskldjklajsdjaskjd';
            $item->images = ['/render/market/XeMart - Ecommerce Template/html/images/tab-1.png'];

            echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => ZMarketCardsWidget::type['featureVertical'],

                ],
                'model' => $item
            ]);
            echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => ZMarketCardsWidget::type['featureVertical'],

                ],
                'model' => $item
            ]);
            echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => ZMarketCardsWidget::type['featureVertical'],

                ],
                'model' => $item
            ]);
            echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => ZMarketCardsWidget::type['featureVertical'],

                ],
                'model' => $item
            ]);
            ?>
        </div>
        <div class="d-flex">
            <?php
            echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => ZMarketCardsWidget::type['featureVertical'],

                ],
                'model' => $item
            ]);
            echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => ZMarketCardsWidget::type['featureVertical'],

                ],
                'model' => $item
            ]);
            echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => ZMarketCardsWidget::type['featureVertical'],

                ],
                'model' => $item
            ]);
            echo ZMarketCardsWidget::widget([
                'config' => [
                    'type' => ZMarketCardsWidget::type['featureVertical'],

                ],
                'model' => $item
            ]);
            ?>
        </div>
    </div>
</div>
