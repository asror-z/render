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
use zetsoft\former\auth\AuthPhoneForm;
use zetsoft\former\eyuf\EyufExperienceForm;
use zetsoft\former\eyuf\EyufHigherEducationForm;
use zetsoft\former\eyuf\EyufHigherPublicationForm;
use zetsoft\models\place\PlaceCountry;
use zetsoft\system\Az;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZFormWidgetAzim;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inptest\ZKSliderWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\system\actives\ZModel;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Опыт работы';
$action->icon = 'fa fa-rocket rss';
Az::$app->params['widget'] = true;


$model = new AzimForm();

?>
<div class="row">
    <div class="col-4">
        <?

        $form = $this->activeBegin();
        echo ZFormWidgetAzim::widget([
            'model' => $model,
            'form' => $form,
            'config' => [

                'topBtn' => false,
                'botBtn' => false,
            ]
        ]);


    /*    echo ZFormWidgetAzim::widget([
            'model' => $model,
            'form' => $form,
            'config' => [

                'topBtn' => false,
                'botBtn' => true,
            ]
        ]);*/

        $this->activeEnd();
        ?>

    </div>
    <div class="col-8 border contentSyuda">
        <div class="row1"></div>
        <div class="row2"></div>
        <div class="row3"></div>
        <div class="row4"></div>
        <div class="row5"></div>
    </div>
</div>


