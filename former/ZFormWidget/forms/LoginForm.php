<?php

use zetsoft\former\auth\LoginForm;
use zetsoft\models\user\UserCompany;
use zetsoft\models\App\eyuf\ScholarNew;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\models\App\eyuf\EyufInvoice;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Создание Расходы';
$action->icon = 'fa fa-rocket rss';

$model = new LoginForm();

if ($this->formModel($model) === true) {


    $company = new UserCompany();
    $company->name = $model->name;
    $company->title = $model->password;
    $company->save();

}

?>


<div class="row">
    <div class="col-md-12 col-12">

        <?

        $form = $this->activeBegin();

        ZCardWidget::begin([
            'config' => [
                'title' => $this->title,
                'type' => ZCardWidget::type['dynCard'],
            ]
        ]);

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
        ]);

        ZCardWidget::end();

        $this->activeEnd();

        ?>

    </div>
</div>
