<?php

use nirvana\infinitescroll\InfiniteScrollPager;
use yii\web\Request;
use zetsoft\system\Az;
use zetsoft\system\column\ZLinkPager;
use zetsoft\system\column\ZPagination;
use zetsoft\widgets\former\ZListViewWidget;

//vdd($pagination->links);
//vdd($pagination->getPageCount());
echo ZListViewWidget::widget([
    'data' => Az::$app->market->product->allProducts(),
    'config' => [
        'pager' => [
            'class' => ZLinkPager::class,
        ],
    ]
]);
