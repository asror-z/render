<?php

use zetsoft\widgets\inputes\ZKStarRatingWidget;

?>
<div class="w-100 m-2 main-con">
    <img src="<?=$product->image?>" height="120px" width="120px" alt="">
    <div class="info ml-3 p-0 mt-4">
        <a href="#" class="company-name"><h5><?= $product->name ?></h5></a>
        <p>
            <?= $product->title?>
        </p>
    </div>
    
</div>

<style>
  .main-con {
    position: relative;

  }
  
  .wish-icon {
    position: absolute;
    top: 5px;
    right: 20px;
    text-decoration: none;
  }
  .wish-icon-item {
    font-size: 25px;
    color: lightgrey;
  }

  .company-name {
     text-decoration: none;
     color: black;
  }
</style>


