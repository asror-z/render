<?php

use \kartik\widgets\Alert;
use zetsoft\widgets\notifier\ZKAlertBlockWidget;
use kartik\widgets\AlertBlock;
use zetsoft\widgets\notifier\ZKAlertWidget;

echo ZKAlertBlockWidget::widget([
    'config' => [
        'isUseSessionFlash' => false,
        'body' => 'Вход в систему "Эл-юрт умиди"',
    ],
]);

echo ZKAlertWidget::widget([
    'config' => [
        'type' => Alert::TYPE_SUCCESS,
        'body' => 'Вход в систему "Эл-юрт умиди"',
        'title' => 'Система интранет',
        'delay' => 0,
        'isShowSeparator' => true,
    ]
]);
echo ZKAlertWidget::widget([
    'config' => [
        'type' => Alert::TYPE_PRIMARY,
        'body' => 'Вход в систему "Эл-юрт умиди"',
        'title' => 'Система интранет',
        'delay' => 2000,
        'isShowSeparator' => true,
    ]
]);
echo ZKAlertWidget::widget([
    'config' => [
        'type' => Alert::TYPE_DEFAULT,
        'body' => 'Вход в систему "Эл-юрт умиди"',
        'title' => 'Система интранет',
        'delay' => 0,
        'isShowSeparator' => true,
    ]
]);
echo ZKAlertWidget::widget([
    'config' => [
        'type' => Alert::TYPE_WARNING,
        'body' => 'Вход в систему "Эл-юрт умиди"',
        'title' => 'Система интранет',
        'delay' => 0,
        'isShowSeparator' => true,
    ]
]);
echo ZKAlertWidget::widget([
    'config' => [
        'type' => Alert::TYPE_INFO,
        'body' => 'Вход в систему "Эл-юрт умиди"',
        'title' => 'Система интранет',
        'delay' => 0,
        'isShowSeparator' => true,
    ]
]);
echo ZKAlertWidget::widget([
    'config' => [
        'type' => Alert::TYPE_DANGER,
        'body' => 'Вход в систему "Эл-юрт умиди"',
        'title' => 'Система интранет',
        'delay' => 0,               
        'isShowSeparator' => true,
    ]
]);
echo ZKAlertWidget::widget([
    'config' => [
        'type' => Alert::TYPE_CUSTOM,
        'body' => 'Вход в систему "Эл-юрт умиди"',
        'title' => 'Система интранет',
        'delay' => 0,
        'isShowSeparator' => true,
    ]
]);


?>
