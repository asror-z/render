<?php

use yii\web\NotFoundHttpException;
use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\data\ButtonItem;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\FormDb;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\test\TestTerrabayt;
use zetsoft\system\helpers\ZInflector;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\system\module\Models;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetAs;
use zetsoft\widgets\former\ZDynaWidgetRav;
use zetsoft\widgets\inputes\ZFloatButtonRightWidget;
use zetsoft\widgets\menus\ZMmenuWidget;
use zetsoft\widgets\menus\ZMmenuWidgetSh;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\user\User;


/** @var ZView $this */


/**
 *
 * Action Params
 */


/** @var Models $model */


$this->beginPage();


$action = new WebItem();


$modelClassName = $this->bootFull(ZInflector::camelize($this->urlData(1)));

if (class_exists($modelClassName))
    $model = new $modelClassName();
else
    throw new NotFoundHttpException();

$action->title = Azl . $model->configs->title;
$action->icon = 'fal fa-graduation-cap';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->loader = false;

if ($this->httpGet('spa'))
    $action->debug = false;


$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();
/**
 *
 * Start Page
 */


//vdd(App);

?>

<div id="content" class="content-footer p-3">


    <div class="row">
        <div class="col-md-12 col-12">

            <?php

            $this->pjaxBegin();

            $model->configs->orderCheck = true;
            /*              $model->configs->editClass = FormDB::editClass['sweetAs'];*/
            $model->configs->type = Config::type['array'];
            /*  $model->configs->nameOn = [
                'name',
                'number',
                'code',
                'user_id',
            ];*/

            $model->query = ShopOrder::find()
                ->where([
                    'contact_phone' => '22-340-40-99'
                ]);

            $model->columns();
            echo ZDynaWidget::widget([
                'model' => $model,
                'config' => [
                    'chooseWhere' => [
                        'responsible' => 426
                    ],
                    'perfectScrollbar' => true,
                    //'updateUrl' => '/core/crud/update.aspx?shop_shipment_id={id}',
                ],
            ]);

            $this->pjaxEnd();
            ?>
        </div>
    </div>
</div>
