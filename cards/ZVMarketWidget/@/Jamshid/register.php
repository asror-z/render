<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\former\auth\RegisterForm;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;



$action->title = Azl . 'Регистрация в интранет системе EYUF';



$model = new User();
$model->configs->nameOn = [

    'password',
];
if ($this->modelForm($model) === true) {
    if (Az::$app->cores->auth->register($model)) {
        $this->urlRedirect($this->urlGetBase());
    }
//	$mail_check = User::find()
//		->where([
//			'email' => $model->email,
//		])
//		->limit(1)
//		->one();
//
//	if ($mail_check !== null)
//		$this->urlRedirect(['/cores/auth/user-check']);
//	else {
//			$user = new User();
////			$user->phone = $model->phone;
////			$user->name = $model->name;
//			$user->email = $model->email;
//			$user->password = $model->password;
//
//			$user->configs->rulesAll = [
//				[validatorSafe]
//			];
//
//			if ($user->save()) {
//				Az::$app->cores->auth->login($user);
//				Az::$app->cores->auth->defaultRole($user, 'user');
////				Az::$app->cores->auth->verify($user);
//
////				$this->urlRedirect(['/logics/scholar/add-info']);
//				$this->urlRedirect($this->urlGetBase());
//		} else {
//			return $this->alertWarning(Az::l('Стипендиант не найден'), $this->userIdentity()->id);
//		}

//	}
}


?>


<div class="row justify-content-center">
    <div class="col-md-12 p-4 ">
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
                <img src="/imagez/<?= App ?>/eyu-1.jpg" alt="ZCore.uz">
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
                echo ZHTML::submitButton(Az::l('User'),
                    [
                        'class' => 'btn btn-primary'
                    ]);
                echo ZHTML::submitButton(Az::l('Vendor'),
                    [
                        'class' => 'btn btn-primary'
                    ]);
                ?>
            </div>

        </div>

        <?php

        $this->activeEnd();

        /*ZCardWidget::end();*/
        ?>
    </div>
</div>

