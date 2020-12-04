<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

//use zetsoft\widgets\former\ZListViewWidgetOld;


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\former\ZJqueryStepsWidgetA;

$items = [];
$item = new TabItem();
$item->label = 'Account';
$item->content = '<label for="userName">User name *</label>
            <input id="userName" name="userName" type="text" class="required">
            <label for="password">Password *</label>
            <input id="password" name="password" type="text" class="required">
            <label for="confirm">Confirm Password *</label>
            <input id="confirm" name="confirm" type="text" class="required">
            <p>(*) Mandatory</p>';
$items[] = $item;
$item = new TabItem();
$item->label = 'Profile';
$item->content = '<label for="name">First name *</label>
            <input id="name" name="name" type="text" class="required">
            <label for="surname">Last name *</label>
            <input id="surname" name="surname" type="text" class="required">
            <label for="email">Email *</label>
            <input id="email" name="email" type="text" class="required email">
            <label for="address">Address</label>
            <input id="address" name="address" type="text">
            <p>(*) Mandatory</p>';
$items[] = $item;
$item = new TabItem();
$item->label = 'Hints';
$item->content = '<ul>
                <li>Foo</li>
                <li>Bar</li>
                <li>Foobar</li>
            </ul>';
$items[] = $item;
$item = new TabItem();
$item->label = 'Finish';
$item->content = '<input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>';
$items[] = $item;

echo ZJqueryStepsWidgetA::widget([
    'config' => [
        'type' => ZJqueryStepsWidgetA::type['Basic Form Example'],
        'id_password' => 'password',
        'alert' => 'alert("Submitted!")',
    ],
    'data' => $items,

]);
