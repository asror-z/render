<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use yii\data\Sort;
use zetsoft\dbitem\core\WebItem;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZInfinityJaxongirWidget;
use zetsoft\widgets\ajaxify\ZInfinityScrollAjaxWidget;
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

$this->pjaxBegin();
?>

<div class="container-fluid">



  <?php
    echo ZInfinityScrollAjaxWidget::widget([
        'config' => [
            'url' => '/blocks/infinite/infinite.aspx',
            'requireUrl'=>'render/former/ZListViewWidget/demo/vertical_horizontal.php',
            'limitPost'=>5,
            'args' => 'null|'
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
