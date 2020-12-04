<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 08.06.2017 13:00
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 */


use kartik\datecontrol\DateControl;
use kartik\widgets\DatePicker;

echo DateControl::widget([
	'name'=>'kartik-date-3',
	'value'=>time(),
	'type'=>DateControl::FORMAT_DATE,
	'displayTimezone'=>'Pacific/Chatham',
	'saveTimezone'=>'UTC'
]);


echo $form->field($form, "date_1")->widget(DatePicker::classname(), [
	"options" => ["placeholder" => "Enter birth date ..."],
	"pluginOptions" => [
		"autoclose"=>true
	]
]);
