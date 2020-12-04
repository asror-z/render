<?php


use zetsoft\dbitem\shop\MarketItem;
use zetsoft\system\kernels\ZView;

/** @var ZView $this */
?>


<div id="content" class="content-footer p-3" ic-history-elt="">

    <div class="row">
        <div class="col-md-6 col-6">

            <?
            $item = new MarketItem();
            $item->name = 'sadf';
            $item->title = 'title';
            $item->exists = 'Da';

            echo $this->require( '/render/cards/ZHMarketWidget/demo/cleanMain2.php', [
                'item' => $item
            ]);
        
            ?>

        </div>
          <div class="col-md-6 col-6">

            <?
            $item = new MarketItem();
            $item->name = 'sa41df';
            $item->title = 'title';
            $item->exists = 'Da';

            echo $this->require( '/render/cards/ZHMarketWidget/demo/cleanMain2.php', [
                'item' => $item
            ]);

            ?>

        </div>
  
      
    </div>


</div>
