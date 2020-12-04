<?php
use zetsoft\widgets\market\ZSlickWidget;
use zetsoft\widgets\market\ZWishCardWidget;
use zetsoft\widgets\market\ZMegaMenuWidget;
use zetsoft\widgets\market\ZFooterListWidget;


?>

<?php
echo ZMegaMenuWidget::widget([
   'config' => [
        'names' => ['scholar','user' ],
       'contact'=>'contact'
    ],
]);
?>
    <div class="container">
        <div class="row">
        <div class="col-lg-9">
            <?php
            echo ZSlickWidget::widget([]);
            ?>
        </div>
        <div class="col-lg-3">
            <?php
           // echo ZWishCardWidget::widget([]);
            ?>
        </div>
        </div>
    <div>

        <div>
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    echo ZFooterListWidget::widget([]);
                    ?>
                </div>
            </div>
        </div>
