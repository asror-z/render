<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */
use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\widgets\themes\ZMessageWidget;

?>
<div class="container row">
       <div class="col-md-8 ml-auto">
     <div class="vd_mega-menu-wrapper mr-2">
            <div class="vd_mega-menu pull-right">
                <ul class="mega-ul">
                    <?
                    echo ZMessageWidget::widget([
                        'config' => [
                            'icon' => 'fas fa-' . FA::_ENVELOPE,
                            'title' => Az::l('Message'),
                        ]
                    ]);

                    ?>
                </ul>
            </div>
        </div>
    </div>

</div>

