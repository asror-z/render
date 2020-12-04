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
$wishList = Az::$app->cores->session->get('wishList');
$wishAmount = 0;

if (is_array($wishList))
    $wishAmount = count($wishList);

echo ZCartViewWidget::widget([
    'id' => 'wish_list',
    'config' => [
        'url' => '/customer/wish/index.aspx',
        'icon' => 'far fa-heart grey-text',
        'text' => '',
        'hint' => 'Избранное',
        'class' => 'ZWishIcon ',
        'amount' => $wishAmount
    ]
]);
