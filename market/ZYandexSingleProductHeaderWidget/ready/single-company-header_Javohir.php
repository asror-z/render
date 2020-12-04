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
    $company->id = 1;
    $company->name = 'Bonito Kids';
    $company->title = 'Test Desc';
    $company->photo =
        'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
    ;
    $company->rating = 3.5;
    $company->discount = -10;
    $company->catalogId = 19;
    $company->is_multi = false;
    $company->in_wish = false;
    $company->in_compare = false;
    $company->reviewCount = 15;
}



$src = '\render\market\ZYandexSingleProductHeaderWidget\logo.png';
if(!empty($company->photo))
    $src = $company->photo
?>


<div class="card-title col-md-12 mt-2">


    <div class="row">
        <div class="col-md-2 align-items-center">
            <img class="w-100 h-auto" src="<?= $src?>" alt="">

        </div>


        <div class="col-md-10">
            <div class="d-flex justify-content-between">
                <h2 class=""><?= $company->name ?></h2>

            </div>
            <div class="bg-white">
                <?php
                if (!empty($company))
                    echo $this->require( '/webhtm/eyuf/shop/user/market-single/block/stars.php', ['product' => $company]);
                ?>
            </div>
        </div>
    </div>

</div>

