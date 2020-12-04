<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\bozor\ZMCardItemWidget;
use zetsoft\widgets\images\ZHImgWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZCartReviewWidget;


?>

<div class="container container-full">
    
    <div class="row ">
        <div class="col-lg-12">
            <div class="col-lg-12 ">
                
                <div class="card card-header">
                    <div class="d-flex col-lg-12">
                        <span class="shopping-cart-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </span>
                        <div class="shopping-cart-quantity-container">
                            <div class="shopping-cart-quantity">
                                <h6>3</h6>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <h6 class="shopping-cart-total-price">321.000 UZS</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-12">
            <div class="col-lg-12 ">
                <div class="shopping-cart-body">
                    <div class="col-lg-12 d-flex" >
                        <h6> Ваш заказ </h6>
                        <h6 class="ml-auto shopping-cart-product-quantity"> 3 товара </h6>
                    </div>
                    <hr>
                    <div class="col-lg-12 d-flex" >
                        <h6> Колбаса Теген</h6>
                        <h6 class="ml-auto shopping-cart-product-price" > 40.000 UZS </h6>
                    </div>
                    <hr>
                    <div class="col-lg-12 d-flex">
                        <h6> Колбаса Останкино </h6>
                        <h6 class="ml-auto shopping-cart-product-price"> 40.000 UZS </h6>
                    </div>
                    <hr>
                    <div class="col-lg-12 d-flex">
                        <h6> Сыр</h6>
                        <h6 class="ml-auto shopping-cart-product-price"> 40.000 UZS </h6>
                    </div>
                    <hr>
                    <div class="col-lg-12 d-flex">
                        <h6> Доставка</h6>
                        <h6 class="ml-auto shopping-cart-product-price"> 40.000 UZS </h6>
                    </div>
                    <hr>
                    <div class="col-lg-12 d-flex" >
                        <h6 > Итого </h6>
                        <h6 class="ml-auto shopping-cart-product-price"> 40.000 UZS </h6>
                    </div>
                    <hr>
                    <div class="col-lg-12">
                        <div class="col-lg-12 ml-auto mr-auto">
                            <button class="btn w-100 btn-md btn-success "> Оплатить </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .container-full{
        margin-top: 10px;
    }
    .card-header{
        background-color: limegreen;
        height: 50px;
        padding: 0 !important;
    }
    .shopping-cart-icon {
        color: #ffffff;
        padding: 15px;
    }
    .shopping-cart-quantity-container {
        background-color: #ffffff;
        width: 30px;
        height: 26px;
        margin: 10px;
        border-radius: 20%;
    }
    .shopping-cart-quantity {
        margin-bottom: 2px;
        margin-left: 10px;
    }
    .shopping-cart-total-price{
        color: #ffffff;
        padding: 10px
    }
    .shopping-cart-body{
        height: 430px;
        border: 2px solid lightgray;
        padding:10px;
    }
    .shopping-cart-product-quantity, .shopping-cart-product-price{
        color: limegreen;
    }

</style>

