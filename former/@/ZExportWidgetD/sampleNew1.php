<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\user\User;
use zetsoft\widgets\former\ZExportWidgetDNew;

//WORKING 

$model = new User();

echo ZExportWidgetDNew::widget([
    'model'=>$model,
]);
