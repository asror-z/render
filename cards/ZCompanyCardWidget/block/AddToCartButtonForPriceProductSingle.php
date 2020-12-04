<?php
use zetsoft\system\Az;use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;

?>

 <div class="mt-3 footer-main">
                <button id="add-card-<?= $item->id ?>"
                        class="add-card btn p-2 btn-success <?= $item->cart_amount > 0 ? 'd-none' : '' ?>"
                        data-catalog-id="<?= $item->catalogId ?>"
                        onclick="addToCart($(this))">
                    <?= Az::l('В корзину') ?>
                </button>

                <div id="input-<?= $item->id ?>" class="touch-main <?= $item->cart_amount > 0 ? '' : 'd-none' ?>  ">
                    <div class="d-flex touch-main-children">
                        <div class="d-flex parent-clear">
                            <?
                            echo ZKTouchSpinWidget::widget([
                                'name' => 'asds',
                                'value' => $item->cart_amount===null ? 0: $item->cart_amount,
                                'config' => [
                                    'min' => '0',
                                    'buttonup_txt' => '<i class="fas fa-plus"></i>',
                                    'buttondown_txt' => '<i class="fas fa-minus"></i>',
                                    'buttonup_class' => 'btn btn-success fp-14 rounded-right p-2',
                                    'buttondown_class' => 'btn btn-success fp-14 rounded-left p-2',
                                    'class' => 'text-center clear-add-btn',
                                    'initVal' => '1'
                                ],
                                'event' => [
                                    'startupspin' => <<<JS
                                    function(){
                                     spinUp($item->id,$item->catalogId);
                                    }
JS,
                                    'startdownspin' => <<<JS
                                    function(){
                                     spinDown($item->id,$item->catalogId);
                                    }
JS,

                                ]

                            ]);
                            ?>
                        </div>
                        <div class="v-card-clear-add mt-1" data-catalog-id="<?= $item->catalogId ?>"
                             onclick="deleteFromCart($(this))">
                            <?
                            echo ZSVGWidget::widget([
                                'config' => [
                                    'type' => ZSVGWidget::type['basket_delete'],
                                    'width_basket' => 77,
                                    'height_basket' => 74,
                                ]
                            ])
                            ?>
                        </div>

                    </div>

                </div>

            </div>
