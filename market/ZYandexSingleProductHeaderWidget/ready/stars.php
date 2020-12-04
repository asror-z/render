<?php

use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;

/** @var ZView $this */

use zetsoft\system\kernels\ZView;

?>

<div class="d-flex flex-wrap justify-content-between align-items-center">
    <div class="fp-20">
        <span class="badge badge-success fp-16 mr-3"><?= number_format($product->rating, 1) ?></span>
        <a href="review.aspx?id=<?= $product->id ?>">
            <span class="text-muted mr-3 fp-20"><?= $product->reviewCount . Az::l(" отзывов") ?></span>
        </a>
        <a href="/shop/user/product-single/questions-answers.aspx?id=<?= $product->id ?>">
            <span class="text-muted fp-20"><?= $product->reviewCount . Az::l(" вопросов") ?> </span>
        </a>
    </div>
    <div class="mt-2">
        <div class="d-flex px-2">
            <a class="text-muted mb-1 hint--top"
               aria-label="<?= Az::l('Добавить в избранное') ?>"
               onclick="add_wish_list(<?= $product->id; ?>,$(this),true)"
            >
                <i class="fas fa-heart fp-20 <?= $product->in_wish ? 'text-success' : '' ?>"></i> <span
                        class="fp-20"> <?= Az::l('В избранное') ?></span>
            </a>
            <a class="text-muted ml-4 mb-1 hint--top"
               aria-label="<?= Az::l('Добавить к сравнению') ?>"
               onclick="add_compare_list(<?= $product->id; ?>,$(this),false)"
            >
                <i class="far fa-chart-bar fp-20 <?= $product->in_compare ? 'text-success' : '' ?>"> </i> <span
                        class="fp-20"> <?= Az::l('Сравнить') ?></span>
            </a>
        </div>
    </div>
    <? /*= $this->require('/webhtm/shop/user/product-single/block/wish_and_compare2.php', ['product'=>$product]) */ ?>
</div>
