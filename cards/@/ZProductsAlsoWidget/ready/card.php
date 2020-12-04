<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\market\ZMSwiperWidget;

/** @var ZView $this */
$id = $this->myId();



?>
<div class="d-flex">
<div class="row">
    <div class="col-md-12">
        <div class="card" style="cursor:pointer;">
            <img src="<?=$item->image?>" class="card-img-top" alt="product">
            <div class="card-body d-flex flex-column">
                <div class="fp-20 font-weight-bold d-flex align-items-center">
                    <?=$item->new_price?>
                    <div class="font-weight-normal fp-20"><?=$item->currency;?></div>
                </div>
                <a class="text-info fp-12"><?=$item->name?></a>
                <a class="text-muted fp-12" href=""><?/*=$item->categoryName*/?>Мобильные телефоны</a>
            </div>
        </div>
    </div>
</div>
</div>

