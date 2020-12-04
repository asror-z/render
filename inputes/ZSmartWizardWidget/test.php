<?php
use \zetsoft\widgets\former\ZSmartWizardWidget;

$data = [];

$item = new \zetsoft\dbitem\data\TabItem();
$item->title = 'efdergh';
$item->subtitle = 'efdergh';

$item->content = 'erther';

$data[] = $item;
$item->title = 'efdergh';
$item->subtitle = 'efdergh';

$item->content = 'erther';

$data[] = $item;

echo ZSmartWizardWidget::widget([
    'data' => $data,
    'config' => [
        'theme' => ZSmartWizardWidget::theme['arrows'],
        'title' => 'wq',
        'backButtonSupport' => true,
    ]
])

?>