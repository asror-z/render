<?php

use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZHorizontalTouchSpinWidget;
use zetsoft\widgets\navigat\ZReadMoreWidget;

$productId = 19;
  $model = Az::$app->market->question->getQuestionsByProductId($productId);
 //  vdd($model);

$role = $this->userRole();
$actionLock  = false;
if($role === 'user')
    $actionLock  = true;

//Az::$app->market->question->actionVote(1);
?>
<script src="https://cdn.jsdelivr.net/npm/jquery.shorten@1.0.0/src/jquery.shorten.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-load-more@1.3.0/jquery.simpleLoadMore.min.js"></script>
<div class="ui container mt-2 input focus">
</div>

 <?php  foreach ($model as $quations){?>


<div class="container float-left mt-5">
    <div class="row">
        <div class="border-right  border-success col-2 align-self-start p-0 d-flex flex-column justify-content-center align-items-center" ">
        <?=ZHorizontalTouchSpinWidget::widget([
            'config' => [
                'id' => $quations->id,
                'amount' => $quations->votes,
                'locked'=> false,
            ],
        ]);?>
    </div>
    <div class="col-10">
        <div class="row">
            <div class="col-2 fw-700">
                Question: 
            </div>
            <div class="col-10">
                <a class="searchable text-black fw-700">
                 <h4> <?=$quations->text?> </h4>
                </a>
            </div>
        </div>
        <div class="row mt-2 border-bottom">
            <div class="col-2 fw-700 ">
                Answers:  
            </div>
            <div class="col-10 answers showmore" id="<?=$quations->id?>">
              <h4><?php
                  if(!empty($quations->items))
                  foreach ($quations->items as $answers){ ?></h4>
                        <p class="showMoreContent parent searchable mb-0">
                       <?= $answers->text?> <br>
                <hr>
                          <span class="writeby text-muted">  <?=$answers->created_at?> </span>
                        <br />
                            <span class="text-success ">Comments:

                          <?php
                               if(!empty($answers->items))
                               foreach ($answers->items as $comment){ ?>
                                    <p class="showMoreContent parent searchable  ">
                                        <?= $comment->text?> <br> <span class="writebytext-muted"><?=$comment->created_at?></span>
                                    </p>
                                    <?php } ?>
                             </span>
                        </p>

                    <?php } ?>
            </div>
            <?=ZReadMoreWidget::widget([
                'id' => $quations->id,
                'config' => [
                    'begin' => false,
                    'itemInSummary' => 1,
                    'itemClass' => 'showMoreContent',
                ]
            ]);?>
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
<?php } ?>
     
