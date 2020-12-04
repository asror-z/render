<?php

use zetsoft\widgets\navigat\ZReadMoreWidget;

?>


<!--<script src="https://cdn.jsdelivr.net/npm/jquery.shorten@1.0.0/src/jquery.shorten.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-load-more@1.3.0/jquery.simpleLoadMore.min.js"></script>-->
<div class="ui container mt-2 input focus">
   
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-2 align-self-start d-flex flex-column justify-content-center align-items-center" ">
             <button id="upvote" class="bg-white border-0"
             >
                 <i class="fas fa-arrow-circle-up"></i>
             </button>
            <div id="votes d-flex flex-column">
                <span>10</span>
                <span>
                    votes
                </span>
            </div>
            <button id="downvote" class="bg-white border-0" onclick="downvote()">
                <i  class="fas fa-arrow-circle-down"></i>
            </button>
        </div>
        <div class="col-10">
            <div class="row">
                <div class="col-2">
                    Question:
                </div>
                <div class="col-10">
                    <a class="searchable">
                        How heavy of items will this pick up....my son wants this to pick up his tiny aliens from Toy Story but wondering if they will be too heavy.
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    Answers:
                </div>
                <div class="col-10 answers showmore" id="acee">
                    <p class="showMoreContent parent searchable">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals
                    </p>
                    <p class="showMoreContent searchable">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals
                    </p>
                    <p class="showMoreContent searchable">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals
                    </p>
                    <p class="showMoreContent searchable">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals
                    </p>
                   

                </div>
                <?=  ZReadMoreWidget::widget([
                    'id' => 'acee',
                    'config' => [
                        'begin' => false,
                        'itemInSummary' => 1,
                        'itemClass' => 'showMoreContent',
                    ]
                ])
                ?>
            </div>
        </div>
    </div>
</div>
<!--<script>
    $('.answers').simpleLoadMore({
        item: '.showMoreContent',
        count: 1,
        itemsToLoad: 5,
        btnHTML: '<a href="#" class="load-more__btn">View More Answers<i class="fas fa-angle-down"></i></a>'
    });
</script>
<script>
    $('.showMoreContent').shorten({
        moreText: 'show more',
        lessText: 'show less',
        showChars: 150,
    });
</script>-->





