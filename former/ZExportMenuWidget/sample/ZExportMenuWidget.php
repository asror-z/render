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


use kartik\export\ExportMenu;
use kartik\grid\GridView;
use kartik\helpers\Html;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZExportMenuWidget;
use zetsoft\widgets\former\ZExportWidget;
//ZExportMenuWidget
use ZExportMe;

$model = new User();
$dataProvider = $model->search();
$dataProvider->pagination = [
    'pageSize' => 10,
];


$columns = $model->columnsList([dbTypeJsonb]);

echo ZExportMenuWidget::widget([
    'dataProvider' => $dataProvider,
    'columns' => $columns,
    'triggerDownload' => false
]);






