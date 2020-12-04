<?php

echo \zetsoft\widgets\market2\ZNavbarWidget::widget([
    'config' => [
        "languages" => [
            ['label'=>'brazilya', 'rasm'=>'/render/market2/ZNavbarWidget/asset/assets/img/fl-bra.png', 'active'=>false],
            ['label'=>'germaniya', 'rasm'=>'/render/market2/ZNavbarWidget/asset/assets/img/fl-ger.png', 'active'=>true],
            ['label'=>'english', 'rasm'=>'/render/market2/ZNavbarWidget/asset/assets/img/fl-eng.png', 'active'=>false],
        ]
    ]
]);


echo \zetsoft\widgets\market2\ZWishCardWidget::widget([]);
echo \zetsoft\widgets\market2\ZMegaMenuWidget::widget([]);
echo \zetsoft\widgets\market2\ZMenuWidget::widget([]);
echo \zetsoft\widgets\market2\ZCarouselWidget::widget([
    'config'=>[

    ]
]);
echo \zetsoft\widgets\market2\ZHotOfferWidget::widget([]);
echo \zetsoft\widgets\market2\ZPlaceAnOrderWidget::widget([]);
echo \zetsoft\widgets\market2\ZOrderSummaryWidget::widget([]);
echo \zetsoft\widgets\market2\ZProductBoxWidget::widget([]);
echo \zetsoft\widgets\market2\ZServiceDeliveryWidget::widget([]);
echo \zetsoft\widgets\market2\ZShoppingCartWidget::widget([]);
echo \zetsoft\widgets\market2\ZSingleProductWidget::widget([]);
echo \zetsoft\widgets\market2\ZCategoryWidget::widget([]);
echo \zetsoft\widgets\market2\ZXeContactsWidget::widget([]);
echo \zetsoft\widgets\market2\ZXeMartProductReviewWidget::widget([]);


//echo ZMCardBtnWidget::widget([]);  __need to fix

