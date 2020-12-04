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


use zetsoft\dbitem\core\WebItem;
use zetsoft\former\shop\ShopFilterForm;
use zetsoft\former\auth\AuthPhoneForm;
use zetsoft\former\eyuf\EyufExperienceForm;
use zetsoft\former\eyuf\EyufHigherEducationForm;
use zetsoft\former\eyuf\EyufHigherPublicationForm;
use zetsoft\models\test\TestAsror;
use zetsoft\models\test\TestFile2;
use zetsoft\models\test\TestTerrabayt;
use zetsoft\models\ware\WareAccept;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\Az;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;

use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\system\actives\ZModel;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$action = new WebItem();


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->csrf = false;
$action->debug = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();


$model = new TestAsror();
$pjax = new ZPjax();
//$pjax->linkSelector = 'send';

?>

<br>
<br>
<br>

<?php


$this->pjaxBegin();


if ($this->modelSave($model) === true) {

}


/*echo ZButtonWidget::widget([
    'id' => 'send',
    'config' => [
        'text' => 'asd',
    ],
])*/


?>


<div class="row">
    <div class="col-6">

        <?

        $form = $this->activeBegin();

        ZCardWidget::begin([
            'config' => [
                'title' => $this->title,
                'type' => ZCardWidget::type['dynCard'],
            ]
        ]);

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,

            ]
        ]);

        echo ZButtonWidget::widget([
            'id' => 'sendValues',
            'config' => [
                'btnType' => ZButtonWidget::btnType['sweetBtn'],
                'hidden' => false,
                'text' => 'send form'
            ]
        ]);

        ZCardWidget::end();


        $this->activeEnd();

        ?>

    </div>

    <div class="col-6 asd">

        <?
        $data = $this->httpPost('AzimForm4');

        $this->modelPost();
        ?>
    </div>
</div>

<?
$this->pjaxEnd();
?>
