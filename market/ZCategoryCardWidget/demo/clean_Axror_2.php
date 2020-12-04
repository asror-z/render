 <?php
 /** @var ZView $this */

 use http\Url;
 use zetsoft\dbitem\shop\ProductItem;
 use zetsoft\system\kernels\ZView;


 $item = new ProductItem();
$item->name = 'Televizorlar';
$item->images = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSBBa3U4_0mBNrV01bwIj66N1cns_P9SkUQXzO-0OZVNShcOIuP&usqp=CAU';
 $item->url = '/bozor/main/index.aspx';

 ?>






 <div class="row">
<div class="col-3">
<div>
    <a href="<?= $item->url ?>">
    <div class="d-flex flex-column align-items-center shadow p-3 mb-5 bg-white rounded">
        <div>
            <img src="<?= $item->images ?>" class="card-img">
        </div>

        <p class="goods__info text-muted py-1 fp-25"><?= $item->name ?></p>
    </div>
    </a>
</div>

</div>


 </div>

