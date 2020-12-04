<?php

use yii\widgets\Pjax;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopProduct;
use zetsoft\models\user\User;
use zetsoft\service\forms\Active;
use zetsoft\service\forms\Ajaxer;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZInfinityScrollAjaxWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZListViewWidget;
use zetsoft\widgets\inputes\ZKRangeWidget;
use zetsoft\widgets\menus\MenuItemWidget;
use zetsoft\widgets\menus\ZMetisMenuWidget;
use zetsoft\widgets\market\ZMenuWidget;
use zetsoft\widgets\menus\ZSidebarWidget;
use zetsoft\widgets\navigat\ZBreadcrumbsWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZReadMoreWidget;

/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Категория';
$action->icon = 'fa fa-area-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;


$id = $this->httpGet('id');


$this->paramSet(paramAction, $action);

$this->title();

$this->toolbar();


/** @var ZView $this */
$this->beginPage();

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <?php

    require Root . '/block/metas/' . App . '/main.php';
    require Root . '/block/assets/' . App . '/main.php';


    $this->head();

    ?>

</head>
<body class="<?= ZWidget::skin['white-skin'] ?> borderzz">
<?php

$this->beginBody();

require Root . '/blocks/header/' . App . '/main.php';
require Root . '/blocks/navbar/main.php';
require Root . '/render/menus/ZSidebarWidget/ready/main.php';


?>

<?
    echo $this->require( '/render/navigat/ZBackToTopWidget/cleanBehruz.php' );
?>







<div class="container-fluid bg-white">

    <div class="row py-3">
                 <?
                    echo $this->require( '/render/navigat/ZCategoryNavigateWidget/ready/main_Axror.php',[
                        'id'=>$id
                    ]);

                 ?>
    </div>

</div>







<?php $this->endBody() ?>
<?=
$this->require( '/blocks/SingleProduct/footer.php');
?>

<script>
    $(document).ready(function () {
      $('.sticky-top').removeClass('sticky-top');
      $('#categoryContainer').addClass('sticky-top');
    });

    $(".link1").on('click', function () {
        $("html, body").animate({scrollTop: 0}, 700);
    });
</script>
</body>
</html>

<?php
$this->endPage()
?>
