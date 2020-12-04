<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
use zetsoft\widgets\inputes\ZKStarRatingWidget;
?>
<div class="col-3 p-3 border rounded">
    <div>
        <h2 class="">Отзывы клиентов</h2>
    </div>
    <div class="d-inline-flex">
        <div class="mr-2">
            <?   
            echo ZKStarRatingWidget::widget([
                'name' => 'gggf',
                'config' => [
                    'show' => false
                ]
            ]);
            ?>

            </div>
        <div class="fp-18">4.1 из 5</div>
    </div>
    <div class="mt-3">
        <h6 class="text-muted">5 оценок клиентов</h6>
    </div>
      <div class="">
          <div class="d-flex mb-2" >
              <div class="mr-3">5 звёзд </div>
              <div class="progress " style="width: 65%">
                  <div class="progress-bar bg-warning pl-3" role="progressbar" style="width: 56%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">56%</div>
              </div>
              <div class="ml-3">56%</div>
          </div>
          <div class="d-flex mb-2" >
              <div class="mr-3">5 звёзд </div>
              <div class="progress " style="width: 65%">
                  <div class="progress-bar bg-warning pl-3" role="progressbar" style="width: 56%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">56%</div>
              </div>
              <div class="ml-3">56%</div>
          </div>
          <div class="d-flex mb-2" >
              <div class="mr-3">5 звёзд </div>
              <div class="progress " style="width: 65%">
                  <div class="progress-bar bg-warning pl-3" role="progressbar" style="width: 56%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">56%</div>
              </div>
              <div class="ml-3">56%</div>
          </div>
          <div class="d-flex mb-2" >
              <div class="mr-3">5 звёзд </div>
              <div class="progress " style="width: 65%">
                  <div class="progress-bar bg-warning pl-3" role="progressbar" style="width: 56%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">56%</div>
              </div>
              <div class="ml-3">56%</div>
          </div>
          <div class="d-flex mb-2" >
              <div class="mr-3">5 звёзд </div>
              <div class="progress " style="width: 65%">
                  <div class="progress-bar bg-warning pl-3" role="progressbar" style="width: 56%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">56%</div>
              </div>
              <div class="ml-3">56%</div>
          </div>
      </div>


    










    <!--<div class="">
        <div>5 звёзд </div>
        <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>                
        <div>56%</div>
    </div>

    <div class="d-flef">
        <div>5 звёзд </div>
        <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>                .
        <div>56%</div>
    </div>

    <div class="">
        <div>5 звёзд </div>
        <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>                .
        <div>56%</div>
    </div>-->
</div>

