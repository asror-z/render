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
use zetsoft\widgets\former\ZArrayWidget2;
use zetsoft\widgets\former\ZArrayWidgetNew;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidget2;
use zetsoft\widgets\former\ZExportWidget;
use zetsoft\widgets\former\ZExportWidgetNew;
?>
<?
$model = new EyufScholar();

/** @var ZView $this */
/*echo ZDynaWidget2::widget([
    'model' => $model,

]);*/
/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,

]);





