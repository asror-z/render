<?php

use zetsoft\dbitem\shop\PropertyItem;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;
use zetsoft\former\ALL\AzimForm;
use zetsoft\former\shop\FilterForm;
use zetsoft\system\actives\ZAjaxForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHCheckboxButtonGroupWidget;
use zetsoft\widgets\inputes\ZKRangeWidget;
use zetsoft\widgets\market\ZCategoryWidget;
use zetsoft\widgets\market\ZHotOfferWidget;
use zetsoft\widgets\market\ZProductBoxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidget2;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\widgets\navigat\ZSmartTabWidget;

/*
 * Template
 * /render/market/XeMart%20-%20Ecommerce%20Template/
 * */
/** @var ZView $this */
$this->title = Az::l('otzivi');
//Az::$app->controller->layout = 'bozorMain';
echo \zetsoft\widgets\navigat\ZBreadCrumbWidget::widget([])

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                echo \zetsoft\widgets\market\ZMProductBlockWidget::widget([
                    'config' =>[
                    ]
                ]);
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Opisaniye</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Otzivi</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <?php
                        echo \zetsoft\widgets\market\ZAboutProductWidget::widget([
                            'config' =>[
                            ]
                        ]);
                        ?>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-8">
                                <?php
                                echo \zetsoft\widgets\market\ZMCommentWidget::widget([
                                    'config' =>[
                                    ]
                                ]);
                                ?>
                            </div>
                            <div class="col-md-4">
                                <?
                                echo \zetsoft\widgets\market\ZReytingWidget::widget([
                                    'config' =>[
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

