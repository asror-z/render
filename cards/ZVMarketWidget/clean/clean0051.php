<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZSVGWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;

/*use zetsoft\system\Az;
use zetsoft\models\page\PageWidgetType;


$categories = PageWidgetType::find()->all();
//vdd($categories);
foreach ($categories as $category) {

    $widgets = Az::$app->App->eyuf->grape->getWidgetsByCategory($category);
    foreach ($widgets as $widget):
        vd($widget);


    endforeach;
}
*/ ?>


<div class="card-group">
  <div class="card m-2">
    <div class="position-relative overflow-hidden">
      <div class="position-absolute p-2 d-flex">
          <?
          echo ZSVGWidget::widget([
              'config' => [
                  'type' => ZSVGWidget::type['top_sell']

              ]
          ]);
          ?>

      </div>

      <span style="right: 2%; top: 4%"
            class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 mr-2 text-white rounded fe-10">
                -10 %
            </span>

      <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
           class="card-img-top" alt="...">
    </div>

    <!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
    -->


    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="fe-12">Арахисовая паста с медом 200г</div>
        <div class="d-flex mt-1">
          <i class="far fa-heart grey-text mr-2 h5"></i>
          <i class="fa fa-chart-bar grey-text h5"></i>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="text-success fe-12">В наличии</div>
        <div class="text-muted card-text">Art: 34234234</div>
      </div>

      <div class="d-flex justify-content-between">
        <div>
          <div class="d-flex flex-wrap">
            <div class="text-success h4">14,890</div>
            <div class="text-muted d-flex align-items-center">сум. за 1 шт</div>
          </div>
          <div class="text-danger mt-n2"><strike class="h5">18,890</strike></div>
        </div>


        <div class="card-text">
            <?
            echo ZKStarRatingWidget::widget([
                'name' => 'gggfg',
                'config' => [
                    'show' => false
                ]
            ]); ?>
          <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
        </div>
      </div>

      <div>

      </div>
    </div>
    <div class="mx-2 footer-main">

      <button class="mx-0 w-100 btn btn-success add-cart">Добавить в корзину</button>

      <div class="touch-main d-none">
        <div class="d-flex justify-content-end">
          <div class="d-flex parent-clear w-100">
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
                      'initVal' => '1'

                  ]
              ]);
              ?>
          </div>
          <div>
              <?=
              ZSVGWidget::widget([
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
  <div class="card m-2">


    <div class="position-relative overflow-hidden">
      <div class="position-absolute p-2 d-flex">
          <?
          echo ZSVGWidget::widget([
              'config' => [
                  'type' => ZSVGWidget::type['top_sell']

              ]
          ]);
          ?>

      </div>

      <span style="right: 2%; top: 4%"
            class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 mr-2 text-white rounded fe-10">
                -10 %
            </span>

      <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
           class="card-img-top" alt="...">
    </div>

    <!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
    -->


    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="fe-12">Арахисовая паста с медом 200г</div>
        <div class="d-flex mt-1">
          <i class="far fa-heart grey-text mr-2 h5"></i>
          <i class="fa fa-chart-bar grey-text h5"></i>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="text-success fe-12">В наличии</div>
        <div class="text-muted card-text">Art: 34234234</div>
      </div>

      <div class="d-flex justify-content-between">
        <div>
          <div class="d-flex flex-wrap">
            <div class="text-success h4">14,890</div>
            <div class="text-muted d-flex align-items-center">сум. за 1 шт</div>
          </div>
          <div class="text-danger mt-n2"><strike class="h5">18,890</strike></div>
        </div>


        <div class="card-text">
            <?
            echo ZKStarRatingWidget::widget([
                'name' => 'gggfg',
                'config' => [
                    'show' => false
                ]
            ]); ?>
          <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
        </div>
      </div>

      <div>

      </div>
    </div>
    <div class="mx-2 footer-main">

      <button class="mx-0 w-100 btn btn-success add-cart">Добавить в корзину</button>

      <div class="touch-main d-none">
        <div class="d-flex justify-content-end">
          <div class="d-flex parent-clear w-100">
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
                      'initVal' => '1'

                  ]
              ]);
              ?>
          </div>
          <div>
              <?=
              ZSVGWidget::widget([
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
  <div class="card m-2">


    <div class="position-relative overflow-hidden">
      <div class="position-absolute p-2 d-flex">
          <?
          echo ZSVGWidget::widget([
              'config' => [
                  'type' => ZSVGWidget::type['top_sell']

              ]
          ]);
          ?>

      </div>

      <span style="right: 2%; top: 4%"
            class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 mr-2 text-white rounded fe-10">
                -10 %
            </span>

      <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
           class="card-img-top" alt="...">
    </div>

    <!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
    -->


    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="fe-12">Арахисовая паста с медом 200г</div>
        <div class="d-flex mt-1">
          <i class="far fa-heart grey-text mr-2 h5"></i>
          <i class="fa fa-chart-bar grey-text h5"></i>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="text-success fe-12">В наличии</div>
        <div class="text-muted card-text">Art: 34234234</div>
      </div>

      <div class="d-flex justify-content-between">
        <div>
          <div class="d-flex flex-wrap">
            <div class="text-success h4">14,890</div>
            <div class="text-muted d-flex align-items-center">сум. за 1 шт</div>
          </div>
          <div class="text-danger mt-n2"><strike class="h5">18,890</strike></div>
        </div>


        <div class="card-text">
            <?
            echo ZKStarRatingWidget::widget([
                'name' => 'gggfg',
                'config' => [
                    'show' => false
                ]
            ]); ?>
          <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
        </div>
      </div>

      <div>

      </div>
    </div>
    <div class="mx-2 footer-main">

      <button class="mx-0 w-100 btn btn-success add-cart">Добавить в корзину</button>

      <div class="touch-main d-none">
        <div class="d-flex justify-content-end">
          <div class="d-flex parent-clear w-100">
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
                      'initVal' => '1'

                  ]
              ]);
              ?>
          </div>
          <div>
              <?=
              ZSVGWidget::widget([
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
  <div class="card m-2">


    <div class="position-relative overflow-hidden">
      <div class="position-absolute p-2 d-flex">
          <?
          echo ZSVGWidget::widget([
              'config' => [
                  'type' => ZSVGWidget::type['top_sell']

              ]
          ]);
          ?>

      </div>

      <span style="right: 2%; top: 4%"
            class="position-absolute ml-auto danger-color pl-2 pr-2 py-2 mr-2 text-white rounded fe-10">
                -10 %
            </span>

      <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
           class="card-img-top" alt="...">
    </div>

    <!--        <img class="resp-icon" src="https://www.iconpacks.net/icons/1/free-certificate-icon-1356-thumb.png"/>
    -->


    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="fe-12">Арахисовая паста с медом 200г</div>
        <div class="d-flex mt-1">
          <i class="far fa-heart grey-text mr-2 h5"></i>
          <i class="fa fa-chart-bar grey-text h5"></i>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="text-success fe-12">В наличии</div>
        <div class="text-muted card-text">Art: 34234234</div>
      </div>

      <div class="d-flex justify-content-between">
        <div>
          <div class="d-flex flex-wrap">
            <div class="text-success h4">14,890</div>
            <div class="text-muted d-flex align-items-center">сум. за 1 шт</div>
          </div>
          <div class="text-danger mt-n2"><strike class="h5">18,890</strike></div>
        </div>


        <div class="card-text">
            <?
            echo ZKStarRatingWidget::widget([
                'name' => 'gggfg',
                'config' => [
                    'show' => false
                ]
            ]); ?>
          <h6 class="card-text text-muted text-center">(2 отзыва)</h6>
        </div>
      </div>

      <div>

      </div>
    </div>
    <div class="mx-2 footer-main">

      <button class="mx-0 w-100 btn btn-success add-cart">Добавить в корзину</button>

      <div class="touch-main d-none">
        <div class="d-flex justify-content-end">
          <div class="d-flex parent-clear w-100">
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
                      'initVal' => '1'

                  ]
              ]);
              ?>
          </div>
          <div>
              <?=
              ZSVGWidget::widget([
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
<script>
$(document).ready(function () {
  $('.add-cart').on('click', function () {
    $(this).addClass('d-none');
    var parent = $(this).parent('.footer-main');
    var childTouch = parent.children('.touch-main');
    childTouch.removeClass('d-none');

  });
});


$(document).ready(function () {
  $('.clear-add').on('click', function () {
    var clear = $(this).parent('.parent-clear');
    var first = clear.children('.bootstrap-touchspin');
    var second = first.children('.clear-add-btn');
    $('.add-cart').removeClass('d-none');
    $('.touch-main').addClass('d-none');
    second.val('');

  });
});
</script>
