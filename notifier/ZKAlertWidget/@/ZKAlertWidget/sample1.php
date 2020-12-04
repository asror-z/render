<?php

use zetsoft\widgets\notifier\ZKAlertWidget;
use kartik\widgets\Alert;

echo ZKAlertWidget::widget([
    'config'=>[
        'iconType'=>'icon',
        'class'=> '',
        'body'=>'',
        'title'=>'',
        'delay'=>0,
        'isShowSeparator'=>true

    ],

]);

?>
<style>
    .fade.in {
        opacity: 1;
    }
</style>
