<?php


use kartik\builder\Form;
use kartik\editable\Editable;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKEditableWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo Editable::widget([
    'model' => $model,
    'attribute' => 'zkselect2widget',
    'type' => 'primary',
    'size'=> 'lg',
    'inputType' => Editable::INPUT_TEXTAREA,
]);

// An editable content using `displayValueConfig` to dynamically configure your displayed values
// and markup based on selected values.
echo '<label>Status</label><br>' .
    Editable::widget([
        'name'=>'status',
        'value' => 0,
        'asPopover' => false,
        
        'header' => 'Status',
        'inputType' => Editable::INPUT_DROPDOWN_LIST,
        'data' => [0 => 'pass', 1 => 'fail', 2 => 'waived', 3 => 'todo'],
        'options' => ['class'=>'form-control', 'prompt'=>'Select status...'],
        'displayValueConfig'=> [
            '0' => '<i class="fas fa-thumbs-up"></i> pass',
            '1' => '<i class="fas fa-thumbs-down"></i> fail',
            '2' => '<i class="fas fa-hourglass"></i> waived',
            '3' => '<i class="fas fa-flag"></i> todo',
        ],
    ]);

$this->activeEnd();

