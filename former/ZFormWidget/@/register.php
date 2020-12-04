<?php

use zetsoft\former\auth\AuthRegisterForm;
use zetsoft\system\helpers\ZHTML;
use zetsoft\widgets\dialogs\ZSweetAlert2WidgetOLD;
use yii\helpers\Url;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZKCheckboxXWidget;
use zetsoft\widgets\inputes\ZKPasswordInputWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use yii\authclient\widgets\AuthChoice;
use yii\bootstrap4\Html;
use yii\web\JsExpression;

/**
 *  @var ZView $this
 */
?>






<div class="row justify-content-center">
    <div class="col-md-6 p-4" >
        <?php

        $this->title = "Регистрация в системе " . $boot->env('appTitle');


        ZCardWidget::begin([
            'config' => [
                'title' => $this->title,
                'isHeader' => false,
                'cardTitleBool' => false,
                'footerBool' => false,
                'cardBottomBtnBool' => false,
                'mytheme' => 'reg-rad0',

            ]
        ]);

        // @TODO: add class to body div -> "login-card-body"

        $form = $this->activeBegin();



        ?>
        <div class="login-logo ">
            <a href="/" target="_blank">
                <img src="/zetimg/<?=App?>/logo.jpg" alt="ZCore.uz">
            </a>
        </div>

        <?php
        $model = new AuthRegisterForm();
        Az::$app->forms->modelz->form($model);


        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
                'submitBtn' => false
            ],
            'rows' => [

                [
                    'attributes' => [
                        'name' => [
                            'type' => Form::INPUT_WIDGET,
                            'widgetClass' => ZHInputWidget::class,

                            'options' => [
                                'config' => [
                                    'icon' => 'fa-user'
                                ]
                            ],
                            'value' => $model->name
                        ],
                    ],
                ],
                [
                    'attributes' => [
                        'title' => [
                            'type' => Form::INPUT_WIDGET,
                            'widgetClass' => ZHInputWidget::class,
                            'options' => [
                                'config' => [
                                    'icon' => 'fa-book-reader'
                                ]
                            ],
                        ],
                    ],
                ],
                [
                    'attributes' => [
                        'email' => [
                            'type' => Form::INPUT_WIDGET,
                            'widgetClass' => ZHInputWidget::class,
                            'options' => [
                            ],
                        ],
                    ],
                ],
                [
                    'attributes' => [
                        'password' => [
                            'type' => Form::INPUT_WIDGET,
                            'widgetClass' => ZHPasswordInputWidget::class,
                        ],
                    ],
                ],


            ],
        ]);

        echo ZHTML::submitButton('Register', ['class' => 'btn btn-primary']);

        //        echo ZButtonWidget::widget([
        //            'config' => [
        //                'url' => '#',
        //                'name' => 'Register',
        //                'type' => ZButtonWidget::layout['rounded'],
        //                'color' => ZButtonWidget::btnStyle['btn-outline-primary'],
        //
        //                'btnSize' => ZButtonWidget::btnSize['btn-lg']
        //            ]
        //        ]);

        ?>

        <div class="social-auth-links text-center mb-3"><p>- или -</p>
            <?php $authAuthChoice = AuthChoice::begin([
                'baseAuthUrl' => ['core/auth']
            ]); ?>

            <ul class="auth-clients">
                <?php foreach ($authAuthChoice->getClients() as $client): ?>
                    <li><?= $authAuthChoice->clientLink($client, '<i class="fab fa-'.$client->getName().' fa-2x  text-primary"></i>', [
                            'class' => $client->getName(),
                        ]) ?></li>
                <?php endforeach; ?>
            </ul>

            <?php AuthChoice::end(); ?>
        </div>

        <p class="mb-1">
            <?=Html::a('Забыли пароль?', '#')?>
        </p>
        <p class="mb-0">
            <?=Html::a('Уже есть аккаунт', ['/core/core/login'])?>
        </p>

        <?php
        $form = $this->activeEnd();

        ZCardWidget::end();
        ?>

    </div>
</div>



