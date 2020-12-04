<?php


/*
 *
 * render/notifier/ZAlertCardWidget
render/notifier/ZBootstrapPopoverWidget
render/notifier/ZDrublicModalWidget
render/notifier/ZIframeWidget
render/notifier/ZJqueryConfirmWidget
render/notifier/ZKAlertWidget
 *
 * */
 ?>


use zetsoft\widgets\notifier\ZAboutProductWidget;



      <div class="row">
        <div class="col">
          <?

          use yii\bootstrap4\Alert;
          use zetsoft\widgets\notifier\ZBootstrapPopoverWidget;
          use zetsoft\widgets\notifier\ZDrublicModalWidget;
          use zetsoft\widgets\notifier\ZIframeWidget;
          use zetsoft\widgets\notifier\ZKAlertBlockWidget;
          use zetsoft\widgets\notifier\ZKAlertWidget;

          ZBootstrapPopoverWidget::begin([]);

          echo 'hdfsijlgljlk;';
          echo 'ywdjl';
          ZBootstrapPopoverWidget::end();
          ?>
        </div>
      </div>
            <br>
      <div class="row">
        <div class="col">
          <?
          echo ZDrublicModalWidget::widget([
              'config' =>[
                  'type' => ZDrublicModalWidget::type['main'],

              ]
          ]);
          ?>
        </div>
      </div>
            <br>
      <div class="row">
        <div class="col">
          <?
          echo ZIframeWidget::widget([
              'config' =>[
                  'url' => '/admin/core-action/index.aspx',
              ]
          ]);
          ?>
        </div>
      </div>

          <br>
          <div class="row">
            <div class="col">
              <?
              echo ZKAlertBlockWidget::widget([
                  'config' => [
                      'isUseSessionFlash' => false,
                      'body' => 'Вход в систему "Эл-юрт умиди"',
                  ],
              ]);
              
              ?>
            </div>
          </div>

