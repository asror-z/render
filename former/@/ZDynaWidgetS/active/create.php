<?php

use zetsoft\models\user\User;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Создание Пользователь';
$action->icon = 'fa fa-birthday-cake';

$id = $this->httpGet('id');
$model = new User();

if ($this->modelSave($model))
    $this->urlRedirect(['index', true]);

?>


<div class="row">
    <div class="col-md-12 col-12">

        <?
        echo ZFormWizardWidget::widget([
            'model' => $model,
        ]);
        ?>

    </div>
</div>
