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

use rmrevin\yii\fontawesome\FA;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\actions\ZEasyViewWidget;
use zetsoft\widgets\former\ZTopSearchWidget;
use zetsoft\widgets\iconers\ZFlagiconWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\cards\ZCartViewWidget;
use zetsoft\widgets\market\ZMenuWidget;
use zetsoft\widgets\market\ZMenuWidgetAbdulloh;
use zetsoft\widgets\market\ZMSearchWidget;

//use zetsoft\widgets\market\ZSearchNavbarWidget;
use zetsoft\widgets\former\ZExpandableSearchWidgetJ;
use zetsoft\widgets\market\ZSVGWidget;
use zetsoft\widgets\menus\ZSidebarWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZModalNewWidget;
use zetsoft\widgets\themes\ZCarolinaWidget;
use zetsoft\widgets\themes\ZFriendRequestsWidget;
use zetsoft\widgets\themes\ZMessageWidget;
use zetsoft\widgets\themes\ZNotifyWidget;
use zetsoft\widgets\themes\ZSignUpWidget;
use zetsoft\widgets\themes\ZSignUpWidget2;

/** @var ZView $this */
$baseUrl = $this->urlGetBase();

?>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar d-flex navbar-expand-lg ilon-mask">
            <div class="col-md-3 col-sm-4 p-2 text-center">
                <div class="d-inline-flex logo-main">
                    <a class="logos" href="<?=$baseUrl?>">
                        <?
                        echo ZSVGWidget::widget([
                            'config' => [
                                'type' => ZSVGWidget::type['MarketPlace'],
                            ]
                        ])
                        ?>
                    </a>
                </div>

                <div class="sticky-menus d-none">
                    <?
                    echo ZMenuWidgetAbdulloh::widget([
                        'config' => [
                            'open' => false,
                            'mode' => 'shop'
                        ],
                    ]);
                    ?>
                </div>

                <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>-->
            </div>



            <div class="col-3 p-2 d-none d-lg-block">
                <div class=" navbar-collapse " id="basicExampleNav">
                  
                </div>
            </div>
            <div class="col-md-6 col-sm-8">

                        <ul class="navbar-nav float-right">
                            <li class="nav-item d-flex justify-content-end">
               
                                <div class="dropdown">
                                

                                </div>

                                <div class="d-flex align-items-center mt-2 mr-2 viewWidgetClass">
                                    <div class="pr-3">
                                        <?php

                                        $cart = Az::$app->cores->session->get('cart');

                                        $amount = 0;
                                        if (is_array($cart))
                                            foreach ($cart as $item)
                                                $amount += $item['amount'];

                                        echo ZCartViewWidget::widget([
                                            'id' => 'cart_total_amount',
                                            'config' => [
                                                'url' => '/shop/user/basket.aspx',
                                                'text' => '',
                                                'class' => 'ZCartIcon wishCount',
                                                'amount' => $amount
                                            ]
                                        ]);
                                        ?>
                                    </div>
                                    <!-- wish list button -->
                                    <div class="pr-3">
                                        <?php

                                        $wishList = Az::$app->cores->session->get('wishList');
                                        $wishAmount = 0;

                                        if (is_array($wishList))
                                            $wishAmount = count($wishList);

                                        echo ZCartViewWidget::widget([
                                            'id' => 'wish_list',
                                            'config' => [
                                                'url' => '/customer/wish/index.aspx',
                                                'icon' => 'far fa-heart grey-text',
                                                'text' => '',
                                                'hint' => 'Избранное',
                                                'class' => 'ZWishIcon ',
                                                'amount' => $wishAmount
                                            ]
                                        ]);
                                        ?>
                                    </div>

                                    <div class="pr-3">
                                        <?php

                                        $compareList = Az::$app->cores->session->get('compare');
                                        $compareAmount = 0;

                                        if (is_array($compareList))
                                            $compareAmount = count($compareList);

                                        echo ZCartViewWidget::widget([
                                            'id' => 'compare_list',
                                            'config' => [
                                                'url' => '/shop/user/compare/index.aspx',
                                                'icon' => 'fa fa-chart-bar fa-align-center grey-text',
                                                'text' => '',
                                                'hint' => 'Сравнить',
                                                'class' => 'ZCompareIcon',
                                                'amount' => $compareAmount
                                            ]
                                        ]);
                                        ?>
                                    </div>

                                    <div class="pr-3">
                                        <?php

                                        $viewList = Az::$app->cores->session->get('viewed');
                                        $viewAmount = 0;

                                        if (is_array($viewList))
                                            $viewAmount = count($viewList);

                                        echo ZCartViewWidget::widget([

                                            'config' => [
                                                'url' => '/customer/viewed/index.aspx',
                                                'icon' => 'fas fa-history grey-text',
                                                'text' => '',
                                                'hint' => 'Просмотренные',
                                                'class' => 'ZViewedIcon',
                                                'amount' => $viewAmount
                                            ]
                                        ]);
                                        ?>
                                    </div>

                                </div>

                                <div class="RegisterBlockCarolinaRegisterBtn pr-4">

                                    <?
                                    if ($this->userIsGuest())
                                        echo ZButtonWidget::widget([
                                            'config' => [
                                                'text' => Az::l('Вход | Регистрация'),
                                                'btnRounded' => true,
                                                'btn' => true,
                                                'btnStyle' => ZButtonWidget::btnStyle['btn-outline-success'],
                                                'btnType' => ZButtonWidget::btnType['link'],
                                                'url' => '/shop/user/user-auth/login-register.aspx',
                                                'hasIcon' => false,
                                                'class' => 'z-depth-1 rounded text-muted',
                                            ]
                                        ]);
                                    else
                                        echo ZButtonWidget::widget([
                                            'config' => [
                                                'text' => Az::l('Выход'),
                                                'icon' => 'fas fa-sign-in-alt',
                                                'btnRounded' => true,
                                                'btn' => true,
                                                'btnStyle' => ZButtonWidget::btnStyle['btn-outline-danger'],
                                                'btnType' => ZButtonWidget::btnType['link'],
                                                'url' => '/cores/auth/logout.aspx',
                                                'hasIcon' => true,
                                                'class' => 'z-depth-1 rounded',
                                            ]
                                        ]);
                                    ?>

                                </div>
                            </li>
                        </ul>
                  

            </div>

        </nav>
    </div>
</div>

