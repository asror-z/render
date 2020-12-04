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
use zetsoft\widgets\former\ZDynaWidget_jamshid;
use zetsoft\widgets\former\ZDynaWidgetD;

$model = new User();
/*$model->configs->nameOn = [
    'name'
];*/

$model->configs->titles = [
     'email' => 'wdfds'
];
/*
$model->configs->replace = [
    'email' => static function (FormDb $column) {

        $column->index = true;
        $column->title = Az::l('E-sadfasdfasdf');
        $column->dbType = dbTypeString;
        $column->rules = [
            [
                validatorEmail,
            ],
            [
                validatorRequired,
            ],
            [
                validatorUnique,
            ],
        ];

        return $column;
    },
];*/

$model->columns();

// $email = $model->columns['email']->title;
// vdd($email);
//vdd($model->columns['email']);

echo ZDynaWidget_jamshid::widget([
    'model' => $model,
    'config' => [
        'pagerClass' => [
            'class' => ZLinkPager::class,
            'activePageCssClass' => 'bg-success rounded-sm ',
            'pageCssClass' => '',
            'prevPageCssClass' => '',
            'nextPageCssClass' => '',

        ],

        'panelTemplate' =>"{panelBefore}{items}{panelAfter}{panelFooter}",
        'idColumnTitle' => 'ID',

    ]
]);

