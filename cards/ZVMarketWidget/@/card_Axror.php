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

if(!isset($item)){
 $item = new ProductItem();
    $item->url = 'sarhtsrth';
    $item->image='https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500';
    $item->name='asdasd';
}


if(!isset($col))
    $col=6;


?>


<style>
    .brand-img{
        width: 100%;
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        height: 250px;
    }
</style>

     <div class="col-md-<?=$col?> pb-3 pl-15 col-sm-6 col-md-4 col-12 pr-0" >
         <div class="card m-0 rounded-0">
            <div class="d-flex justify-content-center align-items-center">
                <a href="<?= $item->url ?> " class="brand-img" style="background-image: url('<?=$item->image?>')">
                </a>
            </div>
             <div class="card-body">
                 <a href="<?= $item->url ?>" class="h5 text-center my-10 text-muted"><?= $item->name ?></a>
             </div>
         </div>
     </div>




