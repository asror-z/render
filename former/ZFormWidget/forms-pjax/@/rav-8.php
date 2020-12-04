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
use zetsoft\former\place\PlaceDepend;
use zetsoft\former\shop\ShopFilterForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\former\test\TestNurbekForm;
use zetsoft\former\test\TestNurbekFormThree;
use zetsoft\former\test\TestNurbekFormTwo;
use zetsoft\models\test\TestAsror;
use zetsoft\models\test\TestOrder;
use zetsoft\service\forms\Active;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Опыт работы';
$action->icon = 'fa fa-rocket rss';

$model = $this->modelGet(TestAsror::class, 111);
$model->configs->changeSave = false;
$this->modelSave($model);

?>

<div class="row">
    <div class="col-6">

        <?


        /*    $model->load($this->httpPost());
            $model->kernel();*/

        /*
            if (!empty($model->name))
                    vd($model->name);*/
        $this->pjaxBegin();

        $active = new Active();
        $active->id = 'sadfasd';

        $form = $this->activeBegin($active);


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
                'botBtn' => true,
            ]
        ]);


        echo ZButtonWidget::widget([
            'id' => 'asror',
            'config' => [
                'btnType' => ZButtonWidget::btnType['link'],
                'pjax' => true,
                'text' => 'AAAA'
            ]
        ]);


        ZCardWidget::end();

        $this->activeEnd();

        $this->pjaxEnd();
        ?>

    </div>


</div>


