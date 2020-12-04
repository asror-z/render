<?php

use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZTextAreaWidget;
use zetsoft\widgets\inputes\ZInputWidget;
/*
 * Template
 * /render/market/XeMart%20-%20Ecommerce%20Template/html/07-checkout.html
 * */
Az::$app->controller->layout = 'bozorMain';


?>

        <section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <form action="#">
                            <h5>Billing Information</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name*</label>
                                    <?
                                    echo ZInputWidget::widget([
                                        'config' => [
                                                'placeholder' => 'First Name'
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name*</label>
                                    <?
                                    echo ZInputWidget::widget([
                                        'config' => [
                                            'placeholder' => 'Last Name'
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <label>Email Address*</label>
                                    <?
                                    echo ZInputWidget::widget([
                                        'config' => [
                                            'placeholder' => 'Email Address'
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <label>Phone*</label>
                                    <?
                                    echo ZInputWidget::widget([
                                        'config' => [
                                            'placeholder' => 'Phone'
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="col-md-12">
                                    <label>Company Name</label>
                                    <?
                                    echo ZInputWidget::widget([
                                        'config' => [
                                            'placeholder' => 'Company Name'
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="col-md-12">
                                    <label>Address*</label>
                                    <?
                                    echo ZInputWidget::widget([
                                        'config' => [
                                            'placeholder' => 'Address'
                                        ]
                                    ]);
                                    ?>
                                    <?
                                    echo ZInputWidget::widget([
                                        'config' => [
                                            'placeholder' => 'Address'
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="col-md-6 contry">
                                    <label>Country*</label>
                                    <?
                                        echo  ZSelect2Widget::widget([
                                            'config' => [
                                                'placeholder' => Az::l('Выбрать Css класс'),
                                                'class' => 'item-menu',
                                                'theme' => ZSelect2Widget::theme['bootstrap4'],
                                            ]
                                        ]);
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <label>Town/City*</label>
                                    <?
                                    echo ZInputWidget::widget([
                                        'config' => [
                                            'placeholder' => 'Town/City'
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <label>State/Province*</label>
                                    <?
                                    echo ZInputWidget::widget([
                                        'config' => [
                                            'placeholder' => 'State/Province'
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <label>Postal/Zip Code*</label>
                                    <?
                                    echo ZInputWidget::widget([
                                        'config' => [
                                            'placeholder' => 'Postal/Zip Code'
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="col-md-12">
                                    <ul class="list-unstyled">
                                        <li>
                                            <?
                                            echo ZHCheckboxWidget::widget([
                                                'config' => [
                                                        'placeholder' => 'Create An Account?'
                                                ]
                                            ])
                                            ?>
                                        </li>
                                        <li>
                                            <?
                                            echo ZHCheckboxWidget::widget([
                                                'config' => [
                                                        'placeholder' => 'Ship To Same Address?'
                                                ]
                                            ])
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <label>Order Note</label>
                                   <?
                                        echo ZTextAreaWidget::widget([

                                        ]);
                                   ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="order-review">
                                    <h5>Order Review</h5>
                                    <div class="review-box">
                                        <ul class="list-unstyled">
                                            <li>Product <span>Total</span></li>
                                            <li class="d-flex justify-content-between">
                                                <div class="pro">
                                                    <img src="images/sbar-1.png" alt="">
                                                    <p>Product name here</p>
                                                    <span>1 X $49.00</span>
                                                </div>
                                                <div class="prc">
                                                    <p>$49.00</p>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <div class="pro">
                                                    <img src="images/sbar-2.png" alt="">
                                                    <p>Product name here</p>
                                                    <span>1 X $89.00</span>
                                                </div>
                                                <div class="prc">
                                                    <p>$89.00</p>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <div class="pro">
                                                    <img src="images/sbar-3.png" alt="">
                                                    <p>Product name here</p>
                                                    <span>1 X $29.00</span>
                                                </div>
                                                <div class="prc">
                                                    <p>$29.00</p>
                                                </div>
                                            </li>
                                            <li>Sub Total <span>$167.00</span></li>
                                            <li>Shipping & Tax <span>$00.00</span></li>
                                            <li>Grand Total <span>$167.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pay-meth">
                                    <h5>Payment Method</h5>
                                    <div class="pay-box">
                                        <ul class="list-unstyled">
                                            <li>
                                                <input type="radio" id="pay1" name="payment" value="pay1" checked>
                                                <label for="pay1"><span><i class="fa fa-circle"></i></span>Cash On Delivery</label>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sint placeat illo animi quis minus accusantium ad doloribus, odit explicabo asperiores quidem.</p>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay2" name="payment" value="pay2">
                                                <label for="pay2"><span><i class="fa fa-circle"></i></span>Direct Bank Transfer</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay3" name="payment" value="pay3">
                                                <label for="pay3"><span><i class="fa fa-circle"></i></span>Cheque Payment</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay4" name="payment" value="pay4">
                                                <label for="pay4"><span><i class="fa fa-circle"></i></span>Paypal</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="pay5" name="payment" value="pay5">
                                                <label for="pay5"><span><i class="fa fa-circle"></i></span>Payoneer</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" name="button" class="ord-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
