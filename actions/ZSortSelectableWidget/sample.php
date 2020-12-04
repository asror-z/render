<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\App\eyuf\CheckboxItem;
use zetsoft\widgets\actions\ZSortSelectableWidget;
use zetsoft\widgets\actions\ZSortSelectableWidgetAz;



$checkboxItem = new CheckboxItem();
$checkboxItem->icon = '<img width="60" height="auto" src="https://i2.wp.com/splus.uz/wp-content/uploads/2020/03/paypal-logo.jpg?fit=1200%2C750" alt="sfasf">';
$checkboxItem->title = 'UzCard';
$checkboxItem->text = 'UzCard tooltip';

$checkboxItems [] = $checkboxItem;
$checkboxItems [] = $checkboxItem;
$checkboxItems [] = $checkboxItem;

 //vdd($checkboxItems);

echo ZSortSelectableWidget::widget([
    'data' => $checkboxItems
]);

