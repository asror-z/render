<?php
/**
 * Date: 09.06.2019
 * Time: 15:13
 */


use zetsoft\widgets\dialogs\ZOLdModalWidget;

echo ZOldModalWidget::widget([
    'config'=>[
        'isModal' => false,
    ]
]);

echo ZOldModalWidget::widget([
    'config'=>[
        'isModal' => true,
    ]

]);

?>
