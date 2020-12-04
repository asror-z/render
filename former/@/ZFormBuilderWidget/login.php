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


use kartik\builder\Form;
use kartik\form\ActiveForm;
use yii\web\Response;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\former\auth\LoginForm;
use zetsoft\former\auth\RegisterForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\core\CoreInput;
use zetsoft\models\libra\Country;
use zetsoft\models\vade\User;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;

$model = new LoginForm();

$this->modelForm($model);

echo ZFormBuildWidget::widget([
    'model' => $model,
]);

