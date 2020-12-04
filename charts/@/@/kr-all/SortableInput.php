<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 08.06.2017 13:15
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 */


use kartik\sortinput\SortableInput;
echo SortableInput::widget([
	'model' => $form,
	'attribute' => 'sort_list',
	'hideInput' => false,
	'delimiter' => '~',
	'items' => [
		1 => ['content' => 'Item # 1'],
		2 => ['content' => 'Item # 2'],
		3 => ['content' => 'Item # 3'],
		4 => ['content' => 'Item # 4', 'disabled'=>true],
	]
]);
