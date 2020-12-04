<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */
use yii\bootstrap\Modal;
use zetsoft\models\user\User;
use zetsoft\models\user\UserCompany;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\core\CoreRole;
use zetsoft\models\App\eyuf\EyufCompatriot;
use zetsoft\models\App\eyuf\Program;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\charts\ZChartFormLayoutWidget;
use zetsoft\widgets\former\ZDynaArrayGridWidget;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\themes\ZAdminCardWidget;
//use zetsoft\widgets\themes\ZAdminCardWidget;

/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Статистика';


$model = $this->modelGet(User::class, 2);




?>




<div class="left_bottom mt-4">
    <div class="container">
        <div class="row">
            <?= ZChartFormLayoutWidget::widget([
                'model' => $model
            ]) ?>
        </div>
    </div>
</div>
