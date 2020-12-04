<?php


use zetsoft\widgets\navigat\ZBreadcrumbsWidget;

echo ZBreadcrumbsWidget::widget([
    'config' => [
        'mode' => ZBreadcrumbsWidget::mode['page'],
        'category_id' => 2
    ]
]);