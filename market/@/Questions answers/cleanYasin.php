<?php

use zetsoft\widgets\inputes\ZHorizontalTouchSpinWidget;
 ?>
<script src="https://cdn.jsdelivr.net/npm/jquery.shorten@1.0.0/src/jquery.shorten.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-load-more@1.3.0/jquery.simpleLoadMore.min.js"></script>
<div class="ui container mt-2 input focus">
   
</div>
<div class="float-left container mt-2">
    <div class="row">
        <div class="col-2 align-self-start d-flex flex-column justify-content-center align-items-center" ">
        <?
        echo ZHorizontalTouchSpinWidget::widget([])
        ?>
        </div>
        <div class="col-10">
            <div class="row">
                <div class="col-2 fw-700">
                    Question:
                </div>
                <div class="col-10">
                    <a class="searchable text-black fw-700">
                        How heavy of items will this pick up....my son wants this to pick up his tiny aliens from.
                    </a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-2 fw-700">
                    Answers:
                </div>
                <div class="col-10 answers showmore">
                    <p class="showMoreContent parent searchable mb-0">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals <br> <span class="writeby text-muted">by Done on july 7, 2020</span>
                    </p>


                    <p class="showMoreContent parent searchable mb-0">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals <br> <span class="writeby text-muted">by Done on july 7, 2020</span>
                    </p>
                    <p class="showMoreContent parent searchable mb-0">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals <br> <span class="writeby text-muted">by Done on july 7, 2020</span>
                    </p>
                    <p class="showMoreContent parent searchable mb-0">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals <br> <span class="writeby text-muted">by Done on july 7, 2020</span>
                    </p>
                    <p class="showMoreContent parent searchable mb-0">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals <br> <span class="writeby text-muted">by Done on july 7, 2020</span>
                    </p>
                    <p class="showMoreContent parent searchable mb-0">
                        It will pick up the aliens without a problem. We used candy at first and now use old happy meal toys and other small toys. Just don't overfill the claw with too many toys or the claw won't have enough room to open while lowering to grab the prize. Look at what other people are using on youtube to get some more ideals <br> <span class="writeby text-muted">by Done on july 7, 2020</span>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.answers').simpleLoadMore({
        item: '.showMoreContent',
        count: 1,
        itemsToLoad: 5,
        btnHTML: '<a href="#" class="load-more__btn">See More Answers<i class="fas fa-angle-down"></i></a>'
    });
</script>
<script>
    $('.showMoreContent').shorten({
        moreText: 'show more',
        lessText: 'show less',
        showChars: 200,
    });
</script>
