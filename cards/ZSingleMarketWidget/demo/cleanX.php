<?php

use zetsoft\dbitem\data\TabItem;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZSVGWidget;
use zetsoft\widgets\market\ZZoomWpWidget;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\widgets\cards\ZCard_1Widget;
use zetsoft\widgets\market\ZMSwiperWidget;

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /*
  ##Device = Desktops
  ##Screen = 1281px to higher resolution desktops
*/

    @media (min-width: 1281px) {

    //CSS

    }

    /*
      ##Device = Laptops, Desktops
      ##Screen = B/w 1025px to 1280px
    */

    @media (min-width: 1025px) and (max-width: 1280px) {

    //CSS

    }

    /*
      ##Device = Tablets, Ipads (portrait)
      ##Screen = B/w 768px to 1024px
    */

    @media (min-width: 768px) and (max-width: 1024px) {

    //CSS

    }

    /*
      ##Device = Tablets, Ipads (landscape)
      ##Screen = B/w 768px to 1024px
    */

    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

    //CSS

    }

    /*
      ##Device = Low Resolution Tablets, Mobiles (Landscape)
      ##Screen = B/w 481px to 767px
    */

    @media (min-width: 481px) and (max-width: 767px) {

    //CSS

    }

    /*
      ##Device = Most of the Smartphones Mobiles (Portrait)
      ##Screen = B/w 320px to 479px
    */

    @media (min-width: 320px) and (max-width: 480px) {

    //CSS

    }
</style>

<div class="container bg-white pt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-7 d-flex justify-content-center">
            <div class="mr-2">
                <?php /*echo ZZoomWidget::widget([
                    'data' => $product->image
                ]) */

                Az::$app->market->wish->writeViewed(2);
                ?>
                <?php echo ZZoomWpWidget::widget([
                    /*'data'=> $product->image*/
                ]) ?>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="titel-prod">
                        <p class="titel fp-30">Мужская сумка водонепроницаемая</p>
                    </div>
                    <div class="additional">
                        <span class="text-muted">3359 шт / в наличии</span>
                    </div>
                </div>
                <div class="col-lg-12 d-flex flex-wrap justify-content-between">
                    <div class="d-flex mt-3 mt-md-0">
                        <div class="stars d-flex align-items-center w-40">
                            <div>
                                <?
                                echo ZSVGWidget::widget([
                                    'config' => [
                                        'type' => ZSVGWidget::type['top_sell']
                                    ]
                                ]);
                                ?>
                            </div>

                            <div>
                                <div>
                                    <?php
                                    echo ZKStarRatingWidget::widget([
                                        'name' => 'gggfg',
                                        'config' => [
                                            'show' => false
                                        ]
                                    ]);
                                    ?>
                                </div>
                                <div class="ml-2 fp-15 d-flex justify-content-center">
                                    <a href="#1" class="reviews  text-muted">(2 отзыва)</a>
                                </div>
                            </div>
                        </div>
                        <div class="ml-5"><p class="fp-20 text-muted ">Оптом и розница</p></div>
                    </div>

                    <div class="d-flex justify-content-between mt-4 mt-md-0">
                        <div class="heart fp-20 text-muted  mr-3"><i class="fa fa-heart pr-1" aria-hidden="true"></i>Избранное
                        </div>
                        <div class="compare fp-20 text-muted ml-3"><i class="fa fa-chart-bar pr-1" aria-hidden="true"></i>Сравнить
                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <div class="row justify-content-between ">
                        <div class="col-6 sizes-prod mt-4 w-25">
                            <p class="size fp-20 "><strong>Размер:</strong></p>
                                <div class="d-flex flex-wrap font-weight-bold">
                                <!--<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">-->
                                <div class="btn-group d-flex flex-wrap" role="group" aria-label="First group">
                                    <button type="button" class="btn py-1 px-3 mx-1 my-1 fp-18">1
                                    </button>
                                    <button type="button" class="btn py-1 px-3 mx-1 my-1 fp-18">2
                                    </button>
                                    <button type="button" class="btn py-1 px-3 mx-1 my-1 fp-18">3
                                    </button>
                                    <button type="button" class="btn py-1 px-3 mx-1 my-1 fp-18">4
                                    </button>
                                </div>
                                <div class="btn-group  d-flex flex-wrap" role="group" aria-label="Second group">
                                    <button type="button" class="btn py-1 px-3 mx-1 my-1 fp-18 btn-outline-secondary">5
                                    </button>
                                    <button type="button" class="btn py-1 px-3 mx-1 my-1 fp-18">6
                                    </button>
                                    <button type="button" class="btn py-1 px-3 mx-1 my-1 fp-18">7
                                    </button>
                                    <button type="button" class="btn py-1 px-3 mx-1 my-1 fp-18">8
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <div class="size-price d-flex justify-content-end align-items-end">

                                <div class="price-prod">
                                    <div class="fp-18 text-muted d-flex flex-wrap align-items-center justify-content-end">
                                        <div class="price-card d-flex flex-wrap justify-content-end green-text-color h2 pr-2 fp-35">
                                            140 890
                                        </div>
                                        <div>сум за 1шт</div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn button-bg-color text-white mx-0 w-100 mt-3 px-md-5 px-2">Добавить в корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="seltct-color mt-3">
                        <p class="color fp-20 mt-4">Цвет:</p>
                        <a class="img-prod"><img width="50" class="border border-secondary p-1"
                                                 src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>
                        <a class="img-prod"><img width="50" class="border border-secondary p-1"
                                                 src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>
                        <a class="img-prod"><img width="50" class="border border-secondary p-1"
                                                 src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>
                        <a class="img-prod"><img width="50" class="border border-secondary p-1"
                                                 src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>
                        <a class="img-prod"><img width="50" class="border border-secondary p-1"
                                                 src="https://cdn.pixabay.com/photo/2013/07/12/17/58/backpack-152705_960_720.png"></a>
                    </div>
                </div>
            </div>

        </div>


    </div>


    <div class="row mt-2">
        <div class="col-12 fp-20">
            <?php
            $data = [];

            $item = new TabItem();
            $item->label = 'Информация';
            $item->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil neque labore nostrum fugit ipsam, quae in veniam illo dicta quod quaerat sit nam. Pariatur nisi quas, consequatur necessitatibus voluptate doloremque enim molestias natus, ipsa iusto accusamus. Unde, quia impedit provident sit velit qui amet fugiat accusantium. Corporis maiores mollitia maxime!';

            $data[] = $item;

            $item = new TabItem();
            $item->label = 'Характеристика';
            $item->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae amet vero quam veniam, animi totam molestiae sunt doloremque nostrum itaque ratione a quod voluptatem voluptas neque inventore iure consequuntur nisi unde architecto ipsam quaerat possimus! At quasi commodi cumque! Cupiditate expedita vero id reprehenderit sunt tempora illum eum, earum laborum optio corporis consequatur! Voluptate culpa et magni nobis, molestias eius dicta. Incidunt, architecto odio. Est, ipsam omnis sequi facilis atque deserunt, blanditiis inventore optio magnam quisquam excepturi totam quia delectus.';

            $data[] = $item;

            $item = new TabItem();
            $item->label = 'Отзывы';
            $item->content = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo recusandae magni dolores odit dolorum enim ipsa modi asperiores nisi ea fugiat consequuntur in dolorem dolor doloribus, temporibus nostrum eum illo suscipit? Quae dolor alias assumenda. Ratione tempora nam vero veniam reprehenderit, earum adipisci dicta cupiditate? Corrupti repellendus, earum atque aut veritatis mollitia? Sint, fugit illo voluptatibus ab culpa optio, tempora quibusdam voluptates nobis libero eligendi reiciendis aspernatur. Fugit, exercitationem molestiae quas fuga corporis dignissimos nisi eligendi quis fugiat quasi, ad asperiores voluptas facere optio debitis rerum numquam, quam ut? Molestiae?';

            $data[] = $item;

            $item = new TabItem();
            $item->label = 'Вопросы и Ответы';
            $item->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, minima. Ratione magnam obcaecati placeat numquam quo minus accusamus facere. Modi quos rerum natus molestias et maxime, vel odio cumque ipsum!';

            $data[] = $item;


            echo ZSmartTabWidget::widget([
                'config' => [
                    'theme' => ZSmartTabWidget:: theme['Classic'],
                    'animation' => ZSmartTabWidget:: animation['fade'],
                    'orientation' => ZSmartTabWidget:: orientation['horizontal'],
                    'justified' => ZSmartTabWidget::justified['true'],
                    'isAjax' => ZSmartTabWidget::isAjax['false'],
                ],
                'data' => $data

            ]);

            ?>
        </div>
    </div>

</div>
<?php
$product = Az::$app->market->product->product(6);
//vdd($product);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-4 fp-18">
            <div class="swipper-card border">
                <style>
                    .swiper-button-next, .swiper-button-prev {
                        color: lightgreen;
                    }

                </style>
                <?php
                $home = '/uploaz/eyuf/CoreAdvancedItem/image/';
                $slide_data = [];
                $items = CoreAdvancedItem::find()->all();
                foreach ($items as $value) {
                    $slide_data[] = ZCard_1Widget::widget([
                        'config' => [
                            'url' => $home . $value->id . '/' . $value->image[0],
                            'title' => $value->name,
                            'content' => $value->title,
                            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQopLi9Rm4-HrpqYp5hOHO202p9fv3pm_Slu92ezQh89iBhBWqY&usqp=CAU',
                            'name' => 'coca-cola',
                            'price' => '9000 UZS',
                            'cardclass' => 'mx-1',
                        ]
                    ]);
                }

                echo ZMSwiperWidget::widget([
                    'data' => $slide_data,
                    'config' => [
                        'slideWidget' => true,
                        'slidesPerView' => 2,
                        'pagination.el' => '',
                        'slidesMediaPerView640' => 6,
                        'slidesMediaPerView500' => 3,
                        'slidesMediaPerView1024' => 9,
                        'slidesMediaPerView325' => 2,
                        'nextEl' => '.swiper-button-next',
                        'prevEl' => '.swiper-button-prev',
                    ]
                ]);

                ?>
            </div>
        </div>
        <div class="col-12 my-4 fp-18">
            <div class="swipper-card border">
                <style>
                    .swiper-button-next, .swiper-button-prev {
                        color: lightgreen;
                    }

                </style>
                <?php
                $home = '/uploaz/eyuf/CoreAdvancedItem/image/';
                $slide_data = [];
                $items = CoreAdvancedItem::find()->all();
                foreach ($items as $value) {
                    $slide_data[] = ZCard_1Widget::widget([
                        'config' => [
                            'url' => $home . $value->id . '/' . $value->image[0],
                            'title' => $value->name,
                            'content' => $value->title,
                            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQopLi9Rm4-HrpqYp5hOHO202p9fv3pm_Slu92ezQh89iBhBWqY&usqp=CAU',
                            'name' => 'coca-cola',
                            'price' => '9000 UZS',
                            'cardclass' => 'mx-1',
                        ]
                    ]);
                }

                echo ZMSwiperWidget::widget([
                    'data' => $slide_data,
                    'config' => [
                        'slideWidget' => true,
                        'slidesPerView' => 2,
                        'pagination.el' => '',
                        'slidesMediaPerView640' => 6,
                        'slidesMediaPerView500' => 3,
                        'slidesMediaPerView1024' => 9,
                        'slidesMediaPerView325' => 2,
                        'nextEl' => '.swiper-button-next',
                        'prevEl' => '.swiper-button-prev',
                    ]
                ]);

                ?>
            </div>
        </div>
        <div class="col-12 my-4 fp-18">
            <div class="swipper-card border">
                <style>
                    .swiper-button-next, .swiper-button-prev {
                        color: lightgreen;
                    }

                </style>
                <?php
                $home = '/uploaz/eyuf/CoreAdvancedItem/image/';
                $slide_data = [];
                $items = CoreAdvancedItem::find()->all();
                foreach ($items as $value) {
                    $slide_data[] = ZCard_1Widget::widget([
                        'config' => [
                            'url' => $home . $value->id . '/' . $value->image[0],
                            'title' => $value->name,
                            'content' => $value->title,
                            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQopLi9Rm4-HrpqYp5hOHO202p9fv3pm_Slu92ezQh89iBhBWqY&usqp=CAU',
                            'name' => 'coca-cola',
                            'price' => '9000 UZS',
                            'cardclass' => 'mx-1',
                        ]
                    ]);
                }

                echo ZMSwiperWidget::widget([
                    'data' => $slide_data,
                    'config' => [
                        'slideWidget' => true,
                        'slidesPerView' => 2,
                        'pagination.el' => '',
                        'slidesMediaPerView640' => 6,
                        'slidesMediaPerView500' => 3,
                        'slidesMediaPerView1024' => 9,
                        'slidesMediaPerView325' => 2,
                        'nextEl' => '.swiper-button-next',
                        'prevEl' => '.swiper-button-prev',
                    ]
                ]);

                ?>
            </div>
        </div>
    </div>
</div>



