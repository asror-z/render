<?php


use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\navigat\ZShowMoreWidget;

/** @var ZView $this */
?>


<div class="detailBox w-100  m-3">


    <div class="actionBox  p-2">
        <ul style=" list-style: none;" class="commentList overflow-auto p-0">
            <li class="m-0 mt-2 pb-1">
                <div style="width:40px" class="commenterImage  float-left mr-2 h-100">
                    <img class="w-100 rounded-circle" src="<?= $user->photo ?>"/>
                </div>
                <div class="commentText d-flex justify-content-between">
                    <div class="w-75">
                        <div class="d-flex justify-content-between">
                            <p class="m-0 "><?= $user->name ?></p>
                            <div class="d-flex">
                                <?
                                echo ZKStarRatingWidget::widget([
                                    'name' => 'gggfg',
                                    'config' => [
                                        'show' => false
                                    ]
                                ]);
                                ?>
                                <p class="m-0 ml-2 font-weight-bold">lorem ipsum takoy delaw</p>
                            </div>
                        </div>
                        <?
                        echo ZShowMoreWidget::widget([
                            'config' => [
                                'comment' => $product->text,
                            ]
                        ])
                        ?>

                        <div class="d-flex button-links align-items-center">
                            <button class="rounded btn-outline-success reply-btn bg-white mr-3">
                                <i class="fas fa-reply mr-1 text-success"></i> <span><?= Az::l('reply') ?></span>
                            </button>
                            <a href="#" onclick="add_like(<?= $product->id ?>)">
                                <i id="like-element-<?= $product->id ?>" class="fas fa-thumbs-up mr-1 <?=$product->islike?'text-success':'text-muted'?> "></i>
                                <span class="text-muted" id="text-like-<?= $product->id ?>"><?= $product->like ?></span>
                            </a>
                            <a onclick="dis_like(<?= $product->id ?>)" class="dislike ml-4">
                                <i id="dislike-element-<?= $product->id ?>" class="fas fa-thumbs-down mr-1 <?=$product->isdislike?'text-success':'text-muted'?>"></i>
                                <span class="text-muted" id="text-dislike-<?= $product->id ?>"><?= $product->dislike ?></span>
                            </a>
                        </div>
                        <div class="hidden-reply-box d-none">
                            <div class="d-flex">
                                <div class="comment-text-input w-75">
                                    <input class="form-control w-100 rounded-pill reply-comment-text-input" type="text"
                                           placeholder="Your comments"/>
                                </div>
                                <div class="w-25 add-btn">
                                    <button class="border-0 rounded-pill btn-success w-100 py-2 ml-1 add-comment-btn">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>

                     <!-- second div replace-->
                     <?php


                         if (!empty($product->items)){
                             foreach ($product->items as $itemReply){
                                 echo $itemReply;
                                 reply($itemReply);
                             }
                         }




                     ?>
                    </div>
                    <span class="date text-dark fe-10 float-right"><?= $product->created_at ?></span>

                </div>

            </li>
        </ul>
    </div>



</div>
