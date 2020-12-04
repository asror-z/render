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

use zetsoft\models\shop\ShopOrder;
use zetsoft\models\user\UserBlocked;use zetsoft\models\core\CoreInput;
use zetsoft\models\user\User;

use zetsoft\models\ware\WareAccept;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormBuiltWidget;
use zetsoft\widgets\former\ZFormWidget;use zetsoft\widgets\former\ZFormWizardWidget;


/** @var ZView $this */

$laptop = new ShopOrder();


echo ZFormBuildWidget::widget([
    'model' => $laptop,
    'config' => [
        'blockType' => ZFormBuildWidget::blockType['card'],
        'stepType' => ZFormBuildWidget::stepType['card']
    ]
]);

