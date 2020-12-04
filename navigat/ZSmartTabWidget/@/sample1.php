<?php



use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\navigat\ZSmartTabWidget1;

$names = [
    1 => 'signin',
    2 => 'signup',
    3 => 'login'
];

$items = [];
for ($i = 1; $i <= 3; $i++) {
    $item = new TabItem();
    $item->title = 'blah-blah ' . $i;
    $item->content = 'Content ' . $i;
    $item->tabname = $names[value($i)];
    $items[] = $item;
}

echo ZSmartTabWidget1::widget([
    'config' => [
        'theme' => ZSmartTabWidget:: theme['Default'],
        'animation' => ZSmartTabWidget:: animation['slide-swing'],
        'orientation' => ZSmartTabWidget:: orientation['horizontal'],
        'justified' => ZSmartTabWidget::justified['true'],
        'isAjax' => ZSmartTabWidget::isAjax['false'],
        'tab' => 'SignIn'
    ],
    'data' => $items,

]);    


