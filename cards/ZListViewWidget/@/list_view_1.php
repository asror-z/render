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
use zetsoft\widgets\former\ZListViewWidget;

/** @var ZView $this */
$action = new WebItem();

$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = false;
$action->cache = false;
$action->call = null;
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$action->type = WebItem::type['html'];

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
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

            <?php
                /** @var ZView $this */
                echo $this->require('/render/cards/ZListViewWidget/pages/tab_products.php');
            ?>

        </div>
    </div>
        <?php

        use zetsoft\dbitem\shop\ProductItem;

        /** @var ZView $this */
        $model = Az::$app->market->product->allProducts();

        echo ZListViewWidget::widget([
            'data' => $model,
            'config' => [
                'options' => [
                    'class' => 'w-100 row'
                ],
                'itemOptions' => [
                    'class' => 'item col-3'
                ],
                'summaryOptions' => [
                    'class' => 'col-12'
                ],
                'attributes' => [
                    'name' => [
                        'label' => Az::l("По имени")
                    ],
                    'price' => [
                        'label' => Az::l("По цене")
                    ],
                ],

                'type' => ZListViewWidget::type['item'],

                /** @var ProductItem $model */

                'itemView' => function ($model, $key, $index, $widget) {

                    return $this->require( "/render/cards/ZListViewWidget/demo/vertical_horizontal.php", [
                        'item' => $model,
                        'col'=>12
                    ]);
                }
            ]
        ]);
        ?>
</div>

<?php
$this->endBody()
?>


<script>

    let zcol=$('.zcol');
    let zlist=$('.zlist');
    let items=$('.item');
    zlist.hide();
    $('#switch_to_list, #switch_to_col').on('click',function () {
        zcol=$('.zcol');
        zlist=$('.zlist');
        items=$('.item');
        $(this).removeClass('text-success')
        $(this).addClass('btn-success')
        if ($(this).attr('id')==='switch_to_list'){
            zcol.show();
            zlist.hide();
            items.addClass('col-3');
            items.removeClass('col-12');
            $('#switch_to_col').addClass('text-success');
            $('#switch_to_col').removeClass('btn-success');
        }
        if ($(this).attr('id')==='switch_to_col'){
            zcol.hide();
            zlist.show();
            items.addClass('col-12');
            items.removeClass('col-3');
            $('#switch_to_list').addClass('text-success')
            $('#switch_to_list').removeClass('btn-success')
        }
    })
    
    let pagination = $('.pagination');
    let parent_pager = pagination.parent();
    parent_pager.addClass('col-12 my-4')

</script>

</body>
</html>
<?php $this->endPage() ?>
