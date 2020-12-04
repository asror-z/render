<?php


use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\navigat\ZSofishShowMoreWidget;

?>

<?php
$items = Az::$app->market->review->getReviewByProductId('19');

?>
<div class="detailBox w-75 border m-3">
    <div class="titleBox p-2">
        <label class="m-0 text-secondary">Comment Box</label>
        <button type="button" class="close" aria-hidden="true">&times;</button>
    </div>

    <div class="actionBox border p-2">
        <ul style=" list-style: none;" class="commentList overflow-auto p-0">
            <li class="m-0 mt-2 pb-1">
                <div class="comment-box-header d-flex align-items-center">
                    <div class="reply-comment-box-image">
                        <img class="rounded-circle" src="http://placekitten.com/50/50"/>
                    </div>
                    <div class="reply-comment-box-title ml-1 d-flex flex-column">
                        <span>Shoxruh</span>
                        <?
                        echo ZKStarRatingWidget::widget([
                            'name' => 'gggfg',
                            'config' => [
                                'show' => false
                            ]
                        ]);
                        ?>
                    </div>
                    <span class="fe-08 font-weight-normal align-self-start mt-1 ml-auto">on March 5th, 2014</span>
                </div>
                <div class="commentText d-flex flex-column justify-content-between">
                    <p class="comment-box-text">
                        I was very pleased with the quality of the product as I received it. But
                        after about one week of charging it became intermittent for a couple of days and then
                        stopped working
                    </p>
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
                    <div class="hidden-reply-box w-75 d-none">
                        <div class="d-flex">
                            <div class="comment-text-input w-75">
                                <input class="form-control w-100 rounded-pill reply-comment-text-input" type="text" placeholder="Your comments"/>
                            </div>
                            <div class="w-25 add-btn">
                                <button class="border-0 rounded-pill btn-success w-100 py-2 ml-1 add-comment-btn">Add</button>
                            </div>
                        </div>
                    </div>
                        <div class="comment border-left pl-2 mt-1">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="reply-comment-box-header d-flex align-items-center">
                                        <div class="reply-comment-box-image">
                                            <img class="rounded-circle" src="http://placekitten.com/50/50"/>
                                        </div>
                                        <div class="reply-comment-box-title ml-1 d-flex flex-column">
                                            <span>Shoxruh</span>
                                            <?
                                            echo ZKStarRatingWidget::widget([
                                                'name' => 'gggfg',
                                                'config' => [
                                                    'show' => false
                                                ]
                                            ]);
                                            ?>
                                        </div>
                                        <span class="fe-08 font-weight-normal align-self-start mt-1 ml-auto">on March 5th, 2014</span>
                                    </div>
                                    <p class="reply-comment-box-text">
                                        I was very pleased with the quality of the product as I received it. But
                                        after about one week of charging it became intermittent for a couple of days and then
                                        stopped working
                                    </p>
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
                                    <div class="hidden-reply-box w-75 d-none">
                                        <div class="d-flex">
                                            <div class="comment-text-input w-75">
                                                <input class="form-control w-100 rounded-pill reply-comment-text-input" type="text" placeholder="Your comments"/>
                                            </div>
                                            <div class="w-25 add-btn">
                                                <button class="border-0 rounded-pill btn-success w-100 py-2 ml-1 add-comment-btn">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="comment border-left pl-2 mt-1">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0">
                                                <div class="reply-comment-box-header d-flex align-items-center">
                                                    <div class="reply-comment-box-image">
                                                        <img class="rounded-circle" src="http://placekitten.com/50/50"/>
                                                    </div>
                                                    <div class="reply-comment-box-title ml-1 d-flex flex-column">
                                                        <span>Shoxruh</span>
                                                        <?
                                                        echo ZKStarRatingWidget::widget([
                                                            'name' => 'gggfg',
                                                            'config' => [
                                                                'show' => false
                                                            ]
                                                        ]);
                                                        ?>
                                                    </div>
                                                    <span class="fe-08 font-weight-normal align-self-start mt-1 ml-auto">on March 5th, 2014</span>
                                                </div>
                                                <p class="reply-comment-box-text">
                                                    I was very pleased with the quality of the product as I received it. But
                                                    after about one week of charging it became intermittent for a couple of days and then
                                                    stopped working
                                                </p>
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
                                                <div class="hidden-reply-box w-75 d-none">
                                                    <div class="d-flex">
                                                        <div class="comment-text-input w-75">
                                                            <input class="form-control w-100 rounded-pill reply-comment-text-input" type="text" placeholder="Your comments"/>
                                                        </div>
                                                        <div class="w-25 add-btn">
                                                            <button class="border-0 rounded-pill btn-success w-100 py-2 ml-1 add-comment-btn">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </div>
            </li>
        </ul>
    </div>
    </div>


<script>
    $(document).ready( function () {
        $('.reply-btn').on("click", function () {
            var parent = $(this).parent('.button-links');
            var form = parent.next('.hidden-reply-box');
            parent.removeClass('d-flex');
            parent.addClass('d-none');
            form.removeClass('d-none');
        })
        $(document).mouseup(function (event)
        {
            var container = new Array();
            container.push($('.hidden-reply-box'));

            $.each(container, function(key, value) {
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
</script>
