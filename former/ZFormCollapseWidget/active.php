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

use zetsoft\models\user\UserBlocked;use zetsoft\models\core\CoreInput;
use zetsoft\models\user\User;

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormCollapseWidget;
use zetsoft\widgets\former\ZFormWidget;use zetsoft\widgets\former\ZFormWizardWidget;


/** @var ZView $this */

$laptop = new CoreInput();


$this->title = 'ZFormWizardWidget';

echo ZFormCollapseWidget::widget([
    'model' => new UserBlocked()
]);

