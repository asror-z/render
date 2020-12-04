<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\grid\DataColumn;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZDynaWidget;

$model = new \zetsoft\models\test\TestOtabek();
$model->columns();
//vdd($model);

echo ZDynaWidget::widget([
    'model' => $model,
    'config' => [
        'contentOptions' => function ($model, $key, $index, $column) {
            /** @var User $model */
            /** @var DataColumn $column */

            $color = 'blue';
            if ($model['gender'] === User::gender['female']) $color = 'red';
            if ($column->attribute === 'name') $color = 'yellow';
            if ($index % 2 !== 0) $color = 'pink';
            return [
                'style' => 'background-color:' . $color,
                'class' =>'hoverable'
            ];
        }
    ]
]);
