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
use zetsoft\widgets\cards\ZCartViewWidget;

$cart = Az::$app->cores->session->get('cart');

$amount = 0;
if (is_array($cart))
    $amount = count($cart);

echo ZCartViewWidget::widget([
    'id' => 'cart_total_amount',
    'config' => [
        'url' => '/shop/user/basket.aspx',
        'text' => '',
        'class' => 'ZCartIcon wishCount',
        'amount' => $amount
    ]
]);
