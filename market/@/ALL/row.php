<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\ALL\ZCardItem;
use zetsoft\widgets\market\ZMenuWidget;
use zetsoft\widgets\market2\ZCarouselWidget;
use zetsoft\widgets\market2\ZCategoryWidget;
use zetsoft\widgets\market2\ZCheckOutWidget;
use zetsoft\widgets\market2\ZOrderSummaryWidget;

?>

   <div class="row">
        <div class="col-lg-4">
           <?php
           echo ZCarouselWidget::widget();
           ?>

       </div>
       <div class="col-lg-4">

           <?php
           echo ZCategoryWidget::widget();
           ?>

       </div>
       <div class="col-lg-4">

           <?php

            echo ZCheckOutWidget::widget();

           ?>

       </div>
   </div>



