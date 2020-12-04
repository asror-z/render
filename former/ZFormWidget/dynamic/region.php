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
use zetsoft\widgets\inputes\ZHCheckboxButtonGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */

$app = new ALLApp();

$config = new Config();
$column = new Form();
$config->title = Az::l('Компьютеры');

$app->configs = $config;


$proporties = Az::$app->market->product->propertsByCategory(4);

foreach ($proporties as $property) {
    $column->title = $property->name;
    $column->widget = ZHCheckboxButtonGroupWidget::class;
    $column->data = $property->items;
}

$app->columns[] = $column;

$app->cards = [];

$model = Az::$app->forms->former->model($app);


Az::$app->forms->modelz->form($model);
Az::$app->forms->zPjax->begin();

Az::$app->forms->modelz->post();

Az::$app->forms->active->enableLabel = true;
Az::$app->forms->active->labelSpan = 4;
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
Az::$app->forms->zPjax->end();

?>
<script>
    $(document).on('change', 'form', function () {
        $('form').submit();
    });
</script>

