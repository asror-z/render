<?php

use kartik\grid\DataColumn;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\drag\DragFormDb;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZDynaCheckWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZModalWidgetRavshan;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\shop\ShopOrder;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;
use zetsoft\widgets\phone\ZSipml5Widget44;
use zetsoft\widgets\phone\ZSipml5WidgetX;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Заказы';
$action->icon = 'fa fa-pie-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;



$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();


/**
 *
 * Start Page
 */

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <?php

    require Root . '/block/metas/' . App . '/main.php';
    require Root . '/block/assets/' . App . '/main.php';

    $this->head();

    ?>

</head>


<body class="<?= ZWidget::skin['white-skin'] ?>">


<?php

$this->beginBody();

echo ZNProgressWidget::widget([]);

?>

<div id="page">

    <?

    //require Root . '/blocks/navbar/main.php';

    echo ZSessionGrowlWidget::widget();?>


    <div id="content" class="content-footer p-3" ic-history-elt="">

        <!--<button id="autocall" class="btn btn-danger mt-3">AutoCall</button>-->

        <div class="row">

        


            <!--DynaWidget begin-->
            <div class="col-md-10">


                <div class="row">
                    <div class="col-md-12 col-12">

                        <?

                        $model = new ShopOrder();

                        $model->configs->nameOnEx = [
                            'contact_phone',
                            'date_deliver'
                        ];

                        $model->configs->after = [
                            'contact_name' => [
                                [
                                    'class' => ZKDataColumn::class,
                                    'label' => Az::l('звонки'),
                                    'width' => '50px',
                                    'value' => function ($model, $key, $index, DataColumn $dataColumn) {


                                        $clickedNumber = $model->contact_phone;

                                        $code = <<<JS
                                        function (event)
                                        {
                                           e.preventDefault(); 
                                          var phoneNumber = document.getElementById("txtPhoneNumber").value = "306";
                                          sipCall("call-audio");
                                           
                                           var currentId = e.currentTarget.parentNode.parentNode.getAttribute("data-key");
                                     
                                           //console.log(currentId);
                                         
                                            window.currentId = currentId;
                                        
                                        }
JS;

                                        $code = strtr($code, [
                                            '{number}' => $clickedNumber,
                                        ]);


                                        ZSweetAlert2Widget::begin([
                                            'grapesWrap' => false,
                                            'config' => [
                                                'grapes' => false,
                                                'funcName' => 'dynaSweetCall',
                                                'width' => '60%',
                                                'height' => '100vh',
                                                'begin' => true,
                                                'title' => Az::l('Редактировать'),
                                                'allowOutsideClick' => false,
                                                'showCloseButton' => true,
                                                'footer' => '',
                                                'padding' => '0',
                                            ]
                                        ]);

                                        ?>

                                        <iframe id="myIframe" src=""></iframe>

                                        <?php


                                        ZSweetAlert2Widget::end();

                                        /*Button*/

                                        return ZButtonWidget::widget([

                                            //'id' => 'settings-widget-' . $key,
                                            'config' => [
                                                'title' => Az::l('Звонить'),
                                                'icon' => 'fa fa-phone fa-2x text-success',
                                                'pjax' => 0,
                                                'btnSize' => ZColor::btnSize['btn-sm'],
                                                'btnRounded' => true,
                                                'btn' => false,
                                                'hasIcon' => true,
                                                'btnType' => ZButtonWidget::btnType['link'],
                                                'url' => '',
                                                //'color' => ZColor::color['green'],

                                            ],
                                            'event' => [
                                                'click' => $code


                                            ]
                                        ]);


                                    }
                                ],
                            ],

                        ];

                        //$this->require(Root );

                        $model->columns();


                        /** @var ZView $this */
                        echo ZDynaWidget::widget([
                            'model' => $model,
                            'config' => [
                                'hasToolbar' => false,
                                'actionButtons' => ['false'],
                                'columnBefore' => ['false'],
                                'columnAfter' => ['false'],

                                'paginationOptions' => [

                                    'defaultPageSize' => 5,

                                ],
                            ]
                        ]);

                        ?>

                    </div>
                </div>

            </div>


            <?php


            ?>


            <!--SIPML5 begin-->

            <div class="col-md-2">

                <?
                echo $this->require( '/render/phone/ZSipml5Widget/clean/iSIPML5local41.php');
                ?>
            </div>

        </div>

    </div>

</div>

<script>

    /*Timer*/

    var timer = document.getElementById("timer");
    var time = "00:00"
    var seconds = 0;
    var minutes = 0;
    var t;

    timer.textContent = time;

    function buildTimer() {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                seconds = 0;
            }
        }
        timer.textContent = (minutes < 10 ? "0" + minutes.toString() : minutes) + ":" + (seconds < 10 ? "0" + seconds.toString() : seconds);
    }

    function startTimer() {

        clearTimeout(t);
        t = setInterval(buildTimer, 1000);
        ;
    }

    function resetTimer() {

        timer.textContent = time;
        seconds = 0;
        minutes = 0;
    };


    //telefon olingandagi funksiya

    var dialingAnimationDiv = document.getElementById('dialingAnimationDiv');
    var btnHangUpDiv = document.getElementById('btnHangupDiv');


    tmedia_session_jsep01.onSetRemoteDescriptionSuccess = function (event) {


        tsk_utils_log_info("onSetRemoteDescriptionSuccess");

        var currentId = window.currentId;

        dialingAnimationDiv.classList.add('d-none');

        btnHangUpDiv.classList.remove('d-none');

        console.log(currentId)

        /*Run timer*/

        startTimer();
        resetTimer();


        dynaSweetCall();


        var iframe = $('#myIframe');

        iframe.attr('src', '/agent/xolmat/update.aspx?id=' + currentId)
        iframe.attr('height', '800px')
        iframe.attr('width', '60%')


        console.log('SUCCESS');

        var b = (tmedia_session_jsep01.mozThis || event);
        if (b) {
            if (!b.b_sdp_ro_pending && b.b_sdp_ro_offer) {
                b.o_sdp_lo = null
            }
        }
    };


    /*autocall*/

    var buttons = $("[aria-label='Звонить']");
    /*var selectedButtons = [];*/


    $('#autocall').click(function () {

        $( buttons ).each(function(index) {
            $(buttons)[index].classList.add("bg-danger");
            $(buttons)[index].click();
            //$(buttons)[0].setAttr("disabled");
            console.log($(this) + index);
            /*$( this ).addClass( "bg-danger" );*/
        });

    })





    /*function startAutoCall() {

        var i;
        for (i = 0; i < buttons.length; i++) {

        console.log(this)
        console.log(buttons[i])

        }

    }*/



</script>

<style>
    .main_block .block_item:last-child {
        width: 100%;
    }

    .main_block .or2 {
        padding-top: 0;
    }

    .main_block .block_item:first-child {
        height: auto;
    }
</style>


<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
