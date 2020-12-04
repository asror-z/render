<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


/* render/menus/ZChatSidebarWidget
render/menus/ZMenuEditorWidget
render/menus/ZMetisMenuWidget
render/menus/ZMMmenuWidget
 *
 * */

use kartik\builder\Form;
use kartik\detail\DetailView;
use zetsoft\former\deps\DataForm;
use zetsoft\former\eyuf\NeedForm;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\former\ZAccardionWidget;
use zetsoft\widgets\former\ZAjaxForm;
use zetsoft\widgets\former\ZAjaxQWidget;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZBootstrapModalWidget;
use zetsoft\widgets\former\ZDynaArrayGridWidget;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZDynaSearchWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetD;
use zetsoft\widgets\former\ZExpandableSearchWidget;
use zetsoft\widgets\former\ZExportBtnWidget;
use zetsoft\widgets\former\ZExportMenuWidget;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZJqueryPjaxWidget;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZListViewWidgetOld;
use zetsoft\widgets\former\ZMultistepformwizardWidget;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\former\ZSearchAutoAjaxWidget;
use zetsoft\widgets\former\ZSmartWizardWidget;
use zetsoft\widgets\former\ZTableWrapWidget;
use zetsoft\widgets\former\ZTopSearchWidget;
use zetsoft\widgets\former\ZViewWidget;
use zetsoft\widgets\former\ZWizardStepsWidget;
use zetsoft\widgets\menus\ZChatSidebarWidget;
use zetsoft\widgets\menus\ZMenuEditorWidget;
use zetsoft\widgets\menus\ZMetisMenuWidget3;

?>

   <!-- <div class="row">
        <div class="col">
            <?/*
            echo ZAccardionWidget::widget([

            ]);


            */?>

        </div>
    </div>-->

    <div class="row">
        <div class="col">
            <?
            echo ZKSliderWidget::widget([
                  'config'=> [

                  ]
            ]);

            ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
             <?
             echo ZAjaxQWidget::widget([
                 'config' => [
                     'func' => 'first',
                     'dataType' => 'html',
                     'url' => "/ravshan/ravshan/information.aspx",

                 ],
                 'event' => [
                     'complete' => <<<JS
        function myFunction(text){
            //var value = JSON.parse(text.responseText);
           $('#firstPre').text(text.responseText);
           console.log(text.responseText);
        }
JS,
                 ]

             ]);
             ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
             <?
             echo ZBootstrapModalWidget::widget([]);
             ?>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            echo ZAjaxWidget::widget([
            'config' => [
            'func' => 'ajax',
            'url' => '/core/tester/ajax/test.aspx',
            'type' => ZAjaxWidget::type['get'], //"POST", "GET", "PUT"

            ],


            ]);

            ?>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            echo ZArrayWidget::widget([
                'model' => new NeedForm(),
            ]);


            ?>
        </div>
    </div>


    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php

            echo ZDynaSearchWidget::widget([]);

            ?>
        </div>
    </div>


    <!--<div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
/*            $model = new Document();

            echo ZDynaWidgetD::widget([
                'model' => $model
            ]);

            */?>
        </div>
    </div>-->

    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            echo ZExpandableSearchWidget::widget([]);


            ?>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            echo ZExportBtnWidget::widget([
                'config' => [
                    'hidden' => true,
                    'action' =>  'export',
                    'modelClassName' => 'Document',
                ]
            ]);


            ?>
        </div>
    </div>

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

  <!--  <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
/*            echo ZSearchAutoAjaxWidget::widget ([

            ]);

            */?>
        </div>
    </div>-->

    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            echo ZSmartWizardWidget::widget([
                'config' => [

                ],
                'data' => [
                    ['Step1 title', 'Step1 Subtitle', 'Step1 text'],
                    ['Step2 title', 'Step2 Subtitle', 'Step2 text'],
                    ['Step3 title', 'Step3 Subtitle', 'Step3 text'],
                    ['Step4 title', 'Step4 Subtitle', 'Step4 text'],
                    ['Step5 title', 'Step5 Subtitle', 'Step5 text'],
                    ['Step6 title', 'Step6 Subtitle', 'Step6 text'],

                ]
            ]);

            ?>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            echo ZTableWrapWidget::widget([]);

            ?>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            echo ZTopSearchWidget::widget([

            ]);

            ?>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col">  <?php
            $model = new EyufScholar();
            echo ZViewWidget::widget([
                'model' => $model,

            ]);

            ?>
        </div>
    </div>








<?


/*render/former/ZAccardionWidget 
render/ajaxify/ZAjaxFormWidget
render/ajaxify/ZAjaxQWidget
render/ajaxify/ZAjaxWidget
render/former/ZArrayWidget
render/former/ZBootstrapModalWidget
render/former/ZDynaSearchWidget






render/former/ZExpandableSearchWidget



render/former/ZFormWidget
render/former/ZGrapesJsWidget
render/former/ZIframeWidget
render/former/ZJqueryFormHelperWidget
render/former/ZJqueryPjaxWidget
render/former/ZKEditableWidget
render/former/ZListViewWidgetOld
render/former/ZMultistepformwizardWidget
render/former/ZMultiWidget
render/former/ZPaulziFormWidget
render/former/ZPlauziFormWidget
render/former/ZSearchAutoAjaxWidget
render/former/ZSmartWizardWidget
render/former/ZTableWrapWidget
render/former/ZTopSearchWidget
render/former/ZViewWidget
render/former/ZWizardStepsWidget        */

/*render/former/ZDetailWidget
render/former/ZCheckButtonWidget
render/former/ZDynaWidget
render/former/ZDynaWidgetD
render/former/ZExportBtnWidget
render/former/ZGrapesJsWidget duplicate

*/
