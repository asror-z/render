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
    <div class="row">
        <div class="col-md-3">

            <?php
            /** @var ZView $this */
            echo $this->require( '/render/cards/ZListViewWidget/ready/tab_product.php');
            ?>

        </div>
    </div>
    <?php

    use zetsoft\dbitem\shop\ProductItem;

    /** @var ZView $this */
    $model = Az::$app->market->product->allProducts();

  
    echo ZInfinityScrollAjaxWidget::widget([
        'config' => [
            'url' => '/market/main/infinite.aspx',
            'requireUrl' => '/render/cards/ZListViewWidget/demo/vertical_horizontal.php',
            'limitPost' => 3,
     
        ]
    ]);

    $this->pjaxEnd();

    ?>
</div>


<script>
    $(document).on('ready pjax:success', function () {
        let lS = window.localStorage;
        let zcol = $('.zcol');
        let zlist = $('.zlist');
        let items = $('.item');
        zlist.hide();

        function switchToCol() {
            zcol.hide();
            zlist.show();
            items.addClass('col-12');
            items.removeClass('col-3');
            $('#switch_to_list').addClass('text-success')
            $('#switch_to_list').removeClass('btn-success')
            $('#switch_to_col').removeClass('text-success');
            $('#switch_to_col').addClass('btn-success');
            history.pushState("/core/tester/asror/main.aspx?path=webhtm/eyuf/market/main/list-view1.php", "", "#list");
        }

        function switchToList() {
            zcol.show();
            zlist.hide();
            items.addClass('col-3');
            items.removeClass('col-12');
            $('#switch_to_col').addClass('text-success');
            $('#switch_to_col').removeClass('btn-success');
            $('#switch_to_list').removeClass('text-success');
            $('#switch_to_list').addClass('btn-success');
            history.pushState("/core/tester/asror/main.aspx?path=webhtm/eyuf/market/main/list-view1.php", "", "#col");
        }

        if (lS.getItem('grid') === 'switch_to_list') {
            switchToList();
        } else {
            switchToCol();
        }

        $('#switch_to_list, #switch_to_col').on('click', function () {
            lS.setItem('grid', $(this).attr('id'))
            console.log(lS.getItem('grid'), 'asdasdas')
            zcol = $('.zcol');
            zlist = $('.zlist');
            items = $('.item');
            $(this).removeClass('text-success')
            $(this).addClass('btn-success')
            if ($(this).attr('id') === 'switch_to_list') {
                switchToList()
            }
            if ($(this).attr('id') === 'switch_to_col') {
                switchToCol();
            }
        })

        let pagination = $('.pagination');
        let parent_pager = pagination.parent();
        parent_pager.addClass('col-12 my-4');
        //history.pushState("/core/tester/asror/main.aspx?path=webhtm/eyuf/market/main/list-view1.php", "", "#col");

    })
    let lS = window.localStorage;
    let zcol = $('.zcol');
    let zlist = $('.zlist');
    let items = $('.item');
    zlist.hide();

    function switchToCol() {
        zcol.hide();
        zlist.show();
        items.addClass('col-12');
        items.removeClass('col-3');
        $('#switch_to_list').addClass('text-success')
        $('#switch_to_list').removeClass('btn-success')
        $('#switch_to_col').removeClass('text-success');
        $('#switch_to_col').addClass('btn-success');
        history.pushState("/core/tester/asror/main.aspx?path=webhtm/eyuf/market/main/list-view1.php", "", "#list");
    }

    function switchToList() {
        zcol.show();
        zlist.hide();
        items.addClass('col-3');
        items.removeClass('col-12');
        $('#switch_to_col').addClass('text-success');
        $('#switch_to_col').removeClass('btn-success');
        $('#switch_to_list').removeClass('text-success');
        $('#switch_to_list').addClass('btn-success');
        history.pushState("/core/tester/asror/main.aspx?path=webhtm/eyuf/market/main/list-view1.php", "", "#col");
    }

    if (lS.getItem('grid') === 'switch_to_list') {
        switchToList();
    } else {
        switchToCol();
    }

    $('#switch_to_list, #switch_to_col').on('click', function () {
        lS.setItem('grid', $(this).attr('id'))
        console.log(lS.getItem('grid'), 'asdasdas')
        zcol = $('.zcol');
        zlist = $('.zlist');
        items = $('.item');
        $(this).removeClass('text-success')
        $(this).addClass('btn-success')
        if ($(this).attr('id') === 'switch_to_list') {
            switchToList()
        }
        if ($(this).attr('id') === 'switch_to_col') {
            switchToCol();
        }
    })

    let pagination = $('.pagination');
    let parent_pager = pagination.parent();
    parent_pager.addClass('col-12 my-4');
    //history.pushState("/core/tester/asror/main.aspx?path=webhtm/eyuf/market/main/list-view1.php", "", "#col");


</script>
<?php
$this->endBody()
?>
</body>
</html>
<?php $this->endPage() ?>
