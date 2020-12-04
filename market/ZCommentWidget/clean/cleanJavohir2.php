<!-- second div-->
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
                    'comment' => $product->text,
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
<!--end second -->
use zetsoft\widgets\navigat\ZShowMoreWidget;
use zetsoft\widgets\navigat\ZShowMoreWidget;
use zetsoft\widgets\navigat\ZShowMoreWidget;
