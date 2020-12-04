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


Az::$app->smart->dynaStats->clear();
Az::$app->smart->dynaStats->id = 23;

Az::$app->smart->dynaStats->run();
$model = Az::$app->smart->dynaStats->createModel();
//vdd($model->columns);
echo ZFormWidget::widget([
    'model' => $model
]);

