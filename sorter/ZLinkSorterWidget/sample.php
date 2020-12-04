<?php

use yii\data\Sort;
use zetsoft\widgets\sorter\ZLinkSorterWidget;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use zetsoft\models\place\PlaceCountry;

$countries = PlaceCountry::find();


$sort = new Sort([
    'enableMultiSort' => true,
    'attributes' => [
        'name' => [
            'label' => "Sarlavha",
        ],
        'alpha2',
        'phone',
    ],
]);

echo ZLinkSorterWidget::widget([
    'sort' => $sort,
    /*'attributes' => [
        'name',
        'alpha2',
        'phone',
    ],*/
    'config' => [

        // widget container tag
        'containerTag' => 'div', // default: ul
        'containerTagOptions' => [
            'class' => 'alert alert-info', 'style' => 'margin:15px'
        ],

        // wrapper tag for every single link (includes clear link)
        'wrapperTag' => 'span', // default: li
        'wrapperTagOptions' => [
            'style' => 'padding-right:15px'
        ],

        // options for every single link
        'linkOptions' => ['class' => 'text-success'],

        // sorting icon configs
        'hasSortingIcon' => true, // if false, sorting icon does not generate
        'sortingIconConfigs' => [

            //position - generates icon after or before the label of the link
            // values: before || after
            'position' => 'before', // default: after
            'ascIcon' => 'fa fa-sort-amount-asc', // default: fa fa-sort-alpha-down
            'descIcon' => 'fa fa-sort-amount-desc', // default: a fa-sort-alpha-up
        ],

        // Clear link Configs
        'hasClearLink' => true, // if false, clear link does not generate, default: true
        'clearLinkConfigs' => [

            'label' => '<i class = "fa fa-trash"></i> Clear Sorting',

            // position - generates the clear link end (after sorting links) or begin (before sorting links) of the widget
            // values:  begin || end
            'position' => 'begin', // default: end

            'options' => [
                'class' => 'text-danger'
            ], // html options for Clear link

        ],
    ]
]);


$dataProvider = new ActiveDataProvider([
    'query' => $countries,
    'pagination' => [
        'pageSize' => 30,
    ],
]);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [

        ['class' => 'yii\grid\SerialColumn'],

        'name',
        'alpha2',
        'phone',
    ]
]);


?>

