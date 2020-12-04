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
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
//$model = $this->modelGet(Computer::class, 66);

$model = new TestLaptopForm();


/*
$dynamicModel = new ZDynamicModel($model->getAttributes());
//$dynamicModel->addRule($attribute, 'safe');
$dynamicModel->setAttributeLabels($model->attributeLabels());*/

$app = $model->allApp();
//vdd($app);
$model = Az::$app->forms->former->model($app);

/*$model->configs();
$model->columns();*/

// $model2->setAttributes($model->attributes);
//$model->name = 'sadf';

//vdd($model->_attributeLabels);
Az::$app->forms->modelz->form($model);
Az::$app->forms->modelz->post();

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

