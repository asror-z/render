<?php

use yii\caching\TagDependency;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\cards\ZAzCardWidget;
use zetsoft\widgets\cards\ZCard_1Widget;
use zetsoft\widgets\market\ZFooterAllWidget;
use zetsoft\widgets\market\ZMenuWidgetAbdulloh;
use zetsoft\widgets\market\ZMSwiperDbWidget;
use zetsoft\widgets\market\ZMSwiperWidget;
use zetsoft\widgets\menus\ZSidebarWidget;
use function Spatie\SslCertificate\length;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Главная страница';
$action->icon = 'fa fa-area-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;

$action->cache = false;

$action->call = [
//    TagDependency::invalidate()
];
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

/** @var ZView $this */
$this->paramSet('widget', true);
$this->paramGet('widget');

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
<body class="<?= ZWidget::skin['white-skin'] ?>">

<?php

$this->beginBody();
?>

<div class="container-fluid mt-2">


    <div class="row mb-4">
        <?

        $items = Az::$app->market->product->allProducts();
        $slide_data = [];
        
        foreach ($items as $item) {
            $slide_data[] = $this->require( '/render/cards/ZVMarketWidget/ready/main.php', [
                'item' => $item,
                'col' => 12 . ' h-100'
            ]);

        }


        echo ZMSwiperWidget::widget([
            'data' => $slide_data,
            'config' => [
                'slideWidget' => true,
                'mousewheel' => false,
                'slidesPerView' => 2,
                'pagination.el' => '',
                'slidesMediaPerView640' => 5,
                'slidesMediaPerView500' => 3,
                'slidesMediaPerView1024' => 5,
                'slidesMediaPerView325' => 2,
                'nextEl' => '.swiper-button-next',
                'prevEl' => '.swiper-button-prev',
                'swip-nor' => 'pb-3'
            ]
        ]);


        ?>

    </div>

</div>


<!--Card-->

</div>


<?php
echo ZFooterAllWidget::widget();
?>
<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
