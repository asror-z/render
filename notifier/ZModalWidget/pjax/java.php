<?php


use rmrevin\yii\fontawesome\FA;
use yii\widgets\Pjax;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZInputUniverseWidget;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZTextareaWidget;
use zetsoft\widgets\market\ZInputNumberWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZModalNewWidget;
use zetsoft\widgets\notifier\ZModalShahzod;
use zetsoft\widgets\notifier\ZModalWidget;
use zetsoft\widgets\notifier\ZModalWidgetD;
use zetsoft\widgets\notifier\ZModalWidgetJavohir;
use zetsoft\widgets\notifier\ZModalWidgetRavshan;
use zetsoft\widgets\notifier\ZModalWidgetShahzod;

/** @var ZView $this */
/** @var ZView $this */

echo date('H:i:s');

$this->pjaxBegin();

/*
$model = $this->modelGet(CoreInput::class, 10);


$this->modelSave($model);

if ($this->modelForm($model)) {

}*/


$post = $this->httpPost('ShopReview');

vd(ZArrayHelper::getValue($post, 'text'));

echo ZButtonWidget::widget([

        'event' => [
            'click' =>  'function(){$("#form-modal").modal(\'show\')}',
        ]
   
]);

ZModalWidgetD::begin([
    'id' => 'form',
    'config'=>[
        'isBtn' => false,
    ]
]);


//echo $this->require( '/webhtm/eyuf/shop/user/item-review/modal/review-reply.php');



ZModalWidgetD::end();
$this->pjaxEnd();
