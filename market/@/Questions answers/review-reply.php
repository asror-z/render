<?php

use yii\caching\TagDependency;
use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\data\TabItem;
use zetsoft\former\auth\RegisterForm;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\models\faqs\Faqs;
use zetsoft\models\shop\ShopReview;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;

use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\cards\ZAzCardWidget;

use zetsoft\widgets\former\ZAccardionWidget;
use zetsoft\widgets\former\ZDynaWidgetPop;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZListViewWidget;
use zetsoft\widgets\incores\ZFaqAccordionWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZTextAreaWidget;
use zetsoft\widgets\market\ZFooterAllWidget1;
use zetsoft\widgets\market\ZMenuWidgetAbdulloh;
use zetsoft\widgets\market\ZMSwiperDbWidget;
use zetsoft\widgets\market\ZMSwiperWidget;
use zetsoft\widgets\menus\ZSidebarWidget;
use zetsoft\widgets\navigat\ZAAccordionWidget;
use zetsoft\widgets\navigat\ZAccLayWidget;
use zetsoft\widgets\navigat\ZAccLayWidget3;
use zetsoft\widgets\navigat\ZAccLayWidgetNew;
use zetsoft\widgets\navigat\ZAccLayWidgetTest;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\navigat\ZLiloAccordionWidget;
use zetsoft\widgets\navigat\ZLiloAccordionWidgetM;
use zetsoft\widgets\navigat\ZShowMoreWidget;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZTabWidget;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'History';
$action->icon = 'fa fa-area-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;

$action->cache = false;

$action->call = [
//    TagDependency::invalidate()
];
$action->cacheHttp = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();
/** @var ZView $this */
$this->paramSet('widget', true);
$this->paramGet('widget');
$this->beginPage();

$userId =$this->userIdentity()->id;

$reviewId= $this->httpGet('id');
$type= $this->httpGet('type');

$item = ShopReview::findOne($reviewId);
$user = User::findOne($item->user_id);

$model = new ShopReview();
$model->configs->nameOn =[
    'text',
    'photo'
];
$model->columns();

if ($this->modelSave($model)) {
    /*$model->user_id = $userId;*/
    $model->user_id = 47;

    $model->type = $type;
    $model->shop_product_id = $item->shop_product_id;
    $model->rating = 0;
    $model->parent_id = $reviewId;
  //  $model->user_id = $userId;
    //$model->text = 'qwe';
    $model->like = 0;
    $model->dislike = 0;
    $model->save();

    //return $this->redirect();
 // return  $this->urlGoBack();

  return $this->urlRedirect(['/shop/user/review/review','id'=>$reviewId]);

}

/**
 * @property int $id
 * @property string $type
 * @property int $core_brand_id
 * @property int $core_product_id
 * @property int $user_company_id
 * @property float $rating
 * @property string $text
 * @property string $parent_id
 * @property int $user_id
 * @property int $like
 * @property int $dislike
 * @property string $created_at
 * @property string $modified_at
 * @property int $created_by
 * @property int $modified_by
 */



// vdd($content);
?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>

        <?php

        require Root . '/block/metas/' . App . '/main.php';
        require Root . '/block/assets/' . App . '/main.php';

        //require Root . '/render/menus/ZSidebarWidget/ready/main.php';

        $this->head();

        ?>

    </head>
    <body class="<?= ZWidget::skin['white-skin'] ?>">

    <div class="card view view-cascade overlay container pt-4 pr-4 pl-4 pb-1 mt-1">
        <?php $this->beginBody(); ?>

        <?php $form = $this->activeBegin();?>

        <?php


        echo $this->require( '\render\market\ZCommentWidget\clean\reviewJavohir.php', [
            'item' => $item,
            'user' => $user,
        ]);

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ],
        ]);

        ?>

        <div class="float-right">
            <?
            echo ZButtonWidget::widget([

                'config' => [
                    'btnType'=> 'submit',
                    'text' => Az::l('Send'),
                    'btnStyle'=>'btn-success',
                    'btnSize'=>'btn-md mt-0',
                ]
            ]);
            ?>
        </div>



        <?php $this->activeEnd();?>
        <?php $this->endBody() ?>
    </div>

    </body>
    </html>
    <style>
        .cke_contents{
            height :60%!important;
        }
        .file-drop-zone-title{padding: 10px!important;}
        .kv-fileinput-caption{
            margin-top: 0.8rem;
        }
        .input-group-append{
            margin: 0!important;
            padding: 0!important;
        }
    </style>
<?php $this->endPage()


?>



