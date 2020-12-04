<?php

use rmrevin\yii\fontawesome\FA;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\ajaxify\ZInfinityScrollAjaxWidget;
use zetsoft\widgets\cards\ZCartViewWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
?>
<!-- cart icon -->
<br><br><br>

<?php
$pjax = new ZPjax();
$pjax->class = 'd-flex';
$this->pjaxBegin($pjax);


echo ZButtonWidget::widget([
    'config' => [
        'url' => '',
        'hasIcon' => true,
        'btnType' => ZButtonWidget::btnType['link'],
        'btnStyle' => ZButtonWidget::btnStyle['none'],
        'btnRounded' => false,
        'text' => 'hiddne',
        'pjax' => true,
        'hidden' => true,
        'title' => 'Обновление',
        'ttSize' => ZButtonWidget::ttSize['small'],
        'ttSide' => ZButtonWidget::ttSide['bottom'],
        'btn' => false,
        'class' => 'h-100 p-0 noHover',
        'iconColor' => 'white',
        'icon' => 'fp-13 fa fa-' . FA::_SYNC,
    ],
    'id' => 'refreshMessage',
]);


echo date('s');

/** @var ZView $this */
$cart = Az::$app->cores->session->get('cart');

$amount = 0;
if (is_array($cart))
    $amount = count($cart);

?>

<!-- wish icon -->
<div>
    <?php

    $wishList = Az::$app->cores->session->get('wishList');

    $wishAmount = 0;
    if (is_array($wishList))
        $wishAmount = count($wishList);

    echo ZCartViewWidget::widget([
        'id' => 'wish_list',
        'config' => [
            'url' => '/shop/user/wish/index.aspx',
            'icon' => 'far fa-heart grey-text',
            'text' => '',
            'hint' => 'Избранное',
            'class' => 'ZWishIcon',
            'amount' => $wishAmount
        ]
    ]);
    
    ?>
</div>

<div>
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
            'amount' => $compareAmount]]);
    ?>
</div>


<div>
    <?php

    $viewList = Az::$app->cores->session->get('viewed');
    $viewAmount = 0;

    ?>
</div>
<?php $this->pjaxEnd(); ?>
