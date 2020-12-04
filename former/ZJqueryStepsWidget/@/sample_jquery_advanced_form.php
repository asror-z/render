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
$item->content = ' <legend>Account Information</legend>
 
        <label for="userName-2">User name *</label>
        <input id="userName-2" name="userName" type="text" class="required">
        <label for="password-2">Password *</label>
        <input id="password-2" name="password" type="text" class="required">
        <label for="confirm-2">Confirm Password *</label>
        <input id="confirm-2" name="confirm" type="text" class="required">
        <p>(*) Mandatory</p>';
$items[] = $item;
$item = new TabItem();
$item->label = 'Profile';
$item->content = '<legend>Profile Information</legend>
 
        <label for="name-2">First name *</label>
        <input id="name-2" name="name" type="text" class="required">
        <label for="surname-2">Last name *</label>
        <input id="surname-2" name="surname" type="text" class="required">
        <label for="email-2">Email *</label>
        <input id="email-2" name="email" type="text" class="required email">
        <label for="address-2">Address</label>
        <input id="address-2" name="address" type="text">
        <label for="age-2">Age (The warning step will show up if age is less than 18) *</label>
        <input id="age-2" name="age" type="text" class="required number">
        <p>(*) Mandatory</p>';
$items[] = $item;
$item = new TabItem();
$item->label = 'Warning';
$item->content = ' <legend>You are to young</legend>
 
        <p>Please go away ;-)</p>';
$items[] = $item;
$item = new TabItem();
$item->label = 'Finish';
$item->content = '<legend>Terms and Conditions</legend>
 
        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>';
$items[] = $item;
echo ZJqueryStepsWidgetA::widget([
    'config' => [
        'age-2'=>'age-2',
        'password-2'=>'password-2',
        'alert'=>'alert("Submitted!")',
        'type' => ZJqueryStepsWidgetA::type['Advanced Form Example'],
    ],
    'data' => $items,

]);
