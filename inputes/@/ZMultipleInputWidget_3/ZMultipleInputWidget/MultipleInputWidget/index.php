<?php


use kartik\widgets\ActiveForm;
use zetsoft\widgets\inputes\ZMultiWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;

$form = new ActiveForm();
$model = new \zetsoft\models\libra\Author();

#region cloneButton
echo '<hr>';
echo '<hr>';

ZRowWidget::begin();
ZColWidget::begin([
    'width' => 6
]);

echo $form->field($model, 'emails')->widget(ZMultiWidget::className(), [

    'sRendererClass' => \unclead\multipleinput\renderers\ListRenderer::class,

])->label(false);


ZColWidget::end();
ZRowWidget::end();
echo '<hr>';
echo '<hr>';

#endregion
