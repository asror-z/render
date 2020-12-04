<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\cards\ZCard_1Widget;
use zetsoft\widgets\market\ZMSwiperWidget;

/** @var ZView $this */



?>


<div class="row">
    <div class="col-12 my-2 fp-18 p-4">

            <?

            $items = Az::$app->market->product->allProducts();
             $slide_data=[];
            
            foreach ($items as $item) {

                $slide_data[] =  $this->require( '/render/cards/ZMiniCardWidget/cleanAz.php', [
                    'item' => $item
                ]);
                if (\Dash\Curry\count($slide_data)===3) break;
            }

            echo ZMSwiperWidget::widget([
                'data' => $slide_data,
                'config' => [
                    'slideWidget' => true,
                    'slidesPerView' => 2,
                    'pagination.el' => '',
                    'slidesMediaPerView640' => 5,
                    'slidesMediaPerView500' => 3,
                    'slidesMediaPerView1024' => 7,
                    'slidesMediaPerView325' => 2,
                    'nextEl' => '.swiper-button-next',
                    'prevEl' => '.swiper-button-prev',
                    'swip-nor'=>'p-2'
                ]
            ]);

            ?>

    </div>

</div>


