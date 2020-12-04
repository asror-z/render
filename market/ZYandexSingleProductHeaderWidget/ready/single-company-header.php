<?
/**@var \zetsoft\system\kernels\ZView $this */

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\dbitem\shop\SingleProductItem;
use zetsoft\dbitem\user\UserCompanyItem;
use zetsoft\models\user\UserCompany;
use zetsoft\system\Az;
use zetsoft\widgets\navigat\ZBreadcrumbsWidget;

$product_id = $this->httpGet('id');
$companylist = Az::$app->market->product->allCompanies();
foreach ($companylist as $item) {
    if ($item->id === (int)$product_id) $company = $item;
}

if (!isset($company) || $company === null) {

    $company = new UserCompanyItem();


    $company->id= 1;
    $company->url= null;
    $company->distance= null;
    $company->code= null;
    $company->name= "Bonito Kids";
    $company->title= "Tesc Desc";
    $company->text= 'Artel является одним из старейших (основан в 2000 году) и наиболее успешных в российском сегменте Интернет торговых проектов в области электроники.';
    $company->type= null;
    $company->phone= '+998998442431';
    $company->website= null;
    $company->email= 'artelinfo@gmail.com';
    $company->rating= 3.5;
    $company->photo= "https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500";
    $company->active= null;
    $company->parent_id= null;
    $company->inn= null;
    $company->okonx= null;
    $company->bank= null;
    $company->mfo= null;
    $company->patent= null;
    $company->adress= 'город Ташкент, 9A ул. Сухайл, Тошкент 100027';
    $company->discount= -10;
    $company->catalogId= 19;
    $company->is_multi= false;
    $company->in_wish= false;
    $company->in_compare= false;
    $company->reviewCout= 15;

}

$image = '<img class="rounded p-1 border" width="150px" height="auto" src=" "/>';
//$image = '<img class="rounded p-1 border" width="150px" height="auto" src=" $company->photo[0] "/>'; //
//vd($company);
/*vd($company);*/
?>



<div class="d-flex justify-content-between p-3">
    <div class="d-flex justify-content-around">
        <div><img class="w-100 h-auto" src="<?= $company->photo ?>" alt="" style="max-width: 200px;"></div>
        <div class="d-flex flex-column justify-content-between">
            <div class="ml-2">
                <div class="fp-30"><?= $company->name ?></div>
                <div class="fp-20"><?=$company->title?></div>
            </div>
            <div class="d-flex ml-2"><span class="badge badge-success fp-18"><?= number_format($company->rating,1)?></span></div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-between align-items-end" style="max-width: 500px;">
        <div class="fp-16 text-center text-muted"><?=$company->text; ?></div>
        <div>
            <div>
                <span class=""><?= Az::l('Адрес: ');?></span>
                <span class="fp-16 font-weight-light"><?= $company->adress;?></span>
            </div>
            <div class="d-flex">
                <div>
                    <?= Az::l('Телефон: ');?>
                    <span class="fp-16 font-weight-light"><?= $company->phone;?></span>
                </div>
                <div class="ml-4"><?= Az::l('Е-майл: '); ?>
                    <a href="" class="font-weight-light"><?= $company->email;?></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!--<div class="card-title col-md-12 mt-2">


    <div class="row">
        <div class="col-md-2 align-items-center">
            <img class="w-100 h-auto" src="<?/*= $company->photo */?>" alt="">

        </div>


        <div class="col-md-10">
            <div class="d-flex justify-content-between">
                <h2 class=""><?/*= $company->name */?></h2>

            </div>
            <div class="bg-white">
                <?php
/*

                if (!empty($company))
                    echo $this->require( '/webhtm/eyuf/shop/user/market-single/block/stars.php', ['product' => $company]);
                */?>
            </div>
        </div>
    </div>

</div>
-->
