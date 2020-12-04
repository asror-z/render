<?php


use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;

?>

<?php
//$product_id  = $this->httpGet('product_id');
$items = Az::$app->market->review->getReviewByProductId('19');

?>

<?php
foreach ($items as $item):
    foreach ($item->items as $value):  ?>

<div class="comment border-left pl-3 mt-1 ">
    <div class="comment-box-header d-flex align-items-center">
        <div class="reply-comment-box-image">
            <img class="rounded-circle" src="<?php echo $value->user_image ?>"/>
        </div>
        <div class="reply-comment-box-title ml-1 d-flex flex-column">
            <span class="fe-15"><?php echo $value->user_name ?></span>
            <div class="">
                <input id="<?php echo $value->id ?>" type="hidden" value="<?php echo $value->id ?>">
                <?

                    echo ZKStarRatingWidget::widget([
                            'name' => 'start widget',
                            'config' => [
                                'show' => false,
                                'readonly' => true,
                                'value' => $value->rating,
                            ]
                    ]);
                ?>
            </div>
        </div>
        <p class="question mt-2 ml-1 w-25 align-self-start font-weight-bold text-truncate">
        </p>
        <span class="fe-08 font-weight-normal align-self-start mt-1 ml-auto"><?php  echo $value->created_at ?></span>
    </div>
    <div class="commentText d-flex flex-column justify-content-between">
        <p class="comment-box-text">
            <?php echo   $value->text ?>

        </p>
        <div class="d-flex button-links align-items-center">
            <button class="rounded btn-outline-inverse shadow-none reply-btn bg-white mr-3">
                <i class="fas fa-reply mr-1"></i> <span>reply</span>
            </button>
            <a href="#" class="like text-black-50">
                <i class="fas fa-thumbs-up mr-1"></i>
                <span class="text-black-50"> <?php echo  $value->like ?></span>
            </a>
            <a href="#" class="dislike ml-4 text-muted">
                <i class="fas fa-thumbs-down mr-1"></i>
                <span class="text-black-50"><?php echo  $value->dislike ?></span>
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
    </div>
</div>
    <?php endforeach; ?>
    <?php endforeach; ?>
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

    $('.like').on('click', function() {

        $.ajax({
            method: 'GET',
            url: '/core/product/like.aspx',
            data: {
                id:
            },
            success: function(data) {
                $('#likeBtn').html(data);
                //   console.log(data);
            }

        })
    });

    $('.dislike').on('click', function() {
        $.ajax({
            method: 'GET',
            url: '/core/product/dislike.aspx',
            data: {
                id: <?php echo $value->id ?>
            },
            success: function(data) {
                $('#dislikeBtn').html(data);

            }

        })
    });

</script>
