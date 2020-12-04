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
use zetsoft\models\test\TestAsror2;
use zetsoft\models\test\TestOrder;
use zetsoft\service\forms\Active;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$action = new WebItem();


$action->title = Azl . 'Опыт работы';
$action->icon = 'fa fa-rocket rss';

$model = $this->modelGet(TestAsror2::class, 111);
$model->configs->changeSave = true;


///$this->paramSet('redirect', true);

$this->modelSave($model);


$model->columns();

?>

<div class="row">
    <div class="col-6">

        <?


        /*    $model->load($this->httpPost());
            $model->kernel();*/

        /*
            if (!empty($model->name))
                    vd($model->name);*/

        $pjax = new ZPjax();
        $pjax->id = 'asrorz';
        $pjax->container = '#sadfasd';

        $this->pjaxBegin($pjax);
        
        echo date('Y/m/d H:i:s');

        
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


        echo date("Y-m-d H:i:s");

        echo ZButtonWidget::widget([
            'config' => [
                'title' => 'Ссылка',
                'icon' => 'fas fa-external-link-alt',
                'pjax' => false,
                'btnRounded' => false,
                'btn' => false,
                'hasIcon' => true,
            ],
            'active' => [
                'click' => true,
              
            ],
            'event' => [
                'click' => <<<JS
function(event){
console.log('ZButtonWidget | click');
           
           
         /*   $.pjax.reload({
                    container: '#asrorz', 
                    async:false,
               });*/
}

JS,
            
            ],
        ]);


        ZCardWidget::end();

        $this->activeEnd();
        $this->pjaxEnd();

        ?>

    </div>


</div>


