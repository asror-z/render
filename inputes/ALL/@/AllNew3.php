<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;

/** @var ZView $this */
$model = $this->modelGet(CoreInput::class, 1);

$items = $this->modelData();
$form = $this->activeBegin();


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
	'jsonb_3',
	'zktypeaheadwidget',
	'string_4',
	'string_3',
	'zkswitchinputwidget',
	'zktimepickerwidget',
	'zktouchspinwidget',
	//	'ZMultiWidgetNew',
	'zperiodpickerwidget',
	'string_1',
	'string_3',

	'zinputwidget',
	'string_4',
	'zfileinputwidget',
	'jsonb_4',
	'zhradiobuttongroupwidget',
	'zcheckradiolistwidget',

	'zckeditorwidget',

	'string_2',

	'zhpasswordinputwidget',
	'zinputmaskwidget',
	'zinputwidget',
//	    'zhcheckboxwidget',
//	'zcheckboxlistwidget',
	'string_4',
	'jsonb_3',
	'string_5',
	'string_1',
	'string_2',
	'zkselect2widget',

	'zhinputwidget',
	'zselectcountrieswidget',
	//'ziconpickerwidget',
	'string_3',
	'string_4',
	//'ztinycloudwidget',
	//'ztextareawidget',
	'int_1',
	//	'ztitatogglewidget',
];
$this->modelSave($model);
echo ZFormWidget::widget([
	'model' => $model,
	'form' => $form,


]);

$this->activeEnd();

