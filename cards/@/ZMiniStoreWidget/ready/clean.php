
<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\navigat\ZSlimScrollWidget;
use zetsoft\widgets\inputes\ZImgRadioWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;



ZSlimScrollWidget::begin([
    'config' => [
        'functionName' => 'scrollTo',
        'width' => '700px',
        'height' => 'auto',
        'begin' => true,
        'scrollTo' => '550px'
    ],
]);

$staraiting = ZKStarRatingWidget::widget([
    'name' => 'gggfg',
    'config' => [
        'show' => false,
    ]
]);

echo \zetsoft\widgets\inputes\ZImgRadioWidget::widget([
    'config' => [
        'src' => '',
        'title' => '',
        'checkMarkPosition' => ZImgRadioWidget::position['bottom-left'],
        'content' => <<<HTML
        <div class="col-12 col-sm-6 col-lg-3 col-xl-4">
            <div class="d-flex">
                <div class="d-block mr-3 text-center">
                    <div class="d-flex mt-xl-3">
                        <h2 class="pl-1 mb-0 fp-30 font-weight-bolder">Adidas</h2>
                    </div>
                    {$staraiting}
                </div>
                <div class="d-block mr-3 text-center">
                    <img class="mt-2" height="50px" width="80px"
                     src="https://s3.amazonaws.com/stripgenerator/strip/36/54/95/00/00/full.png" alt="adidas logo">
                    <p class="fp-12">(2 отзыва)</p>

                </div>
                <div>
                    <h3 class="text-success text-center mt-3">140,890</h3>
                    <p  class="text-center text-black-50 fp-14">сум за 1шт</p>
                </div>

            </div>
        </div>
HTML,

    ]
]);


ZSlimScrollWidget::end();

