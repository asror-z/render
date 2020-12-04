<?php
/**
 *
 *
 * Author:  Musoxon Adulkhamidov
 *
 *
 */


namespace zetsoft\widgets\themes;

use rmrevin\yii\fontawesome\FA;
use yii\bootstrap\Html;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

class ZMessageWidget1 extends ZWidget
{

    public $config = [];
    public $_config = [];

    private $message_item = [
        'message' => 'Hi! how are you?))',
        'user_photo' => '/publish/inputs/user-inputs/demo_files/avatar-2.jpg',
        'inviting_time' => '1 hour 39 min'
    ];


    public $event = [];
    public $_event = [
    ];

    public function asset()
    {
       //  $this->fileJs('/publish/theme/vendroid/Js/theme.js');
    }


    public function codes()
    {

        $button = ZButtonWidget::widget([
            'config' => [
                'layout' => ZButtonWidget::layouts['smallIcon'],
                'size' => ZButtonWidget::sizes['btn-sm'],
                'icon' => FA::_SYNC,
                'color' => ZButtonWidget::colors['btn-light'],
                'url' => ZUrl::current(),
            ]
        ]);

        $all = '';

        foreach ($this->data as $key => $mes_item) {

            $mes_item = ZArrayHelper::merge($this->message_item, $mes_item);

            $all .= <<<HTML
            <li>
                 <div class="menu-icon"><img alt="example image"
            src=" {$mes_item['user_photo']}">
                </div>
                <div class="menu-text">  {$mes_item['message']}
                    <div class="menu-info">
<span class="menu-date"> {$mes_item['inviting_time']} </span>
                        <span class="menu-action">
                            <span class="menu-action-icon"
                                data-original-title="Mark as Unread"
                                data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-eye"></i>
                            </span>
                        </span>
                    </div>
                </div>
                        </li>
HTML;


            $this->htm = <<<HTML

        <div class="vd_mega-menu-wrapper">
            <div class="vd_mega-menu pull-right" style="float:right;!important;">
                <ul class="mega-ul">
                    <li id="top-menu-2" class="one-icon mega-li">
                        <a href="#" class="mega-link" data-action="click-trigger">
                            <span class="mega-icon"><i class="fa fa-envelope"></i></span>
                            <span class="badge vd_bg-red">{$this->_config['badge']}</span>
                        </a>
                        <div class="vd_mega-menu-content drop_content_strimell width-xs-3 width-sm-3 width-md-3 width-lg-3 right-xs left-sm"
                            data-action="click-target" style="display: none;">
                            <div class="child-menu"  >
                                <div class="title"> Messages
                                    <div class="vd_panel-menu">
                                        <span data-original-title="Message Setting" data-toggle="tooltip"
                                            data-placement="bottom" class="menu">
                                                <!-- <i class="fa fa-cog"></i>-->
                                            {$button}
                                        </span>
                                    </div>
                                </div>
                                <div class="content-list content-image">
                                    <div data-rel="scroll" class="mCustomScrollbar _mCS_2" style="overflow:hidden;">
                                        <div class="mCustomScrollBox mCS-light" id="mCSB_2"
                                            style="position: relative; height: 100%; overflow: scroll; max-width: 100%; max-height: 400px;">
                                            <div class="mCSB_container mCS_no_scrollbar"
                                                style="position: relative; top: 0px;">
                                                <ul class="list-wrapper pd-lr-10">
                                                    {$all}
                                                </ul>
                                            </div>
                                            <div class="mCSB_scrollTools"
                                                style="position: absolute; opacity: 0; display: none;">
                                                <div class="mCSB_draggerContainer">
                                                    <div class="mCSB_dragger"
                                                        style="position: absolute; height: 314px; top: 0px;"
                                                        oncontextmenu="return false;">
                                                        <div class="mCSB_dragger_bar"
                                                            style="position: relative; line-height: 314px;"></div>
                                                    </div>
                                                    <div class="mCSB_draggerRail">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="closing text-center" style="">
                                        <a href="http://www.venmond.com/asset/vendroid/pages-user-profile.php#">See All
                                            Notifications <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div> <!-- child-menu -->
                        </div> <!-- vd_mega-menu-content -->
                    </li>
                </ul>
                <!-- Head menu search form ends -->
            </div>
        </div>
  
HTML;


            $this->js = <<<JS
          
    // Click outside click-target
    $(document).click(function(event) {
        if (($(event.target).closest('[data-action^="click-trigger"]').get(0) == null) && ($(event.target).closest('[data-action^="click-target"]').get(0) == null) && ($(event.target).closest('[data-action^="expand-all"]').get(0) == null)) {
            $('[data-action^="click-target"]').hide();
            $('[data-action^="click-trigger"]').removeClass('open');
            $('body').removeClass('expand-all');
            calculateContentHeight();
        }
    });
          
          
             $('html.no-touch [data-rel^="scroll"]').mCustomScrollbar({
        set_height: function() {
            $(this).css('max-height', $(this).data('scrollheight'));
            return $(this).data('scrollheight');
        },
        mouseWheel: "auto",
        autoDraggerLength: true,
        autoHideScrollbar: true,
        advanced: {
            updateOnBrowserResize: true,
            updateOnContentResize: true
        },
        // removed extra commas
    });
   

          

JS;




            $this->css = <<<CSS
            
           .fa-gear:before, .fa-cog:before {
           content: "";
           }
           
           :before, :after {
           -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
           box-sizing: border-box;
           }
           
CSS;


        }

    }
}
