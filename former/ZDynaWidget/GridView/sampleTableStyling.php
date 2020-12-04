<?php

use kartik\grid\GridView;

$columnsSize = new \zetsoft\models\user\User();



echo GridView::widget([
    'dataProvider'=> $columnsSize->search(),
    //'filterModel' => $searchModel,
    'columns' => [
        ['attribute' => 'id',],
        ['attribute' => 'name',],
        ['attribute' => 'contact',],
        ['attribute' => 'phone',],
        ['attribute' => 'status',],
],
    'resizableColumns'=>true,
    'bootstrap' => true, // connect to bootstrap
    'bsVersion'=> 4, // bootstrap version 3 or 4
    'bordered' => true,
    'striped' => false,
    //'condensed' => false, //accepts true when 'bootstrap' => true,
    //'responsive' => true, //accepts true when 'bootstrap' => true,
    'hover' => true, //accepts true when 'bootstrap' => true,
    //'containerOptions' => true , //accepts true when 'responsive' => true,
    'perfectScrollbar' => false,



]);
