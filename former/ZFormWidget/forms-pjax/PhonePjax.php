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
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Опыт работы';
$action->icon = 'fa fa-rocket rss';


$model = new ShopFilterForm();


$this->pjaxBegin();


if ($this->formModel($model) === true) {


}


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
                'btnType' => ZButtonWidget::btnType['link'],
                'pjax' => true,
                'hidden' => false,
                'text' => 'AAAA'
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

    <div class="col-6">

        <?
        $data = $this->httpPost('AzimForm4');

        $this->modelPost();
        ?>
    </div>
</div>

<?
$this->pjaxEnd();
?>
