<?php

use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\widgets\themes\ZNotifyEyufWidgetAzimjon;

?>
<div class="container">
    <?
    echo ZNotifyEyufWidgetAzimjon::widget([
        'config' => [
            'icon' => 'fas fa-' . FA::_BELL,
            'title' => Az::l('Уведомления'),
        ]
    ]);
    ?>
</div>
