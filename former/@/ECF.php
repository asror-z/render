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
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use kartik\helpers\Html;
use zetsoft\former\eyuf\ProgramForm;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZArrayWidget2;
use zetsoft\widgets\former\ZArrayWidgetNew;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidget2;
use zetsoft\widgets\former\ZExportWidget;
use zetsoft\widgets\former\ZExportWidgetNew;
?>
    <div class="text-justify">
        <div class="bs-section-title">Display export menu dropdown along with a basic <code>kartik\grid\GridView</code>. Set a label for your export menu dropdown.</div>        <div class="bs-callout bs-callout-warning">
            <h4>Tip</h4>
            <p>Not seeing the updated content on this page! Hard refresh your browser to clean cache for this page (e.g. <kbd>SHIFT-F5</kbd> on Windows Chrome)</p>
        </div>
    </div>
<?
$models = User::find()->asArray()->all();

/*echo ZArrayWidget2::widget([
    'model' => new User(),
    'data' => $models,
    'config' => [
        'filename' => 'table_export',
    ]
]);*/

echo ZArrayWidget::widget([
    'model' => new User(),
    'data' => $models,
    'config' => [
        'filename' => 'table_export',
    ]
]);
