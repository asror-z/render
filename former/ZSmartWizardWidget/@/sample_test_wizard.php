<?php

/**
 *
 *
 * Author:  Dilshodjon Olimov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\former\ZSmartWizardWidgetA;

$items = [];
$item = new TabItem();
$item->label = 'step 1';
$item->content = 'content 1';
$items[] = $item;
$item = new TabItem();
$item->label = 'step 2';
$item->content = 'content 2';
$items[] = $item;
$item = new TabItem();
$item->label = 'step 3';
$item->content = 'content 3';
$items[] = $item;
$item = new TabItem();
$item->label = 'step 4';
$item->content = 'content 4';
$items[] = $item;

echo ZSmartWizardWidgetA::widget([
    'config' => [
        'theme' => ZSmartWizardWidgetA::theme['dots'],
        'animation' => ZSmartWizardWidgetA::animation['slide-horizontal'],
        'justified' => ZSmartWizardWidgetA::justified['true'],
        'toolbarButtonPosition' => ZSmartWizardWidgetA::toolbarButtonPosition['center'],
        'isEnabledCancelAndFinesh' => true,
    ],
    'data' => $items,
]);


