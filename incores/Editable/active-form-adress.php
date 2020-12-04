<?php


use kartik\editable\Editable;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Form;
use zetsoft\former\shop\SizeForm;
use zetsoft\models\place\PlaceAdress;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZKFormWidget;

/*$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);*/


$app = new ALLApp();

$column = new Form();
$column->dbType = dbTypeInteger;

$app->columns['id'] = $column;

$column = new Form();
$column->dbType = dbTypeJsonb;

$app->columns['formData'] = $column;
$model = Az::$app->forms->former->model($app);
$model->id = 1;




echo Editable::widget([
    'model' => $model,
    'asPopover' => true,
    'attribute' => 'formData',
    'type' => 'primary',
    'size' => 'lg',
    'formOptions' => [
        'method' => 'post',
        'action' => [
            'editable',
            'modelClassName' => 'CoreInput',
            'id' => $model->id,
        ],
    ],
    'inputType' => Editable::INPUT_WIDGET,
    'widgetClass' => ZFormWidget::class,
    'options' => [
        'config' => [
            'formClass' => SizeForm::class
        ]
    ]
]);





