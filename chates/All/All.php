<?

/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\chates\ZChatCreateItemWidget;
use zetsoft\widgets\chates\ZChatNavItemWidget;
use zetsoft\widgets\chates\ZChatWidget;
use zetsoft\widgets\chates\ZFacebookChatWidget;
use zetsoft\widgets\chates\ZFriendAddWidget;
use zetsoft\widgets\chates\ZSmallChatWidget;
use zetsoft\widgets\chates\ZTelegramNavigationWidget;


/*
 *  render/chates/ZCHatCreateItemWidget
render/chates/ZCHatNavItemWidget
render/chates/ZChatWidget
render/chates/ZFacebookChatWidget
 *
 * */
?>
/*
<!--<div class="row">
    <div class="col">
      
/*            echo ZChatCreateItemWidget::widget([
                'layout' => [
                    'main' => '',
                ]
            ]);
        */?>
    </div>
</div>-->

<!--<div class="row">
    <div class="col">

/*            echo ZChatNavItemWidget::widget([
                
            ]);
        */?>
    </div>
</div>-->

<!--<div class="row">
    <div class="col">

/*/*            echo ZChatWidget::widget([]);
        */*/?>
    </div>
</div>-->

<!--<div class="row">
    <div class="col">
        <?php
/*            echo ZFacebookChatWidget::widget([]);
        */?>
    </div>
</div>-->

<!--<div class="row">
    <div class="col">
        <?php
/*        echo ZFriendAddWidget::widget();
        */?>
    </div>
</div>-->

<div class="row">
    <div class="col">
        <?php
        echo ZSmallChatWidget::widget([]);
        ?>
    </div>
</div>

<div class="row">
    <div class="col">
        <?php
        echo ZTelegramNavigationWidget::widget([]);
        ?>
    </div>
</div>

<div class="row">
    <div class="col">
        <?php
        /*echo ZUserMessageWidget::widget();*/
        ?>
    </div>
</div>

