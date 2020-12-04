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
use yii\base\DynamicModel;
use yii\web\Response;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\FormDb;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\actives\ZDynamicModel;
use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Dynamic;
use zetsoft\system\module\Forms;
use zetsoft\system\module\Models;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$app = new ALLApp();
$column = new \zetsoft\dbitem\data\Form();
$column->title = 'sdfg';
$column->data = [
    'df' => 'fdg'
];
$column->widget = ZKSelect2Widget::class;
$column->ajax = false;

$app->columns['dfg'] = $column;
$model = Az::$app->forms->former->model($app);
$form = $this->activeBegin();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'isCnt' => false,
        'type' => ZFormWidget::type['all'],
    ]
]);


$this->activeEnd();

