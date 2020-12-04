<?php


use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\navigat\ZShowMoreWidget;

/** @var ZView $this */


$item = new ProductItem();
$item->id = 42;
$item->product_id = 4;
$item->user_name = 'Otabek';
$item->created_at = 'on March 5th, 2014';
$item->user_image = 'https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png';
$item->rating = 3.5;
$item->text = 'I was very pleased with the quality of the product as I received it. But after about one week of charging it became intermittent for a couple of days and stopped working';
$item->like = 1;
$item->islike = true;
$item->dislike = 232;
$item->isdislike = false;
$item->brand = '';

?>


<div class="detailBox w-100  m-3">

    <div class="actionBox  p-2">
        <ul style=" list-style: none;" class="commentList overflow-auto p-0">
            <li class="m-0 mt-2 pb-1">
                <div style="width:40px" class="commenterImage  float-left mr-2 h-100">
                    <img class="w-100 rounded-circle" src="<?= $item->user_image ?>"/>
                </div>
                <div class="commentText d-flex justify-content-between">
                    <div class="w-75">
                        <div class="d-flex justify-content-between">
                            <p class="m-0 "><?= $item->user_name ?></p>
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
                                'comment' => $item->text,
                            ]
                        ])
                        ?>

                        <div class="d-flex button-links align-items-center">
                            <button class="rounded btn-outline-success reply-btn bg-white mr-3">
                                <i class="fas fa-reply mr-1 text-success"></i> <span><?= Az::l('reply') ?></span>
                            </button>
                            <a href="#" onclick="add_like(<?= $item->id ?>)">
                                <i id="like-element-<?= $item->id ?>" class="fas fa-thumbs-up mr-1 <?=$item->islike?'text-success':'text-muted'?> "></i>
                                <span class="text-muted" id="text-like-<?= $item->id ?>"><?= $item->like ?></span>
                            </a>
                            <a onclick="dis_like(<?= $item->id ?>)" class="dislike ml-4">
                                <i id="dislike-element-<?= $item->id ?>" class="fas fa-thumbs-down mr-1 <?=$item->isdislike?'text-success':'text-muted'?>"></i>
                                <span class="text-muted" id="text-dislike-<?= $item->id ?>"><?= $item->dislike ?></span>
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
                        <div class="reply-comment border-left pl-2 mt-1">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="reply-comment-box-header d-flex align-items-center">
                                        <div class="reply-comment-box-image">
                                            <img class="rounded-circle" src="http://placekitten.com/50/50"/>
                                        </div>
                                        <div class="reply-comment-box-title ml-1 d-flex flex-column">
                                            <span>Shoxruh</span>
                                            <span class="fe-08 font-weight-light">on March 5th, 2014</span>
                                        </div>
                                    </div>
                                    <?
                                    echo ZShowMoreWidget::widget([
                                        'config' => [
                                            'comment' => $item->text,
                                        ]
                                    ])
                                    ?>
                                    <div class="d-flex button-links align-items-center">
                                        <button class="rounded btn-outline-primary reply-btn bg-white mr-3">
                                            <i class="fas fa-reply mr-1"></i> <span>reply</span>
                                        </button>
                                        <a href="#" class="like">
                                            <i class="fas fa-thumbs-up mr-1"></i>
                                            <span>15</span>
                                        </a>
                                        <a href="#" class="dislike ml-4">
                                            <i class="fas fa-thumbs-down mr-1"></i>
                                            <span>10</span>
                                        </a>
                                    </div>
                                    <div class="hidden-reply-box d-none">
                                        <div class="d-flex">
                                            <div class="comment-text-input w-75">
                                                <input class="form-control w-100 rounded-pill reply-comment-text-input"
                                                       type="text" placeholder="Your comments"/>
                                            </div>
                                            <div class="w-25 add-btn">
                                                <button class="border-0 rounded-pill btn-success w-100 py-2 ml-1 add-comment-btn">
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                            </ul>

                        </div>
                    </div>
                    <span class="date text-dark fe-10 float-right"><?= $item->created_at ?></span>

                </div>

            </li>
        </ul>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.reply-btn').on("click", function () {
            var parent = $(this).parent('.button-links');
            var form = parent.next('.hidden-reply-box');
            parent.removeClass('d-flex');
            parent.addClass('d-none');
            form.removeClass('d-none');
        })
        $(document).mouseup(function (event) {
            var container = new Array();
            container.push($('.hidden-reply-box'));

            $.each(container, function (key, value) {
                if (!$(value).is(e.target) // if the target of the click isn't the container...
                    && $(value).has(e.target).length === 0) // ... nor a descendant of the container
                {
                    $(value).addClass('d-none');
                    var parent = $(this).prev('.button-links');
                    parent.addClass('d-flex');
                    parent.removeClass('d-none');

                }
            });
        });
        $('.add-comment-btn').one("click", function () {
            var replyParent = $(this).parent('.add-btn');
            var replyTextParent = replyParent.prev('.comment-text-input');
            var replyTextChild = replyTextParent.children('.reply-comment-text-input').val();
            console.log(replyTextChild);
            var hiddenBox = replyParent.parents('.hidden-reply-box:first');
            var replyComment = hiddenBox.next('.reply-comment');
            var replyCommentList = replyComment.children('.list-group');
            //replyCommentList.("<li class='list-group-item text-success border-0'>" + replyTextChild + "</li>")
            replyCommentList.append("<li class='list-group-item border-0'>" +
                "<div class='reply-comment-box-header d-flex align-items-center'>" +
                "<div class='reply-comment-box-image'>" +
                "<img class='rounded-circle' src='http://placekitten.com/50/50' />" +
                "</div>" +
                "<div class='reply-comment-box-title ml-1 d-flex flex-column'>" +
                "<span>Shoxruh</span>" +
                "<span class='fe-08 font-weight-light'>on March 5th, 2014</span>" +
                "</div></div>" +
                "<p class='reply-comment-box-text'>" + replyTextChild + "</p></li>");
        })
    })


    function add_like(id) {
        $.ajax({
            method: 'GET',
            url: '/core/product/like.aspx',
            data: {
                id
            },
            success: function (data) {
                $('#text-like-' + id).html(data);
                if ($('#like-element-' + id).hasClass('text-muted')) {
                    let a=$('#text-like-'+id)[0].innerHTML;
                    a++;
                    $('#text-like-' + id).html(a);
                    $('#like-element-' + id).removeClass('text-muted');
                    $('#like-element-' + id).addClass('text-success');
                } else {
                    $('#like-element-' + id).removeClass('text-success');
                    $('#like-element-' + id).addClass('text-muted');
                }
            }

        })

    }


    function dis_like(id) {

        $.ajax({
            method: 'GET',
            url: '/core/product/dislike.aspx',
            data: {
                id
            },
            success: function (data) {
                $('#text-dislike-' + id).html(data);
                if ($('#dislike-element-' + id).hasClass('text-muted')) {
                    $('#dislike-element-' + id).removeClass('text-muted');
                    $('#dislike-element-' + id).addClass('text-success');
                } else {
                    $('#dislike-element-' + id).removeClass('text-success');
                    $('#dislike-element-' + id).addClass('text-muted');
                }
            }

        })

    }


</script>
