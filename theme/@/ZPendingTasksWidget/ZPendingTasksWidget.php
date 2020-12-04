<?php

/**
 *
 *
 * Author:  Zoxidjon Ergashev
 *
 *
 */

use zetsoft\widgets\themes\ZPendingTasksWidget;

echo ZPendingTasksWidget::widget([
    'config' => [
        'items' => [],
        'title' => 'Pending task',
    ]
]);
