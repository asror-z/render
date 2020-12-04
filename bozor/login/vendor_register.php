<?php

use yii\authclient\widgets\AuthChoice as AuthChoiceAlias;
use yii\bootstrap4\Html;

use zetsoft\former\auth\RegisterForm;
use zetsoft\former\auth\RegisterForm;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;


/** @var ZView $this */

$action->title = Azl . 'Регистрация в интранет системе EYUF';

$model = new RegisterForm();

$action->icon =false;
$action->type = WebItem::type['html'];

$model->configs->nameOn = [
    'name',
    'email',
    'role'
];

/** @var User $user */

if ($this->formModel($model) === true) {
    $model->role = 'market';
    Az::$app->cores->auth->register($model);
//    Az::$app->cores->auth->defaultRole($model, 'market');
    $this->urlRedirect(['/admin/core-brand/index']);
//    Az::$app->cores->auth->verify($model);

    /** @var EyufScholar $scholar */

//    if (Az::$app->App->eyuf->main->scholarSave($model)) {
//        $this->urlRedirect(['/logics/scholar/add-info']);
//    } else
//        return $this->alertDanger(Az::l('Проверка регистрации'), $model->attributes);


}

?>



<div class="row justify-content-center">
    <div class="col-md-12 p-4 " >

        <?php

        $form = $this->activeBegin();

        ?>
        <div class="login-logo">
            <a href="/" target="_blank">
                Bozorboy
            </a>
        </div>
        <?
        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ],
        ]);
        ?>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-10 d-flex justify-content-center">
                <?php
                echo ZHTML::submitButton(Az::l('Submit'),
                    [
                        'class' => 'btn btn-success'
                    ]);
                ?>
            </div>

        </div>




        <?php
        $this->activeEnd();

        ?>

    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Marck+Script&display=swap');
    @font-face {
        font-family: 'Marck Script',cursive;
        font-style: normal;
    }
    .login-logo a{
        font-family: 'Marck Script',cursive;
        font-size: 50px;
        color: #10b410;
    }
</style>
