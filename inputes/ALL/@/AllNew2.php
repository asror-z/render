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
    'jsonb_1',
    'jsonb_2',
    'jsonb_3',
    'jsonb_4',
    'string_1',
    //'zktypeaheadwidget',
    'string_4',
    'string_3',
    'zkswitchinputwidget',
    'zktimepickerwidget',
    'zktouchspinwidget',
    //'ZMultiWidgetNew',
    'zperiodpickerwidget',
    'string_1',
    'string_3',

    //Jahongir




    'zinputwidget',
    'string_4',
    'zfileinputwidget',
    'jsonb_4',
    'zhradiobuttongroupwidget',
    'zcheckradiolistwidget',
    'zhcheckboxwidget',
    'zckeditorwidget',
    'zcheckboxlistwidget',
    'string_2',

    //Azimjon
    'zhpasswordinputwidget',
    'zinputmaskwidget',
    'zinputwidget',
    'string_4',
    'jsonb_3',
    'string_5',
    'string_1',
    'string_2',
    'zkselect2widget',

    //Musoxon

    'zhinputwidget',
    'zselectcountrieswidget',
    'ziconpickerwidget',
    'string_3',
    'string_4',
    'ztextareawidget',
    'int_1',
    //'ztitatogglewidget',
    'zclockpickerwidget',
    'zselectizewidget',
 //   'ztinycloudwidget',


    //refactor qilish kere ishlidi lekin idealmas
   'zajqueryeditableselectwidget',
    'zcmultiselectwidget',
    /*  'zfilepondwidget', //upload qilish kere
     'zhdropdownlistwidget',
     'zhfileinputwidget',
     'zhinputgroupwidget',
     'zpicklistwidget',
     'zcheckboximagewidget',*/
    //'zckeditorjswidget',
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,

   
]);

$this->activeEnd();

