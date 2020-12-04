<?php


use Carbon\Carbon;
use zetsoft\dbitem\chat\ReviewItem;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\navigat\ZShowMoreWidget;


/** @var ZView $this */

if(!isset($item)) {
    $item = new ProductItem();
    $item->id = 1;
    $item->user_name = 'Otabek';
    $item->created_at = '5/03/2020';
    $item->user_image = 'https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png';
    $item->rating = 3.5;
    $item->text = 'I was very pleased with the quality of the product as I received it. But after about one week of charging it became intermittent for a couple of days and stopped working';
    $item->like = 23;
    $item->dislike = 232;
}

?>


<div class="detailBox w-100  ml-3 mr-3 mt-0 mb-0">

    <div class="actionBox  p-2">
        <ul style=" list-style: none;" class="commentList overflow-auto p-0">
            <li class="">
                <div style="width:40px" class="commenterImage  float-left mr-2 h-100">
                    <img class="w-100 rounded-circle" src="<?= $user->photo ?? 'https://picsum.photos/200/300' ?>"/>
                </div>
                <div class="commentText d-flex justify-content-between">
                    <div class="w-75">
                        <div class="d-flex justify-content-between">
                            <p class="m-0 "><?= $user->name ?? 'defaultName' ?></p>
                        </div>
                            <p class="m-0 "><?= $item->text ?></p>
                    </div>
                    <span class="date text-dark fe-10 float-right "><?=Carbon::parse($item->created_at)->diffForHumans();?></span>

                </div>

            </li>
        </ul>
    </div>
</div>

