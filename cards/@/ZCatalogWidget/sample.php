<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\cards\ZCatalogWidget;

echo ZCatalogWidget::widget([
    'config' => [
        'product_image' => 'https://gcdn.utkonos.ru/resample/940x300q95/images/banner/2020/05/19/46657_234607.png',
        'product_name'=> 'lorem ipsum',
    ]
]);
?>

<div class="card" style="width: 100%;">
    <img class="card-img-top"
         src="https://cdn.pixabay.com/photo/2020/06/03/15/11/tree-5255288__340.jpg"
         alt="Card image cap">
    <div class="p-2 text-center">
        <h5 class="card-text">lorem5 lorem5 </h5>
    </div>
</div>
