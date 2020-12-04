<?php

use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZHorizontalTouchSpinWidget;
use zetsoft\widgets\navigat\ZReadMoreWidget;
use zetsoft\widgets\navigat\ZReadMoreWidget1;

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


 <?php  foreach ($model as $quations){?>


<div class=" mt-5">
    <div class="row">
        <div class="border-right ml-2 border-success col-1 align-self-start p-0 d-flex flex-column justify-content-center align-items-center" ">
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
                <p class="searchable text-black fw-700 text-justify">
                    <span class="pl-3"></span>
                  <?=$quations->text?>
                </p>
            </div>                                                             
        </div>
        <div class="row mt-2 border-bottom">
            <div class="col-2 fw-700 ">
                Answers:
            </div>
            <div class="col-10 answers showmore" id="<?=$quations->id?>">
                <?php
                if(!empty($quations->items))
                    foreach ($quations->items as $answers){ ?>
                        <div class="showMoreContent parent searchable mb-0 text-justify">
                            <span class="pl-3"></span>
                           <?= $answers->text?> <br> <span class="writeby  float-right text-muted"><?=$answers->created_at?></span>
                            <br />
                            <div class="ml-4 pl-3 mb-3 ml-1 border-left">
                                <?php
                                if(!empty($answers->items))
                                echo '<span class="text-success">Comments:</span>';
                                  foreach ($answers->items as $comment){ ?>
                                    <p class="showMoreContent parent searchable mb-0 text-justify d-flex">
                                        <div>
                                          <span class="pl-3"> </span>
                                          <?=$comment->text?><br/><span class="writeby float-right text-muted"><?=$comment->created_at?> </span>
                                      </div>
                                    </p>
                                    <?php } ?>
                             </div>
                        </div>

                    <?php } ?>
            </div>
            <?=ZReadMoreWidget1::widget([
                'id' => $quations->id,
                'config' => [

                    'parentclass' => 'showmore',
                    'itemInSummary' => 1,
                    'itemClass' => 'showMoreContent',
                ]
            ]);?>
        </div>
    </div>
</div>

<!--<script>
    $('.showMoreContent').shorten({
        moreText: 'Читать далее',
        lessText: 'Меньше',
        showChars: 200,
    });
</script>-->
<?php } ?>
</div>
