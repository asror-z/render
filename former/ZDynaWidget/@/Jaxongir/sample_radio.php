<?php


use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\Order;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetJaxongir;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;

 
$model = new CoreAdvancedItem();


/*echo ZDynaWidget::widget([
    'model' => $model,

]);*/ ?>




    <div id="content" class="content-footer p-3" ic-history-elt="">




        <div class="row">
            <div class="col-md-12 col-12">

<?php
echo ZDynaWidgetJaxongir::widget([
    'model' => $model,
    'config' => [
        'columnCheckbox' => false,
        'columnRadio' => true
    ]

]);
    ?>

            </div>
        </div>
