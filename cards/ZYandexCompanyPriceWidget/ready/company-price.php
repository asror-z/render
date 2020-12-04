<?php


use zetsoft\dbitem\shop\CompanyCardItem;
use zetsoft\dbitem\eyuf\CurrencyItem;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;


/** @var ZView $this */
if (!isset($company)) {
    $company = new CompanyCardItem();
    $company->id = 2;
    $company->name = 'ООО «Тойота Мотор';
    $company->title = 'Производитель процессора: Samsung, Поддержка 2G: Да, Страна:Индия, Разъем для наушников: 3.5 мм, Гарантия: 1 год, Проводная гарнитура: Да, Тип процессора:
                                    Exynos 9611, Порт USB: Type-C USB 2.0, Блок питания: Да, Емкость аккумулятора: 4000
                                    мАч, Сканер отпечатка пальца под экраном: Да, Технология Wi-Fi Direct: Да,
                                    Количество ядер: 8, Wi-Fi точка доступа: Да, Габаритные размеры (В*Ш*Г)';
    $company->amount = '4';
    $company->url = 'market.ru';
    $company->visible = '34234234';
    $company->new_price = '3123213';
    $company->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU';
    $company->price_old = '243234';
    $company->currency = '$';
    $company->currencyType = ProductItem::currencyType['before'];
    $company->rating = 3;
    $company->cart_amount = 0;
    $company->reviewCount = 0;

    $company->delivery_price = null;
    $company->delivery_type = null;

    $company->measure = ProductItem::measure['pcs'];
    $company->measureStep = ProductItem::measureStep['pcs'];

}


?>
<?
$this->fileJs('/render/cards/ZVMarketWidget/asset/main2.js');


?>

<div class="col-md-12 border my-2">
    <div class="row p-2">
        <div class="col-md-8 mt-2 ">

            <div class="">
                <a href="#"><h4><?= $company->name ?></h4></a>
                <div class="accordion" id="accordionExample">
                    <a id="about-<?= $company->id ?>" class="text-left"
                       data-toggle="collapse" data-target="#collapse-<?= $company->id ?>"
                       onclick="change($(this))">
                        <div class="text-truncate text-justify">
                            <?= $company->title ?>
                        </div>
                    </a>

                    <div id="collapse-<?= $company->id ?>" class="collapse" aria-labelledby="headingOne">
                        <div class="text-justify">
                            <?= $company->title ?>
                        </div>
                    </div>

                </div>

                <div class="d-flex align-items-center">
                            <span>
                            <a href="<?= $company->url ?>" class="font-italic fp-15 text-bold">marketPlace.ru</a>
                            </span>
                    <div id="star-<?= $company->id ?>" class="d-flex ml-3">
                        <?
                        echo ZKStarRatingWidget::widget([
                            'name' => 'gggfg',
                            'config' => [
                                'show' => false,
                                'class' => '',
                                'value' => 3,
                            ]
                        ]);
                        ?>
                        <a href="#"><span
                                class="text-muted ml-2"><?= $company->reviewCount . ' ' ?><?= Az::l('отзывoв') ?></span></a>
                    </div>
                </div>

                <span>Гарантия производителя.</span>
            </div>
        </div>

        <div class="col-md-4 ">

            <div class="d-flex align-items-center">
                <div class="align-items-center">
                    <del><h6 class="text-muted mb-0"><?
                            if ($company->currencyType === ProductItem::currencyType['before']) {
                                echo $company->currency . ' ';
                            }
                            echo $company->price_old;
                            if ($company->currencyType === ProductItem::currencyType['after']) {
                                echo $company->currency . ' ';
                            }

                            ?>
                            <span><?= ' /' . $company->measure ?></span></h6></del>
                </div>
                <div class="align-items-center">
                    <span class="rounded-left badge badge-danger ml-2 ">-9%</span>
                </div>
            </div>
            <h4>
                <?
                if ($company->currencyType === ProductItem::currencyType['before']) {
                    echo $company->currency . ' ';
                }
                echo $company->new_price;
                if ($company->currencyType === ProductItem::currencyType['after']) {
                    echo $company->currency . ' ';
                }

                ?>
                <span><?= ' /' . $company->measure ?></span>
            </h4>

            <span><i class="fas fa-truck text-muted"></i></span>
            <span class="text-success">Бесплатно курьером завтра</span>

            <a href="#"><h6>Все варианты доставки</h6></a>

            <h6 class="text-muted"><i class="far fa-credit-card"></i> Картой/Наличными
            </h6>
            <div>
                            <span class="text-muted">Цвет товара:красный <i
                                    class="fas fa-exclamation-triangle"></i></span>
            </div>

            <div class="footer-main">

                <button id="add-card-<?= $company->id ?>"
                        class="ml-0 mx-0 add-card btn btn-success text-white <?= $company->cart_amount > 0 ? "d-none" : "" ?>"
                        data-catalog-id="<?= 19 ?>"
                        onclick="addToCart($(this))">
                    <?= Az::l('Добавить в корзину') ?>
                </button>

                <div id="input-<?= $company->id ?>"
                     class="touch-main <?= $company->cart_amount > 0 ? " " : "d-none" ?>">
                    <div class="d-flex touch-main-children ">
                        <div class="d-flex parent-clear w-50">
                            <?
                            echo ZKTouchSpinWidget::widget([
                                'name' => 'asds',
                                'config' => [
                                    'min' => '0',
                                    'buttonup_txt' => '<i class="fa fa-plus px-2"></i>',
                                    'buttondown_txt' => '<i class="fa fa-minus px-2"></i>',
                                    'buttonup_class' => 'btn btn-success fp-18 rounded-right p-1',
                                    'buttondown_class' => 'btn btn-success fp-18 rounded-left p-1',
                                    'class' => 'text-center clear-add-btn',
                                    'initVal' => '1',
                                    'step' => $company->measureStep
                                ],
                                'event' => [
                                    'startupspin' => <<<JS
                                    function(){
                                     spinUp($company->id,19);
                                    }
JS,
                                    'startdownspin' => <<<JS
                                    function(){
                                     spinDown($company->id,19);
                                    }
JS,

                                ]

                            ]);
                            ?>
                        </div>
                        <div class="v-card-clear-add" data-catalog-id="<?= $company->catalogId ?>"
                             onclick="deleteFromCart($(this))">
                            <?
                            echo ZSVGWidget::widget([
                                'config' => [
                                    'type' => 'basket_delete',
                                ]
                            ])
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<script>

    function change(element) {
        element.addClass('d-none');
    }
</script>




