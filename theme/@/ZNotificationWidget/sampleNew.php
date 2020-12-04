<?php
use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\widgets\themes\ZNotificationWidget;


?>
<div class="container row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6 ml-auto">


        <div class="vd_mega-menu-wrapper mr-2">
            <div class="vd_mega-menu pull-right">
                <ul class="mega-ul">

                    <?

                    echo ZNotificationWidget::widget([
                        'config' => [
                            'icon' => 'fas fa-' . FA::_BELL,
                            'title' => Az::l('Уведомления'),
                        ]
                    ]);

                    ?>
                </ul>
            </div>
        </div>
    </div>

</div>
