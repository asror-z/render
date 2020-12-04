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
$this->fileJS('render/cards/ZCard_1Widget/asset/script.js');
?>


   
<div class="col card-mini my-2">
    <?php

    $rand = random_int(1, 100);
    $item = new ProductItem();
    $item->name = 'Coca-Cola (1.5 l)';
    $item->price = '4090';

    echo $this->require( '/render/cards/ZCard_1Widget/demo/clean_2.php', [
        'item' => $item
    ]);


    ?>
</div>

