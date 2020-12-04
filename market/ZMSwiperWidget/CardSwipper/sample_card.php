
<div class="col-md-10 mx-auto my-1">
<style>
    .swiper-button-next,.swiper-button-prev {
     color: lightgreen;
    }
   
</style>
<?php

use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\widgets\cards\ZCard_1Widget;
use zetsoft\widgets\market\ZMSwiperWidget;

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
             'cardclass'=>'mx-1',
        ]
    ]);
}

echo ZMSwiperWidget::widget([
    'data' => $slide_data,
    'config' => [
        'slideWidget' => true,
        'slidesPerView' => 5,
        'pagination.el' => '',
        'slidesMediaPerView640' => 3,
        'slidesMediaPerView500' => 2,
        'slidesMediaPerView1024' => 5,
        'slidesMediaPerView325' => 2,
        'nextEl' => '.swiper-button-next',
        'prevEl' => '.swiper-button-prev',

        

    ]
]);

?>
</div>
