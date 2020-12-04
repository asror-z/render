<?php

use zetsoft\widgets\cards\ZCartViewWidget;
use zetsoft\system\Az;



/*$wishList = Az::$app->cores->session->get('wishList');
$wishListCount = 0;

if (is_array($wishList)) 
	$wishListCount = count($wishList);
*/
$wishListCount = '0'
?>


<div class="container">	
<?
echo ZCartViewWidget::widget([
	'config' => [
		'url' => '/customer/wish/index.aspx',
        'text' => 'izbrannoe',
        'icon' => 'fas fa-heart',
        'amount' => $wishListCount
	]

]);
?>
</div>
