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
    <div style="height: 75px" class="d-flex justify-content-center align-items-center">
      <a href="<?= $item->url ?> " class="brand-img w-100 h-100"  style="background-image: url('<? echo '/render/cards/ZVMarketWidget/asset/image/' . $item->photo[0] ?>'); background-size: contain; background-repeat: no-repeat; background-position: center center;">
      </a>
    </div>
    <div class="card-body text-center p-2">
      <a href="<?= $item->url ?>" class="fp-25 text-capitalize text-muted"><?= $item->name ?></a>
    </div>
  </div>
</div>




