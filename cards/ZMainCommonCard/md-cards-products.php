<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;



/** @var ZView $this */


if (!isset($item) || empty($item)) {
    $item = new ProductItem();
    $item->id = 2;
    $item->name = 'Арахис';
    $item->title = 'Test Desc';
    $item->new_price = '14825920';
    $item->price_old = '188920';
    $item->barcode = '34234234';
    $item->exist = ProductItem::exists['not'];
    $item->images = [
        'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
    ];
    $item->currency = 'сум';
    $item->currencyType = 'after';
    $item->measure = 'шт';
    $item->rating = 3.5;
    $item->discount = -10;
    $item->catalogId = 19;
    $item->max_price = 2155632;
    $item->sale = 'sdadsa';
    $item->is_multi = false;
    $item->min_price = 'adssad';
    $item->in_wish = true;
    $item->in_compare = false;
    $item->cart_amount = 3;
    $item->status = [];
    $item->discount = 5;

}


?>

<style>

    .like-icons-btn {
        background: #00b94b !important;
    }

    .chart-icons-btn {
        background: #00b94b !important;
    }
    .commonFooter {
        background: #00b94b !important;
    }

    .view {
        height: 200px;
    }

    .mainCommon-card {
        min-height: 400px;
    }

    .view-img {
        width: auto;
        margin: 0 auto;
        height: 100%;
    }
    .chart-icons-btn{
        transition: .3 ease-in-out;
    }
    .like-icons-btn {
        transition: .3 ease-in-out;
    }
    .like-icons-btn i{
        animation: animate 1s ease-in-out infinite;
    }
    .chart-icons-btn:hover i {
        transition: 1 ease-in-out;
        transform: scale(1.1);
        background: #fff !important;
        color: #01b510;
    }
    .like-icons-btn:hover i {
        transition: 1 ease-in-out;
        transform: scale(1.1);
        background: #fff !important;
        color: #fd0000;
    }
    @keyframes animate {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }
</style>

  <div class="col-lg-3 my-1">
    <!-- Card -->
    <div class="card mainCommon-card">

      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top view-img" src="<?= ZArrayHelper::getValue($item->images, 0) ?>" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Button -->
      <a class="chart-icons-btn btn-floating btn-action ml-auto mr-4  lighten-3 ">
        <i class="fa fa-chart-bar fp-24"></i>
      </a>

      <a class="like-icons-btn btn-floating btn-action ml-auto mr-4  lighten-3" style="transform: translateX(-60px);">
        <i class="fal fa-heart fp-24"></i>
      </a>

      <!-- Card content -->
      <div class="card-body">

        <!-- Title -->
        <h4 class="card-title"><?= $item->name ?></h4>
        <hr>
        <!-- Text -->
        <p class="card-text">
            <?= $item->title ?>
        </p>

      </div>

      <!-- Card footer -->
      <div class="rounded-bottom commonFooter lighten-3 text-center p-2">
          <?
          echo ZKStarRatingWidget::widget([
              'id' => 'rating_' . $id,
              'name' => '',
              'config' => [
                  'show' => false,
                  'icon' => '<i class="fas fp-15 fa-star"></i>',
                  'value' => $item->rating,
              ]
          ]);


          ?>
      </div>

    </div>
    <!-- Card -->
  </div>




<script>
  $('.like-icons-btn ').on('click', function (){
      $(this).children('.fa-heart').removeClass('fal').addClass('fa')
      $(this).children('.fa-heart').css({'animation': '1s ease-in-out 1', 'color': 'red', 'background': 'white'})
  })
  $('.chart-icons-btn ').on('click', function (){
      $(this).children('.fa-chart-bar').removeClass('fal').addClass('fa')
      $(this).children('.fa-chart-bar').css({'color': '#01b510', 'background': 'white'})
  })
</script>


</body>
</html>




