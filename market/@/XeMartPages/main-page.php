<?php
use zetsoft\system\Az;
use zetsoft\widgets\market\ZMenuWidget;
use zetsoft\widgets\market\ZDivsWidget;
use zetsoft\widgets\images\ZSlickWidget;


Az::$app->controller->layout = 'bozorMain';

?>

<div class="container">
    <div class="row">
        <div class="col-md-4" >
            <?
            echo ZMenuWidget::widget([

            ]);
            ?>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?
                        echo ZSlickWidget::widget([
                            'config' => [
                                    'items' => [
                                            'item' => 'item',
//                                            'item2' => 'item2',
//                                            'item3' => 'item3',
//                                            'item4' => 'item4',
//                                            'item5' => 'item5',
//                                            'item6' => 'item6',
                                    ]
                            ]
                        ])
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?
                    echo ZDivsWidget::widget([
                        'config'=>[
                            'url' => 'https://mdbootstrap.com/img/Photos/Others/Intros/intro2a.jpg',
                            'height' => 120,
                            'background'=>'gray'
                        ]
                    ]);
                    ?>
                </div>
                <div class="col-md-4">
<?
                    echo ZDivsWidget::widget([
                        'config'=>[
                            'url' => 'https://mdbootstrap.com/img/Photos/Others/Intros/intro2a.jpg',
                            'height' => 120,
                            'background'=>'gray'
                        ]

                    ]);
                    ?>
                </div>
                <div class="col-md-4">
                    <?
                    echo ZDivsWidget::widget([
                        'config'=>[
                            'url' => 'https://mdbootstrap.com/img/Photos/Others/Intros/intro2a.jpg',
                            //'height' => 120,
                            'background'=>'gray'
                        ]

                    ]);
                    ?>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?
//                    echo ZSlickWidget::widget([
//                        'config' => [
//                            'slidesToShow' => 3,
//                            'slidesToScroll' => 1,
//                            'autoplay' => false,
//                            'autoplaySpeed' => 5000,
//                            'items' => [
//                                'item' => 'item',
//                                'item2' => 'item2',
//                                'item3' => 'item3',
//                                'item4' => 'item4',
//                                'item5' => 'item5',
//                                'item6' => 'item6',
//
//                            ]
//                        ]
//                    ]);
                    ?>
                </div>
                <div class="col-md-8">
                    <div class="container">
                        <?
//                            echo ZSlickWidget::widget([
//                                'config' => [
//                                    'slidesToShow' => 3,
//                                    'slidesToScroll' => 1,
//                                    'autoplay' => false,
//                                    'autoplaySpeed' => 5000,
//                                    'items' => [
//                                        'item' => 'item',
//                                        'item2' => 'item2',
//                                        'item3' => 'item3',
//                                        'item4' => 'item4',
//                                        'item5' => 'item5',
//                                        'item6' => 'item6',
//                                    ]
//                                ]
//                            ])
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
