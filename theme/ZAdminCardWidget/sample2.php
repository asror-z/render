<?php

use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;

use yii\authclient\widgets\AuthChoice;
use yii\bootstrap\Modal;
use zetsoft\former\auth\LoginForm;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZAdminCardWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZColWidget;

?>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <script>
            $(document).ready(function(){
                //при нажатию на любую кнопку, имеющую класс .btn
                $(".card").click(function() {
                    //открыть модальное окно с id="myModal"
                    $("#myModal").modal('show');
                });
            });
        </script>
        <?php


        Modal::begin([
            'size'=>'large',
            'id' =>'myModal'
        ]);

        ?>

        <div class="row justify-content-center">
            <div class="col-md-12 p-4">
                <?php

                $this->title = "Вход в систему" . $boot->env('appTitle');


                /** @var ZView $this */
                //$model = $this->modelGet(Computer::class, 66);

                $model = new LoginForm();
                $form = $this->activeBegin();

                $this->formModel($model);

                $this->modelPost();

                ZCardWidget::begin([
                    'config' => [
                        'title' => 'Login'
                    ]
                ]);

                ?>
                <div class="login-logo">
                    <a href="/" target="_blank">
                        <img src="/zetimg/<?=App?>/logo.jpg" alt="ZCore.uz">
                    </a>
                </div>

                <?php


                echo ZFormWidget::widget([
                    'model' => $model,
                    'form' => $form,
                    'config' => [
                        'submitBtn' => false
                    ]
                ]);

                echo ZHTML::submitButton('Вход в систему', ['class' => 'btn btn-primary']);

                ?>
                <div class="social-auth-links text-center mb-4"><p>- или -</p>
                    <?php $authAuthChoice = AuthChoice::begin([
                        'baseAuthUrl' => ['core/auth']
                    ]); ?>
                    <div class="auth-choise">
                        <ul class="auth-clients">
                            <?php foreach ($authAuthChoice->getClients() as $client): ?>
                                <li><?= $authAuthChoice->clientLink($client, '<i class="fab fa-' . $client->getName() . ' fa-2x "></i>', [
                                        'class' => $client->getName(),
                                    ]) ?></li>
                            <? endforeach; ?>
                        </ul>
                    </div>
                    <?php AuthChoice::end(); ?>
                </div>



                <?php
                ZCardWidget::end();
                $this->activeEnd();
                ?>
            </div>
        </div>

        <?php
        Modal::end();

        //    firstCard
        echo ZAdminCardWidget::widget([
            'config' => [
                'textPosition' => ZAdminCardWidget::textPosition['textLeft'],
                'isCardHeader' => false,
                'cardTitleBool' => true,
                'headerTitle' => 'headerTitle',
                'bodyTitle' => ' ',
                'bodyText' => 'Фонд "Эл-юрт умиди"',
                'footerColor' => ZColor::color['primary-color-dark'],
                'footerText' => '',
                'BadgeBgColor' => ZColor::color['stylish-color-dark'],
                'badge' => '',

                'horizontal_OR_vertical' => 'vertical',
                'cardWidth' => '100%',
                'color' => ZColor::color['primary-color'],
                'icon' => '/render/theme/ZAdminCardWidget/icons/logo.png',
            ]
        ]);
        ?>
    </div>
    <div class="col-lg-3 col-md-6">
        <?php
        //       secondCard
        echo ZAdminCardWidget::widget([
            'config' => [
                'textPosition' => ZAdminCardWidget::textPosition['textLeft'],
                'isCardHeader' => false,
                'cardTitleBool' => true,
                'headerTitle' => 'headerTitle',
                'bodyTitle' => '',
                'bodyText' => 'Министерство, учереждение или организация',
                'footerColor' => ZColor::color['primary-color-dark'],
                'footerText' => '',
                'BadgeBgColor' => ZColor::color['stylish-color-dark'],
                'badge' => '',

                'horizontal_OR_vertical' => 'vertical',
                'cardWidth' => '100%',
                'color' => ZColor::color['primary-color'],
                'icon' => '/render/theme/ZAdminCardWidget/icons/goverment_w.svg',
            ]
        ]);
        ?>
    </div>

    <div class="col-lg-3 col-md-6">
        <?php

        //        fourth Card
        echo ZAdminCardWidget::widget([
            'config' => [
                'textPosition' => ZAdminCardWidget::textPosition['textLeft'],
                'isCardHeader' => false,
                'cardTitleBool' => true,
                'headerTitle' => 'headerTitle',
                'bodyTitle' => '',
                'bodyText' => 'Стипендиат',
                'footerColor' => ZColor::color['primary-color-dark'],
                'footerText' => '',
                'BadgeBgColor' => ZColor::color['stylish-color-dark'],
                'badge' => '',

                'horizontal_OR_vertical' => 'vertical',
                'cardWidth' => '100%',
                'color' => ZColor::color['primary-color'],
                'icon' => '/render/theme/ZAdminCardWidget/icons/student_w.svg',
            ]
        ]);
        ?>
    </div>
    <div class="col-lg-3 col-md-6">
        <?php

        //      thirtdCard
        echo ZAdminCardWidget::widget([
            'config' => [
                'textPosition' => ZAdminCardWidget::textPosition['textLeft'],
                'isCardHeader' => false,
                'cardTitleBool' => true,
                'headerTitle' => 'headerTitle',
                'bodyTitle' => '',
                'bodyText' => 'ВУЗ или Научноиследо-вательское учреждение',
                'footerColor' => ZColor::color['primary-color-dark'],
                'footerText' => '',
                'BadgeBgColor' => ZColor::color['stylish-color-dark'],
                'badge' => '',

                'horizontal_OR_vertical' => 'vertical',
                'cardWidth' => '100%',
                'color' => ZColor::color['primary-color'],
                'icon' => '/render/theme/ZAdminCardWidget/icons/school_w.svg',
            ]
        ]);
        ?>
    </div>



<!--     adminCard new version-->
    <div class="col-lg-3 col-md-6">
        <?php

        //      thirtdCard
        echo ZAdminCardWidget::widget([
            'config' => [
                'textPosition' => ZAdminCardWidget::textPosition['textLeft'],
                'isCardHeader' => false,
                'cardTitleBool' => true,
                'headerTitle' => 'headerTitle',
                'bodyTitle' => '463',
                'bodyText' => 'Hujjat kelib tushdi',
                'footerColor' => ZColor::color['orange'],
                'footerText' => 'text',
                'BadgeBgColor' => ZColor::color['stylish-color-dark'],
                'badge' => '20',

                'horizontal_OR_vertical' => 'vertical',
                'cardWidth' => '100%',
                'color' => ZColor::color['rgba-green-light'],
                'icon' => '/render/theme/ZAdminCardWidget/icons/school_w.svg',
            ]
        ]);
        ?>
    </div>
</div>

