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


use yii\authclient\widgets\AuthChoice;
use yii\bootstrap4\Html;
use zetsoft\former\auth\LoginForm;
use zetsoft\models\user\User;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;

$action->title = Azl . 'Вход в систему';

$action->icon =false;
$action->type = WebItem::type['html'];


/** @var ZView $this */
$model = new LoginForm();

if ($this->formModel($model) === true) {

    if (Az::$app->cores->auth->login($model)) {

        $this->urlRedirect('/admin/core-product/index.aspx');

    }
}


?>

<div class="row justify-content-center">
    <div class="col-md-10 p-4">

        <?php $form = $this->activeBegin(); ?>

        <div class="login-logo">
            <a href="/" target="_blank">
                <?php
                echo Az::l('ВОЙДИТЕ')
                ?>
            </a>
        </div>

        <?php

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ]
        ]);

        ?>
        <div class="row justify-content-center">
            <div class="justify-content-center">
                <h1 class="text-center text-success"> Войти через </h1>
                <?
                echo zetsoft\widgets\navigat\ZButtonWidget::widget([
                    'id' => 'copy-stacktrace',
                    'config' => [
                        'hasIcon' => true,
                        'btnType' => ZButtonWidget::btnType['link'],
                        'btnRounded' => false,
                        'btnFloating' => true,
                        'icon' => 'fab fa-github',
                        //'title' => 'Перейти на главную',
                        'color' => ZColor::gradient['mean-fruit-gradient'],
                        'url' => '/cores/auth/oauth.aspx?service=github',
                        'blank' => false,
                        'target' => ZButtonWidget::target['_self'],
                        'iconColor' => '#ffffff',
                        'title' => 'github'
                    ],
                ]);
                echo zetsoft\widgets\navigat\ZButtonWidget::widget([
                    'id' => 'copy-stacktrace',
                    'config' => [
                        'hasIcon' => true,
                        'btnType' => ZButtonWidget::btnType['link'],
                        'btnRounded' => false,
                        'btnFloating' => true,
                        'icon' => 'fab fa-google-plus-g',
                        //'title' => 'Перейти на главную',
                        'color' => ZColor::gradient['aqua-gradient'],
                        'url' => '#',
                        'blank' => true,
                        'target' => ZButtonWidget::target['_self'],
                        'iconColor' => '#ffffff',
                        'title' => 'google'
                    ],
                ]);
                echo zetsoft\widgets\navigat\ZButtonWidget::widget([
                    'id' => 'copy-stacktrace',
                    'config' => [
                        'hasIcon' => true,
                        'btnType' => ZButtonWidget::btnType['link'],
                        'btnRounded' => false,
                        'btnFloating' => true,
                        'icon' => 'fab fa-yandex',
                        //'title' => 'Перейти на главную',
                        'color' => ZColor::gradient['winter-neva-gradient'],
                        'url' => '#',
                        'blank' => true,
                        'target' => ZButtonWidget::target['_self'],
                        'iconColor' => '#000',
                        'title' => 'yandex'
                    ],
                ]);
                echo zetsoft\widgets\navigat\ZButtonWidget::widget([
                    'id' => 'copy-stacktrace',
                    'config' => [
                        'hasIcon' => true,
                        'btnType' => ZButtonWidget::btnType['link'],
                        'btnRounded' => false,
                        'btnFloating' => true,
                        'icon' => 'fab fa-facebook-f',
                        //'title' => 'Перейти на главную',
                        'color' => ZColor::gradient['night-fade-gradient'],
                        'url' => '#',
                        'blank' => true,
                        'target' => ZButtonWidget::target['_self'],
                        'iconColor' => '#ffffff',
                        'title' => 'facebook'
                    ],
                ]);
                echo zetsoft\widgets\navigat\ZButtonWidget::widget([
                    'id' => 'copy-stacktrace',
                    'config' => [
                        'hasIcon' => true,
                        'btnType' => ZButtonWidget::btnType['link'],
                        'btnRounded' => false,
                        'btnFloating' => true,
                        'icon' => 'fab fa-instagram',
                        //'title' => 'Перейти на главную',
                        'color' => ZColor::gradient['peach-gradient'],
                        'url' => '#',
                        'blank' => true,
                        'target' => ZButtonWidget::target['_self'],
                        'iconColor' => '#ffffff',
                        'title' => 'instagram'
                    ],
                ]);
                ?>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-4">

            <div class="col-10 d-flex justify-content-center">
                <?php
                echo ZHTML::submitButton(Az::l('Вход в систему'), [
                    'class' => 'btn btn-success'
                ]);
                ?>
            </div>
        </div>
        <?php $this->activeEnd(); ?>
    </div>
</div>
