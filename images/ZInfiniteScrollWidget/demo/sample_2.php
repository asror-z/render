<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\core\WebItem;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZInfinityJaxongirWidget;
use zetsoft\widgets\ajaxify\ZInfinityScrollAjaxWidget;
use zetsoft\widgets\ajaxify\ZInfinityScrollAjaxWidget_1;
use zetsoft\widgets\former\ZListViewWidget;
use zetsoft\widgets\menus\ZSidebarWidget;

/** @var ZView $this */
$action = new WebItem();

$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = false;
$action->cache = false;
$action->call = null;
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$action->type = WebItem::type['ajax'];

$this->paramSet(paramAction, $action);
$get = $this->httpGet('ZDynamicModel');
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
<body class="<?= ZWidget::skin['white-skin'] ?>" style="overflow-y: visible!important;">
<?php
$this->beginBody();

echo ZSidebarWidget::widget([]);

?>

<div class="container-fluid">
    <?php

    $this->pjaxBegin();

    use zetsoft\dbitem\shop\ProductItem;

    /** @var ZView $this */
    $model = Az::$app->market->product->allProducts();
     echo ZInfinityScrollAjaxWidget::widget([
        'config' => [
            'requireUrl'=>'/render/cards/ZVMarketWidget/ready/main.php',
            'limitPost'=>12,
            'items'=>$model,
            'type'=>'ajax',
            'url' => '/blocks/infinite/infinite_abl.aspx',
        ]
    ]);

    $this->pjaxEnd();

    ?>
</div>
<?php
$this->endBody()
?>
</body>
</html>
<?php $this->endPage() ?>
