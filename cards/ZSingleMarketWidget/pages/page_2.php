<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\kernels\ZView;


/** @var ZView $this */
/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
?>


<div class="col-12 col-sm-6 col-md-4 col-xl-3 card-mini my-2">
    <?php
 /*   if (!isset($item)) {
        $rand = random_int(1, 999999);

        $item = new ProductItem();
        $item->name = 'Coca-Cola (1.5 l)';
        $item->price = '9490';
        $item->images = [
            'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'               ,
            'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg'               ,
            'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU'               ,
        ];
    }*/
    $rand = random_int(1, 100);
    $item = new ProductItem();
    $item->name = 'Coca-Cola (0.5 l)';
    $item->price = '4090';

    echo $this->require( '/render/cards/ZCard_1Widget/demo/clean_2.php', [
        'item' => $item
    ]);
    ?>
</div>
