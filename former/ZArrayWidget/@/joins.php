<?php
/** @var ZView $this */

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;

use yii\authclient\widgets\AuthChoice;
use yii\bootstrap\Modal;
use zetsoft\former\auth\LoginForm;
use zetsoft\former\eyuf\NeedForm;
use zetsoft\former\eyuf\ProgramForm;
use zetsoft\system\actives\ZArrayQuery;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZAdminCardWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZColWidget;
use kartik\dynagrid\DynaGrid;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\user\User;


Az::$app->controller->layout = 'login';

$model = new ProgramForm();
$model->allApp();

$action->title = Azl . 'Статистика в формате стран по программам';
/** @var ZView $this */
$model->configs->filter = true;
$model->configs->pageSummary = true;

$data = Az::$app->App->eyuf->main->formByCountries($model);

echo ZArrayWidget::widget([
    'model' => $model,
    'data' => $data,
    'config' => [
        'title' => Az::l('Статистика в формате стран по программам(Таблица)')
    ]
]);








