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

$get = $this->httpGet('ZDynamicModel');

//$this->fileJs('/render/ajaxify/ZInfinityScrollAjaxWidget/asset/main.js');

if (!isset($requireUrl) || $requireUrl === null)
    $requireUrl = '/render/cards/ZListViewWidget/ready/vertical_horizontal.php';

if (!isset($url) || $url === null)
    $url = 'infinity.aspx';

if (!isset($limit) || $limit === null)
    $limit = 4;


/* true - to get products from ProductItem instead services */
if (!isset($test) || $test === null)
    $test = true;

/* true - to switch off 'Add cart' button in card */
if (!isset($isCommon) || $isCommon === null)
    $isCommon = true;


/* true - to switch on tabs between {horizontal/vertical} cards */
if (!isset($withTab) || $withTab === null)
    $withTab = true;

if (!isset($type) || $type === null)
    $type = 'type';

?>
<?
if ($withTab) {
    echo '<div class="row"><div class="col-md-3">';
    echo $this->require( '/render/cards/ZListViewWidget/ready/tab_product.php');
    echo '</div></div>';
}
?>
<div class="row">
    <?php

    use zetsoft\dbitem\shop\ProductItem;

    /** @var ZView $this */
    //$model = Az::$app->market->product->allProducts();

    echo ZInfinityScrollAjaxWidget::widget([
        'config' => [
            'url' => $url,
            'requireUrl' => $requireUrl,
            'limitPost' => $limit,
            'cols' => 2,
            'method' => 'allProducts',
            'args' => $category_id . '|' . null . '|' . 1 . '|' . 10,
            'isCommon' => $isCommon,
            'test' => $test,
            'type'=>$type
        ]
    ]);
    ?>
</div>
