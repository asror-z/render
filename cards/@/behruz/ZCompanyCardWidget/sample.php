<?php

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKStarRatingWidget;

/** @var ZView $this */

    $product->image = [
        'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
    ];

?>
<div class="card w-100 border m-2 main-con position-relative">
    <!--<img src="<? /*=$item->image*/ ?>" height="120px" width="120px" alt="">-->
    <div class="row no-gutters">

        <div class="col-md-5 com-ny-card" id="com-ny-card-_id_">

        </div>
        <div class="col-md-7">
            <div class="card-body pt-0 pb-0">
                <div class="row">
                    <div class="col-md-12 p-0 pt-1">
                        <a href="#" class="company-name text-dark"><h6><?= $product->name ?></h6></a>
                         <div class="mt-5">
                         <?
                         echo ZKStarRatingWidget::widget([
                             'name' => 'adasdasd',
                             'config' => [
                                 'size' => 'fa-1px'
                             ]
                         ]);
                         ?>
                          <div class=" d-flex justify-content-between mr-1">
                                  <a href="#">2 отзыва</a>
                              <i class="fas fa-heart fp-20"></i>
                          </div>

                         </div>
                    </div>

               <!--     <div class="col-md-4 position-relative">
                        <a href="#" role="button" onclick="add_wish_list()" class="wish-icon top mr-2"><i
                                    class="fas fa-heart fe-10 text-muted  mt-2"></i></a>
                    </div>-->

                </div>

            </div>
        </div>
    </div>
</div>

<style>

    .com-ny-card {
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 135px;
        background-image: url("<?=$product->image[0]?>");

    }


</style>





