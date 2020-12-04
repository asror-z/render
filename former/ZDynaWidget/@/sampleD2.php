<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\data\FormDb;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\column\ZLinkPager;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetD;

$model = new User();
/*$model->configs->nameOn = [
    'name'
];*/

$model->configs->titles = [
     'email' => 'wdfds'
];


echo ZDynaWidgetD::widget([
    'model' => $model,
    'config' => [
        'pagerClass' => [
            'class' => ZLinkPager::class,
            'activePageCssClass' => ZLinkPager::activePageCssClass['bg-success'],
            'pageCssClass' => '',
            'prevPageCssClass' => '',
            'nextPageCssClass' => '',

        ],

        'panelTemplate' =>"{panelBefore}{items}{panelAfter}{panelFooter}",
        'idColumnTitle' => 'ID',

    ]
]);
