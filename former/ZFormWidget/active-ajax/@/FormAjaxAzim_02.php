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


use Google\Cloud\Talent\V4beta1\Phone;
use kartik\slider\Slider;
use zetsoft\former\ALL\AzimForm;
use zetsoft\former\ALL\AzimForm2;
use zetsoft\former\ALL\AzimForm3;
use zetsoft\former\auth\AuthPhoneForm;
use zetsoft\former\eyuf\EyufExperienceForm;
use zetsoft\former\eyuf\EyufHigherEducationForm;
use zetsoft\former\eyuf\EyufHigherPublicationForm;
use zetsoft\models\place\PlaceCountry;
use zetsoft\system\assets\ZAjaxForm;
use zetsoft\system\Az;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZFormWidgetAzim;
use zetsoft\widgets\incores\ZGrapesCheckboxWidget;
use zetsoft\widgets\incores\ZkFirstWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inptest\ZKSliderWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\system\actives\ZModel;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


$action->title = Azl . 'Опыт работы  2';
$action->icon = 'fa fa-rocket rss';
Az::$app->params['widget'] = true;


$form1 = new AzimForm();
$form2 = new AzimForm2();


?>
<div class="row">
    <div class="col-4">
        <?

        $activeForm = ZAjaxForm::begin([
            'id' => 'activeForm',
            'formConfig' => [
                'showLabels' => true,
            ],
        ]);

        echo ZFormWidget::widget([
            'model' => $form1,
            'form' => $activeForm ,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ]
        ]);
        echo ZFormWidget::widget([
            'model' => $form2,
            'form' => $activeForm ,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ]
        ]);

        echo ZButtonWidget::widget([
            'id' => 'sendValues',
            'config' => [
                'hidden' => false,
                'text' => 'send form'
            ]
        ]);

        ZAjaxForm::end()

        ?>

    </div>
    <div class="col-8 border content">
    
    </div>
</div>

<script>
    $('form').change(function () {
        $('#sendValues').click();
    });

    $(document).on('switchChange.bootstrapSwitch', function () {
        $('#sendValues').click();
    })

    $('#sendValues').click(function () {
        $.ajax({
            url: '/core/tester/umid/serverside.aspx',
            method: 'POST',
            data: $('#activeForm').serialize(),
            beforeSend: function (jqXHR) {
                console.log('beforeSend')
            },
            success: function (data) {
                $('.content').html(data)
            },
            error: function () {
                console.warn("you didnt check yet")
            }
        })
    })
</script>


