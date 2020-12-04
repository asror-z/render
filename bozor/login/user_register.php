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
    'role',
    'name'

];

/** @var User $user */

if ($this->formModel($model) === true) {
    ///Az::$app->cores->auth->defaultRole($model, 'consumer');
    $model->role ='consumer';
    Az::$app->cores->auth->register($model);
    $this->urlRedirect($this->urlGetBase());

//    Az::$app->cores->auth->verify($model);

    /** @var EyufScholar $scholar */

//    if (Az::$app->App->eyuf->main->scholarSave($model)) {
//        $this->urlRedirect(['/logics/scholar/add-info']);
//    } else
//        return $this->alertDanger(Az::l('Проверка регистрации'), $model->attributes);


}

?>



<div class="row justify-content-center">
    <div class="col-md-12 p-4">

        <?php

        /*ZCardWidget::begin([
            'config' => [
                'title' => $this->title,
                'isHeader' => false,
                'cardTitleBool' => false,
                'footerBool' => false,
                'cardBottomBtnBool' => false,
                'mytheme' => 'reg-rad0',

            ]
        ]);*/

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

        <div class="container align-center">
            <div class="d-flex">
               <div class="login-logo messenger d-flex" style="width: 250px">

                <a class="p-1" href="www.vk.com"> <img class="img-icon" src="https://cdn1.iconfinder.com/data/icons/social-media-icon-1/112/vk-512.png" alt=""> </a> &nbsp; &nbsp;
                <a class="p-1" href="www.vk.com"> <img class="img-icon" src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google_Chrome-512.png" alt=""> </a>  &nbsp; &nbsp;
                <a class="p-1" href="www.vk.com"> <img class="img-icon" src="https://cdn1.iconfinder.com/data/icons/social-media-icon-1/112/twitter-512.png" alt=""></a>  &nbsp; &nbsp;
                <a class="p-1" href="www.vk.com"> <img class="img-icon" src="https://cdn1.iconfinder.com/data/icons/social-media-icon-1/112/facebook-512.png" alt=""> </a>  &nbsp; &nbsp;
                <a class="p-1" href="www.vk.com"> <img class="img-icon" src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_instagram-512.png" alt=""> </a> &nbsp; &nbsp;
                <a class="p-1" href="www.vk.com"> <img class="img-icon" src="https://cdn0.iconfinder.com/data/icons/social-media-2092/100/social-37-512.png" alt=""> </a>  &nbsp; &nbsp;
                <a class="p-1" href="www.vk.com"> <img class="img-icon" src="https://cdn0.iconfinder.com/data/icons/business-icons-professional/32/mail_email_contact-512.png" alt=""> </a>
               </div>
            </div>
        </div>

        <!--        <div class="row">-->
        <!--            <div>-->
        <!--                --><?php
        //                //-----------------------------
        //                //My Work
        //                echo yii\authclient\widgets\AuthChoice::widget([
        //                    'baseAuthUrl' => ['cores/auth/register'],
        //                    'popupMode' => false,
        //                ]);
        //
        //
        //                //------------------------------
        //                ?>
        <!--            </div>-->
        <!--        </div>-->




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

    .login-logo .messenger img{

          width: 2px;



    }

</style>
