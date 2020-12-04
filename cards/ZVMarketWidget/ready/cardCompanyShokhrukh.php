<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\helpers\ZArrayHelper;

if (!isset($item)) {
    $item = new ProductItem();
    $item->url = 'sarhtsrth';
    $item->image = 'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500';
    $item->name = 'asdasd';
}

//vdd($item->photo);
if (!isset($col))
    $col = 3;

?>
<div class="col-md-4 col-lg-<?= $col ?> pb-3 col-sm-6">
    <div class="card m-0 rounded-0 h-100">
        <div class="d-flex justify-content-center align-items-center p-3">
            <a href="<?= $item->url ?> " class="brand-img"
               style="background-image: url('<?= '/imagez/mplace/'.ZArrayHelper::getValue($item->photo, 0) ?>')">
            </a>
        </div>
        <div class="card-body text-center p-2">
            <a href="<?= $item->url ?>" class="fp-25 text-capitalize text-muted"><?= $item->name ?></a>
        </div>
    </div>
</div>



