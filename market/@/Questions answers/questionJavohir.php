<?php

use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZHorizontalTouchSpinWidget;
use zetsoft\widgets\navigat\ZReadMoreWidget;

$productId = 19;
  $model = Az::$app->market->question->getQuestionsByProductId($productId);
?>
<script src="https://cdn.jsdelivr.net/npm/jquery.shorten@1.0.0/src/jquery.shorten.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-load-more@1.3.0/jquery.simpleLoadMore.min.js"></script>
<div class="ui container mt-2 input focus">
</div>

 <?php
 function quationFunc($items)
 {

     $quations = <<<HTML
<div class="container float-left mt-5">
    <div class="row">
        <div class="border-right col-2 align-self-start d-flex flex-column justify-content-center align-items-center" ">
        {spinn}
    </div>
    <div class="col-10">
        <div class="row">
            <div class="col-2 fw-700">
                Question:
            </div>
            <div class="col-10">
                <a class="searchable text-black fw-700">
                   {quation}
                </a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-2 fw-700">
                Answers:
            </div>
            <div class="col-10 answers showmore" id="acee">
                <p class="showMoreContent parent searchable mb-0">
                   {answers} <br> <span class="writeby text-muted">by Done on july 7, 2020</span>
                </p>
            </div>
            {readMore}
        </div>
    </div>
</div>


<script>
    $('.showMoreContent').shorten({
        moreText: 'see more',
        lessText: 'see less',
        showChars: 200,
    });
    
 
    
    
</script>
HTML;
     foreach ($items as $item)
     {
        $readMore = ZReadMoreWidget::widget([
            'id' => 'acee',
            'config' => [
                'begin' => false,
                'itemInSummary' => 1,
                'itemClass' => 'showMoreContent',
            ]
        ]);

        $spinn = ZHorizontalTouchSpinWidget::widget([]);
        
     }



 }
