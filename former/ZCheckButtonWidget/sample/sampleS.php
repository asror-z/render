<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\former\shop\ProductItemForm;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZCheckSelectWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;


echo ZCheckSelectWidget::widget([
    'config'=>[
        'text'=>'text',
        'confirm'=>false
    ],

]);


