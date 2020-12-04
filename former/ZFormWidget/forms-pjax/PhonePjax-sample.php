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


        ZCardWidget::end();


        echo ZButtonWidget::widget([
            'id' => 'sendValues',
            'config' => [
                'btnType' => ZButtonWidget::btnType['link'],
                'pjax' => true,
                'url' => $this->urlMain,
                'hidden' => false,
                'text' => 'AAAA'
            ]
        ]);

        $this->activeEnd();

        ?>

    </div>

    <div class="col-6">

        <?

        ?>
    </div>
</div>

<?
$this->pjaxEnd();
?>
