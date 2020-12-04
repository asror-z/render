<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;

/** @var ZView $this */
$model = $this->modelGet(CoreInput::class, 1);

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);


// end
$data = [
    'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado',
    'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
    'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
    'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
    'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
    'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
    'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
    'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
    'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];

$model->configs->nameOn = [
        'zcheckboxlistwidget' ,
        'zcheckradiolistwidget',
        'zckeditorwidget',
        'zckeditorjswidget',
        'zclockpickerwidget' ,
        'zcmultiselectwidget' ,
        'zfileinputwidget'     ,
        'zfontawesomeiconpickerwidget',
        'jsonb_4' ,
        'zhcheckboxwidget' ,
        'zhdropdownlistwidget' ,
        'jsonb_6',
        'zhhiddeninputwidget' ,
        'zhinputgroupwidget' ,
        'zhpasswordinputwidget',
        'string_3',
        'string_4',
        'ziconpickerwidget'
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,

   
]);

$this->activeEnd();

