<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\builder\Form;
use zetsoft\former\deps\DataForm;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZJqueryPjaxWidget;
use zetsoft\widgets\former\ZMultistepformwizardWidget;
use zetsoft\widgets\former\ZMultiWidget;

?>


<div class="row" style="margin-top: 50px;">
      <div class="col">  <?php

            echo ZFormWidget::widget([

            ]);
            ?>
      </div>
</div>

<div class="row" style="margin-top: 50px;">
      <div class="col">  <?php

            echo ZAjaxWidget::widget([
                'config' => [
                    'func' => 'ajaxGrapes',
                    'dataType' => 'html',


                ],


            ]);
            ?>
      </div>
</div>

<div class="row" style="margin-top: 50px;">
      <div class="col">  <?php


            echo ZJqueryPjaxWidget::widget([
                'config' => [
                    'func' => 'pjaxtest',
                    'selector' => '#aaaaaaaaaaa',
                    'url' => '/render/former/ZJqueryPjaxWidget/samplehtm.html',
                    'type' => ZJqueryPjaxWidget::type['get'],
                    'dataType' => ZJqueryPjaxWidget::dataType['html'],
                    'container' => '#bbbb',
                ],

            ]);
            ?>
      </div>
</div>

<div class="row" style="margin-top: 50px;">
      <div class="col">  <?php
            echo ZMultistepformwizardWidget::widget([
                'config' => [
                    'steps' => [
                        [
                            'value' => 'account',
                            'itemID' => 'account'
                        ],
                        [
                            'value' => 'personal',
                            'itemID' => 'personal'
                        ],
                        [
                            'value' => 'payment',
                            'itemID' => 'payment'
                        ],
                        [
                            'value' => 'payment',
                            'itemID' => 'payment'
                        ],
                        [
                            'value' => 'payment',
                            'itemID' => 'payment'
                        ],
                        [
                            'value' => 'confirm',
                            'itemID' => 'confirm'
                        ],
                    ]
                ],

            ]);

            ?>
      </div>
</div>

<div class="row" style="margin-top: 50px;">
      <div class="col">  <?php
            echo ZFormWidget::widget([

                'rows' => [
                    [
                        'attributes' => [// 2 column layout
                            'jsonb_2' => array(
                                'type' => Form::INPUT_WIDGET,
                                'widgetClass' => ZMultiWidget::class,
                                'options' => [
                                      //'active' => LaptopForm::class,
                                    'formClass' => DataForm::class,

                                ]
                            ),

                        ]
                    ],


                ]
            ]);

            ?>
      </div>
</div>
