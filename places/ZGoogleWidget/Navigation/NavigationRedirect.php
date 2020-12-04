<?php
/** Author: Zoirjon Sobirov*
 * @zoirjon_sobirov in @ll social media
 *
 */

use kartik\builder\Form;
use yii\data\Pagination;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\maps\MapsTrack;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZFormWidgetJ;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\menus\ZMmenuWidget;
use zetsoft\widgets\menus\ZMmenuWidgetSh;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\shop\ShopShipment;
use yii\widgets\LinkPager;
use zetsoft\widgets\places\ZGoogleZoirNavigation;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();
//Отслеживание товаров

$action->title = Azl . 'Отслеживание товаров';
$action->icon = 'fa fa-wifi';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;



$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();
/*
$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
$items = Az::$app->forms->modelz->data();

$coors1 = Az::$app->market->wares->coordinatesTarget(53);
vd($orderAddress = $coors1['ordersAdress']);
$waresAddress = $coors1['waresAdress'];
  */
$url = Az::$app->market->wares->urlGenerator(53);
header("Location:".$url);
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

require Root . '/blocks/header/' . App . '/main.php';
/*echo ZMmenuWidget::widget([
    //'data' => $this->cores->menus->create('mmenu'),
    'config' => [
        'theme' => 'white',
        'content.img.width' => 230,
        'iconbar.top' => [
            "<a href='#/'><i class='fa fa-home'></i>cc</a>",
            "<a href='#/'><i class='fa fa-home'></i>cc</a>",
        ],
        'iconbar.bottom' => [
            "<a href='#/'><i class='fa fa-home'></i>aa</a>",
            "<a href='#/'><i class='fa fa-home'></i>cc</a>",
        ],
        'all.border' => ZMmenuWidget::border['border-full'],
        'menu-effect-slide' => true,
    ],
]); */
?>

<div id="page">

   <?

   require Root . '/blocks/navbar/admin.php';


   echo ZSessionGrowlWidget::widget();



   ?>
</div>
<div id="content" class="content-footer p-3" ic-history-elt="">


   <div class="row">
      <div class="col-md-12 col-12 position-relative">

         <?

         $active = new Active();


         $active->type = Active::type['horizontal'];
         $active->enableLabel = false;
         $form = $this->activeBegin($active);

         /*echo ZFormWidgetJ::widget([
             'model' => $model,
             'form' => $form,
             'rows' => [
                 [
                     'attributes' => [
                         'jsonb_6' => [
                             'type' => Form::INPUT_WIDGET,
                             'widgetClass' => \zetsoft\widgets\places\ZGoogleZoirReadyNavigation2::className(),
                             'options' => [
                                 'config' => [
                                    //'data' => [3,9,18,65],
                                     'height' => 500,
                                     'width' => 800,
                                     'searchAutoComplete' => true,
                                     'searchPlaceImageShow' => false,
                                     'zoom' => 12,
                                     'markerCount' => 5,
                                     'limitWayPoints' => 10,
                                     'draggable' => true,
                                     'mapUseType' => 'read',
                                     'depend' => 'coreinput-string_9',
                                     'orderAddress' => $orderAddress,
                                     'waresAddress' =>
                                         $waresAddress
                                 ]
                             ]
                         ],
                     ]
                 ],


             ],

         ]);    */
         $this->activeEnd();
         ?>

      </div>
   </div>


</div>


<div class="footer-change">
   <?
   echo $this->require( '\blocks\footer\mplace\footerAll.php');
   ?>
</div>
</div>


<?php $this->endBody() ?>



</body>
</html>

<?php $this->endPage() ?>
