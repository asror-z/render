<?php


use zetsoft\widgets\navigat\ZButtonWidget;

echo ZButtonWidget::widget([
    'config' => [
        'name' => "MessageReload",
        'layout' => ZButtonWidget::layout['default']
    ],
    'event' => [
        'click' => "function(){
            $('#messagePjax').click();
        }"
    ]

]);
echo ZButtonWidget::widget([
    'config' => [
        'name' => "FriendReload",
        'layout' => ZButtonWidget::layout['default']
    ],
    'event' => [
        'click' => "function(){
           $('#friendPjax').click();
        }"
    ]

]);
echo ZButtonWidget::widget([
    'config' => [
        'name' => "NotifyReload",
        'layout' => ZButtonWidget::layout['default']
    ],
    'event' => [
        'click' => "function(){
            $('#notifyPjax').click();
        }"
    ]

]);


?>

