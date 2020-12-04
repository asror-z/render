<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/14/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\core\CoreInput;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\test\TestOrder;
use zetsoft\models\user\User;

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZFormWidget;


/** @var ZView $this */


$this->title = 'Вход в систему ZAllApps';

$model = $this->modelGet(TestOrder::class, 3);

/** @var ZView $this */
echo ZDynaWidget::widget([
    'model' => $model,
]);
