<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\navigat\ZYandexTabWidget;


$product_id = 18;

echo ZYandexTabWidget::widget([
    'data' => [
        'Описание' => '/shop/user/product/single-productAbdulloh.aspx?id='.$product_id,
        'Характеристика' => '/shop/user/product/single_product_characteristics.aspx?id='.$product_id,
        'Цены' => '',
        'Отзыви' => '',
        'Вопросы и ответы' => '',
        'Карта' => ''
    ]
]);
