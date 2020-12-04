<?
/**@var \zetsoft\system\kernels\ZView $this*/

$product = \zetsoft\system\Az::$app->market->product->getproducttestsingle();

?>

                <div class="card-title mt-2">

                    <?
                    if (isset($companyId))

                        echo ZBreadcrumbsWidget::widget([
                            'config' => [
                                'mainUrl' => '/shop/user/product/single-productAzizjonSherzod2.php',
                                'mode' => ZBreadcrumbsWidget::mode['category'],
                                'category_id' => $companyId,
                            ]
                        ])
                    ?>
                    <div class="d-flex justify-content-between">
                        <h3 class="ml-3"><?= $product->name ?></h3>
                        <h3 class="mr-2"><? if($product->currencyType == 'before'){
                            echo $product->currency;
                        } echo number_format($product->new_price, 2, '.', ' ');
                        if($product->currencyType == 'after'){
                            echo $product->currency;
                        }?></h3>
                    </div>
                    <div class="row ml-0">
                        <div class="col-md-12 bg-white py-2">
                            <?php
                            echo $this->require( '/blocks/SingleProduct/stars.php', ['product' => $product]);
                            ?>
                        </div>
                    </div>

                </div>

