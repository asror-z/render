<?php

/**
 *
 *
 * Author:  Maxamadjonov Jaxongir
 *
 */
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use zetsoft\models\user\UserCompany;
use zetsoft\models\page\PageControl;
use zetsoft\system\column\ZLinkPager;
use zetsoft\system\column\ZScrollPager;
use yii\widgets\LinkPager;
use yii\grid\GridView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZListViewWidgetOld;

$dataProvider = new ActiveDataProvider([
    'query' => PageControl::find(),
    'pagination' => [
        'pageSize' => 25,
    ],
    'sort' => [
        //'attributes' => ['id'],
        'defaultOrder' => [
            'id' => SORT_ASC,
        ]
    ],
]);

//$form = $this->activeBegin();
echo '<div>';
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'pager' => [
    'class' =>ZScrollPager::class,
    'isGrid' => false
        ],


]);
echo '</div>';



