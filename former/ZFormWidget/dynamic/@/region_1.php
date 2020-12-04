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


use kartik\form\ActiveForm;
use yii\base\DynamicModel;
use yii\web\Response;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;

use zetsoft\dbitem\data\Form;
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
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
//$model = $this->modelGet(Computer::class, 66);

/*$models = new LaptopForm();
$app = $models->allApp();*/

$app = new ALLApp();

/*    $form = new Form();
    $form->title = 'rg';
    $app->columns['id'] = $column;*/

$form = new Form();
$form->title = 'rg';
$app->columns['name'] = $column;

$form = new Form();
$form->title = 'wddddd';
$app->columns['title'] = $column;

$object = Az::$app->forms->former->model($app);
// vdd($object);


$this->formModel($model);
$this->pjaxBegin();
$form = $this->activeBegin();


$this->modelPost();


?>

<?php

echo ZButtonWidget::widget([
    'config' => [
        'pjax' => true,
        'btnType' => ZButtonWidget::btnType['link'],
        'text' => 'Вход в систему',
        'btnStyle' => ZButtonWidget::btnStyle['btn-primary'],
    ],

]);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'isCnt' => false,
        'type' => ZFormWidget::type['all'],

    ]
]);


$this->activeEnd();
$this->pjaxEnd();

