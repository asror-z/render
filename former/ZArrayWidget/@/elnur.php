<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use kartik\grid\DataColumn;
use zetsoft\former\eyuf\RavshanForm_3;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZArrayWidget4;

$columns =
    [
        [
            'class' => DataColumn::class,
            'attribute' => 'password',
        ],

        [
            'class' => DataColumn::class,
            'attribute' => 'name',

        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'text',

        ],

    ];

$id=77;
$filter = User::findOne($id);
$provider = $filter->search();


echo ZArrayWidget::widget([
    'model' => $filter,
    'columns' => $columns,
    'provider' => $provider
]);
