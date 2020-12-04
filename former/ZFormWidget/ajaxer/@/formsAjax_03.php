<?php

use kartik\builder\Form;
use yii\web\JsExpression;
use yii\web\Response;
use yii\widgets\Pjax;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\core\CoreInput;
use zetsoft\service\forms\Ajaxer;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\assets\ZAjaxForm;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;

/** @var ZView $this */
$model = new TestLaptopForm();

Az::$app->forms->modelz->form($model);

Pjax::begin(['id' => 'employee',]);

$ajax = new Ajaxer();
$ajax->id = 'asd';

$form = $this->ajaxBegin($ajax);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);

$this->ajaxEnd();

?>

<script>

    $.pjax.reload({container:'#employee'});

</script>
