<?

/**
 *
 *
 * @author: SherzodMangliyev
 *
 */


use zetsoft\dbitem\wdg\MenuItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;

/**@var ZView $this */
$category = Az::$app->market->category->generateDBMenuItems();
if (!isset($category)) {
    $category = new MenuItem();
    $category->label = 'Noutbuk';
    $_value->url = '/shop/user/main-common/main.aspx';
}


?>

<?
if (empty($category)) {
    echo $this->require( '/webhtm/eyuf/shop/user/product-single/empty/empty.php', [
        $item = 'Ваш список товаров пуст'
    ]);
    return null;
} else {
    ?>
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none">Top<span></span></a>

    <div class="container-fluid all-category mr-2 ml-2">

        <div id="categoryContainer" class="row bg-white sticky-top">
            <?

            foreach ($category as $key => $value) { ?>
                <div style="min-height: 65px"
                     class="col-lg-3 px-2 col-md-4 col-sm-6 d-flex border category-name">
                    <a id="element<?= $value->id ?>" href="#<?= $value->id ?>"
                       class="p-1 text-decoration-none  d-flex text-muted align-items-center">
                        <i class="<?= $value->icon ?>  fp-20"></i>
                        <h5 class="p-2 mb-0 category  fp-15"><?= $value->label ?></h5>
                    </a>
                </div>
            <? } ?>
        </div>
    </div>
    <div class="col-md-12 mb-2">
        <div class="row">
            <div class="col-lg-12 col-md-12 pt-5 ">
                <? foreach ($category as $key => $value) { ?>
                    <section id="<?= $value->id ?>" class="category-list  border-bottom py-2 px-3 mt-2">
                        <h3 class="text-success category-title pl-1">
                            <a class="anchor text-muted" href="#<?= $value->id ?>">
                                <svg class="octicon octicon-link mb-2 mr-1" viewBox="0 0 16 16" version="1.1" width="16"
                                     height="16" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                                    </path>
                                </svg>
                            </a><?= $value->label ?></h3>
                        <div class="row info">
                            <? foreach ($value->items as $_key => $_value) { ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="/shop/user/filter-common/main.aspx?id=<?= $_value->id ?>"
                                       id="element-<?= $_value->id ?>"
                                       class="text-muted link"><?= $_value->label?></a>
                                </div>
                            <? } ?>
                        </div>
                    </section>
                <? } ?>
            </div>
        </div>
    </div>
<? } ?>


<script>

    $("html, body").scroll(function () {
        console.log('scrolled');
        if ($(this).scrollTop() > 250) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('.category-name').on('click', function () {
        var attrId = $(this).children().attr('href');
        console.log(attrId);
      //  var width = $('#categoryContainer').innerHeight();
      //  console.log(width);
        $("html, body").animate({
            scrollTop: $(attrId).offset().top
            }, 800);
    })
    var aa = $('#super_navbar');
    aa.removeClass('sticky-top');/*navbarni sticky si olingan proekt un*/
</script>
<style>
    .category:hover {
        color: #00c851;
        transition: .6s ease-out;
    }
</style>
