<?php
/**
 * Created by PhpStorm.
 * User: Rakhimov
 * Date: 17-Jul-19
 * Time: 11:33
 */

use zetsoft\assets\navigs\ZAnimNavigationAsset;
use zetsoft\widgets\navigat\ZRoundedAnimatedNavigationWidget;

ZAnimNavigationAsset::register($this);

$navs = [
    'The team',
    'Our services',
    'Our projects',
    'Start a project',
    'Join In',
    'Create an account'
];

echo ZRoundedAnimatedNavigationWidget::widget([
    'title' => 'Rounded Animated Navigation | CodyHouse',
    'navs' => $navs
]);
