<?php

use zetsoft\widgets\former\ZKTabularFormWidget;
use kartik\builder\Form;


$formModel = new \zetsoft\models\vade\Computer();
$dataProvider = $formModel->search(\Yii::$app->request->queryParams);



echo ZKTabularFormWidget::widget([
    'dataProvider'=>$dataProvider,
    'attributes'=>[
        'name' => [
            'type' => Form::INPUT_WIDGET,
            'widgetClass' => 'zetsoft\widgets\inputes\ZKTimePickerWidget',
        ],
    ],
]);
