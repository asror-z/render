<?php


/*
 *
 * render/notifier/ZKDialog2Widget
render/notifier/ZKGrowlWidget
render/notifier/ZKPopoverXWidget
render/notifier/ZModalWidget
render/notifier/ZPopoverXWidget
render/notifier/ZSessionGrowlWidget
render/notifier/ZSweetAlert2Widget
 *
 * */
 ?>


use zetsoft\widgets\market\ZAboutProductWidget;


           <br>
   <!--   <div class="row">
        <div class="col">
          <?/*

          use zetsoft\widgets\notifier\ZKGrowlWidget;
          use zetsoft\widgets\notifier\ZKPopoverXWidget;
          use zetsoft\widgets\notifier\ZModalWidget;
          use zetsoft\widgets\notifier\ZPopoverXWidget;
          use zetsoft\widgets\notifier\ZSessionGrowlWidget;
          use zetsoft\widgets\notifier\ZSweetAlert2Widget2;
          use zetsoft\widgets\themes\ZMessageWidget;

          echo ZKGrowlwidget::widget([
              'config' => [
                  'linkUrl' => '',
                  'title' => '',
                  'delay' => 500,
                  'type' => ZKGrowlWidget::type['success'],
              ]


          ]);
          */?>
        </div>
      </div>-->
            <br>
      <div class="row">
        <div class="col">
          <?
          echo ZKPopoverXWidget::widget([
              'config'=>[
                  'header' => 'Hello world',
                  'content' => 'fdsasgsdgdsgdsg',
                  'footer' => Html::button('Submit', ['class' => 'btn btn-sm btn-primary']),
                  'toggleLabel' => 'Button for popover',
                  'toggleTag' => 'button',
                  'placement' => PopoverX::ALIGN_RIGHT,
                  'type' => PopoverX::TYPE_DANGER,
                  'size' => PopoverX::SIZE_LARGE
              ]
          ]);
          echo ZKPopoverXWidget::widget([
              'config'=>[
                  'header' => 'Hello world',
                  'content' => 'fdsasgsdgdsgdsg',
                  'footer' => Html::button('Submit', ['class' => 'btn btn-sm btn-primary']),
                  'toggleLabel' => 'Button for popover',
                  'toggleTag' => 'button',
                  'placement' => PopoverX::ALIGN_LEFT,
                  'type' => PopoverX::TYPE_SUCCESS,
                  'size' => PopoverX::SIZE_LARGE
              ]
          ]);
          echo ZKPopoverXWidget::widget([
              'config'=>[
                  'header' => 'Hello world',
                  'content' => $content,
                  'footer' => Html::button('Submit', ['class' => 'btn btn-sm btn-primary']),
                  'toggleLabel' => 'Button for popover',
                  'toggleTag' => 'button',
                  'placement' => PopoverX::ALIGN_RIGHT,
                  'type' => PopoverX::TYPE_DANGER,
                  'size' => PopoverX::SIZE_LARGE
              ]
          ]);
          echo ZKPopoverXWidget::widget([
              'config'=>[
                  'header' => 'Hello world',
                  'content' => $content,
                  'footer' => Html::button('Submit', ['class' => 'btn btn-sm btn-primary']),
                  'toggleLabel' => 'Button for popover',
                  'toggleTag' => 'button',
                  'placement' => PopoverX::ALIGN_LEFT,
                  'type' => PopoverX::TYPE_DANGER,
                  'size' => PopoverX::SIZE_LARGE
              ]
          ]);
          echo ZKPopoverXWidget::widget([
              'config'=>[
                  'header' => 'Hello world',
                  'content' => $content,
                  'footer' => Html::button('Submit', ['class' => 'btn btn-sm btn-primary']),
                  'toggleLabel' => 'Button for popover',
                  'toggleTag' => 'button',
                  'placement' => PopoverX::ALIGN_TOP,
                  'type' => PopoverX::TYPE_DANGER,
                  'size' => PopoverX::SIZE_LARGE
              ]
          ]);
          echo ZKPopoverXWidget::widget([

          ]);
          ?>
        </div>
      </div>
            <br>
      <div class="row">
        <div class="col">
          <?
          echo ZModalWidget::widget([
              'config' =>[
                  'type' => ZModalWidget::type['central'],
                  'position' => ZModalWidget::position['top'],
                  'sidePosition' => ZModalWidget::SidePositon['right'],
                  'size' => ZModalWidget::Size['lg'],
                  'modalTitle' => 'Modal Title',
                  'modalBodyContent' => $content,
                  'styleType' => ZModalWidget::StyleType['success'],
                  'frameSidePosition' => ZModalWidget::FrameSidePosition['bottom'],
                  'closeButtonTitle' => 'Close',
                  'checkButtonTittle' => 'Save',
                  'triggerButtonStyle' => ZModalWidget::TriggerButtonStyle['secondary'],
                  'triggerButtonTitle' => 'show me',
              ]
          ]);
          ?>
        </div>
      </div>

          <br>
          <div class="row">
            <div class="col">
              <?
              ZPopoverXWidget::begin([

                  'config' => [
                      'buttonIcon' => 'fa fa-'.FA::_ENVELOPE,
                      'titleHeader' => 'Messages',
                      'badge' => $badgeMessage,
                  ]
              ]);
              echo ZMessageWidget::widget([
              ]);
              ZPopoverXWidget::end();
              ?>
            </div>
          </div>


            <br>
            <div class="row">
              <div class="col">
                <?
                echo ZSessionGrowlWidget::widget([

                    'config'=>[
                        'type' => Growl::TYPE_SUCCESS,
                        'title' => 'Well done!',
                        'body' => 'You successfully read this important alert message. 1',

                    ]

                ]);
                ?>
              </div>
            </div>


            <br>
            <div class="row">
              <div class="col">
                <?
                echo ZSweetAlert2Widget2::widget([
                    'config' => [
                        'funcName' => 'exampleFunc',
                        'type' => ZSweetAlert2Widget2::type['fire'],
                        'width' => 500,
                        'url'=> 'http://eyuf.zettest.uz/cores/main/index.aspx#menu',
                        'padding' => '0',
                        'iframeWidth'=> '500px',
                        'iframeHeight' => '500px',
                    ],
                    'event' => [
                        'notresult' => <<<JS
         window.open('https://sweetalert2.github.io/', '_blank');
         
JS,
                    ]
                ]);
                echo ZButtonWidget::widget([
                    'config' => [
                        'text' => 'button',
                        'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
                    ],
                    'event' => [
                        'click' => <<<JS
     function() {
         exampleFunc();
     }
JS,

                    ]
                ]);
                ?>
              </div>
            </div>
