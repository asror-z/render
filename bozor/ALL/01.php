<?php


/*
 *
 * render/market/ZAboutProductWidget
render/market/ZMCard2Widget
render/market/ZMCardItemWidget
render/market/ZReytingWidget
 *
 * */
 ?>


use zetsoft\widgets\market\ZAboutProductWidget;


      <div class="row">
        <div class="col">
          <?

          use zetsoft\widgets\market\ZAboutProductWidget;
          use zetsoft\widgets\market\ZCardNigoraWidget;
          use zetsoft\widgets\market\ZMCardItemWidget;
          use zetsoft\widgets\market\ZReytingWidget;

          echo ZAboutProductWidget::widget([]);
          ?>
        </div>
      </div>
           <br>
      <div class="row">
        <div class="col">
          <?
          echo   ZCardNigoraWidget::widget([]);
          ?>
        </div>
      </div>
            <br>
      <div class="row">
        <div class="col">
          <?
          echo ZMCardItemWidget::widget([]);
          ?>
        </div>
      </div>
            <br>
      <div class="row">
        <div class="col">
          <?
          echo ZReytingWidget::widget([]);

          ?>
        </div>
      </div>
