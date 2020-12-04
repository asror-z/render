<?php

use rmrevin\yii\fontawesome\FA;
use zetsoft\dbitem\core\NotifyItem;
use zetsoft\models\auto\ChatNotify;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\themes\ZNotifyWidget;


?>
<div class="container row">

    <div class="col-md-6 ml-auto">


        <div class="vd_mega-menu-wrapper mr-2">
            <div class="vd_mega-menu pull-right">
                <ul class="mega-ul">

                    <?
              
                   echo ZNotifyWidget::widget([
                        'config' => [
                            'icon' => 'fas fa-'.FA::_BELL,
                            'title' => Az::l('Уведомления'),
                            'badge' => 3,

                        ]
                    ]);


                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">

    </div>
</div>
