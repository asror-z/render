<?php


use rmrevin\yii\fontawesome\FA;
use yii\widgets\Pjax;
use zetsoft\former\shop\SizeForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZInputUniverseWidget;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZTextareaWidget;
use zetsoft\widgets\market\ZInputNumberWidget;
use zetsoft\widgets\notifier\ZModalWidgetD;
use zetsoft\widgets\notifier\ZModalWidgetJavohir;
use zetsoft\widgets\notifier\ZModalWidgetRavshan;


/** @var ZView $this */
$model = new CoreInput();

ZModalWidgetD::begin();

echo ZFormWidget::widget([
    'model' => $model,
    'attribute' => 'jsonb_1',
    'config' => [
        'formClass' => SizeForm::class,
        'botBtn' => true
    ]
]);
ZModalWidgetD::end();
