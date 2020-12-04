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
use zetsoft\models\test\TestAsror3;
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

$model = $this->modelGet(TestAsror3::class, 111);
$model->configs->changeSave = true;
/*$model->configs->order = [
    'id' => SORT_ASC
];*/

///$this->paramSet('redirect', true);

if ($this->modelSave($model)) {
           //  vdd($model->attributes);
}

/*return $this->redirect(['/user'], 200);

Yii::$app->response->getHeaders()->set('X-PJAX-Url',Url::to(['wall/show','id' => 2]));
*/

?>

<div class="row">
    <div class="col-6">

        <?


        /*    $model->load($this->httpPost());
            $model->kernel();*/

        echo date('Y/m/d H:i:s');


        ZCardWidget::begin([
            'config' => [
                'title' => $this->title,
                'type' => ZCardWidget::type['dynCard'],
            ]
        ]);


        $form = $this->activeBegin(function(Active $active) {
            $active->id = 'edit-form';
            return $active;
        });

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,

            'config' => [
                'topBtn' => true,
                'botBtn' => true,
            ]
        ]);


        $this->activeEnd();

        ZCardWidget::end();

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
        }
JS,

            ],
        ]);


        ?>

    </div>

</div>

<script>

  /*  $('#edit-form').on('change', function() {

        var formId = $(this).attr('id')
        var parent = $(this).parent()

        $.ajax({
            type: 'POST',
            url: '/core/dyna/form.aspx',
            data: {
                modelClassName: "<?=$model->className?>",
                modelId: <?=$model->id?>,
                formId: formId,
            },
            success: function(response) {
                console.log(response)
                parent.html(response)

            }
        })

    })*/

</script>




