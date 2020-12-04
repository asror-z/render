<?php

use yii\caching\TagDependency;
use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\data\TabItem;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\cards\ZAzCardWidget;

use zetsoft\widgets\former\ZAccardionWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZListViewWidget;
use zetsoft\widgets\incores\ZFaqAccordionWidget;
use zetsoft\widgets\market\ZFooterAllWidget;
use zetsoft\widgets\market\ZMenuWidgetAbdulloh;
use zetsoft\widgets\market\ZMSwiperDbWidget;
use zetsoft\widgets\market\ZMSwiperWidget;
use zetsoft\widgets\menus\ZSidebarWidget;
use zetsoft\widgets\navigat\ZAAccordionWidget;
use zetsoft\widgets\navigat\ZAccLayWidget;
use zetsoft\widgets\navigat\ZAccLayWidget3;
use zetsoft\widgets\navigat\ZAccLayWidgetNew;
use zetsoft\widgets\navigat\ZAccLayWidgetTest;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\navigat\ZLiloAccordionWidget;
use zetsoft\widgets\navigat\ZLiloAccordionWidgetM;
//use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\themes\ZTabWidget;


use zetsoft\system\helpers\ZUrl;

/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'History';
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

$active = require Root . '/webhtm/eyuf/bozor/product/productActive.php';
$complite = require Root . '/webhtm/eyuf/cores/auth/login.php';

$items = [
    Az::l('Active Orders') => $active,
    Az::l('Complited Orderes') => $complite,
];

$content = [];
foreach ($items as $key => $value) {
    $tabItem = new TabItem();
    $tabItem->label = $key;
    
    $tabItem->content = $value;
    $content[] = $tabItem;
}
// vdd($content);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <?php

    require Root . '/block/metas/' . App . '/main.php';
    require Root . '/block/assets/' . App . '/main.php';

echo ZSidebarWidget::widget([]);

    $this->head();

    ?>

</head>
<body class="<?= ZWidget::skin['white-skin'] ?>">

<?php

$this->beginBody();
?>
   
           <?php
           $model = new ProductItemForm();
           $data = Az::$app->market->product->getProductItemForm();

           echo ZListViewWidget::widget([
               'model' => $model,
              
               'data' => $data,
               'config' => [
                   'itemView' => function ($model, $key, $index, $widget) {
                        
                        return $model->name;
                   },
               ]
           ]);

           echo ZFooterAllWidget::widget();
?>
<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
