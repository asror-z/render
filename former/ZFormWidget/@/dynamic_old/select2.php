<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/14/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use kartik\builder\Form;
use kartik\form\ActiveForm;
use rmrevin\yii\fontawesome\FA;
use yii\web\Response;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\FormDb;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\core\CoreInput;
use zetsoft\models\shop\ShopOrder;
use zetsoft\system\actives\ZDynamicModel;
use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Dynamic;
use zetsoft\system\module\Forms;
use zetsoft\system\module\Models;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHHiddenInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZPeriodPickerWidgetX;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
//$model = $this->modelGet(Computer::class, 66);


$startRange = $this->sessionGet('agentRangeDatePeriod');

Az::$app->forms->active->enableLabel = true;
Az::$app->forms->active->labelSpan = 4;
$form = $this->activeBegin();

$app = new ALLApp();

$column = new \zetsoft\dbitem\data\Form();
$column->dbType = dbTypeDate;
$column->widget = ZHHiddenInputWidget::class;
$app->columns['start'] = $column;

$column = new Form();
$column->dbType = dbTypeDate;
$column->widget = ZHHiddenInputWidget::class;
$app->columns['end'] = $column;

$column = new Form();
$column->title = 'form_id';
$column->widget = ZPeriodPickerWidgetX::class;
$column->options = [
    'config' => [
        'timepicker' => true,
    ],
    'value' => $startRange,
];


$app->columns['period'] = $column;

$column = new Form();
$column->title = Az::l('Статусы колл центра');
$column->widget = ZKSelect2Widget::class;
//$column->data = (new ShopOrder())->_status_callcenter;
$column->data = [
    'safasd',
    'safasd',
];

$app->columns['status'] = $column;

$model_d = Az::$app->forms->former->model($app);

$model_d->configs->hasLabel = true;

echo ZFormBuildWidget::widget([
    'model' => $model_d,
    'form' => $form,
    'config' => [
        'topBtn' => false,
        'botBtn' => false,
    ],
]);


$this->activeEnd();

