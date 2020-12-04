<?php


use zetsoft\models\place\PlaceAdress;
use zetsoft\models\shop\ShopBrand;
use zetsoft\models\user\User;
use zetsoft\models\test\Test3;
use zetsoft\service\forms\Active;
use zetsoft\widgets\former\ZTabularWidget;
use zetsoft\widgets\former\ZFormWidget;
 ?>

   <!-- <style>
        [type=checkbox]:checked, [type=checkbox]:not(:checked) {
            opacity: 1;
            pointer-events: visible;
        }
    </style>-->

 <?php

$model = new PlaceAdress();
$form = $this->activeBegin();
    echo ZTabularWidget::widget([
        'form'=>$form,
        'model'=>$model,
        'config' => [
        	'gridType' => ZTabularWidget::GridTypes['PRIMARY'],
        	'deleteUrl' => 'delete',
        	// 'actionColumn' => false,
        	'checkboxColumn' => [
        		
        	],
        	'gridSettings' => [
        		'panel' => [
        			'before' => 'Before Text',
        		]
        	]
	    ],
    ]);

$this->activeEnd();

