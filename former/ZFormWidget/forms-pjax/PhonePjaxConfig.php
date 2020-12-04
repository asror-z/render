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
use zetsoft\former\auth\AuthPhoneForm;
use zetsoft\former\eyuf\EyufExperienceForm;
use zetsoft\former\eyuf\EyufHigherEducationForm;
use zetsoft\former\eyuf\EyufHigherPublicationForm;
use zetsoft\service\forms\Active;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\Az;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;

use zetsoft\system\kernels\ZView;
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

$action = new WebItem();

$action->csrf = false;
$action->debug = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$model = new AuthPhoneForm();

$pjax = new ZPjax();

$this->pjaxBegin($pjax);
$this->modelPost();

if ($this->formModel($model) === true) {


    /*   $company = new UserCompany();
       $company->name = $model->name;
       $company->title = $model->password;
       $company->save();*/
}

?>


<div class="row">
    <div class="col-6">

        <?


        $active = new Active();
        $active->id = 'activeFormCheck';
        $active->showLabels = false;

        $form = $this->activeBegin($active);
        
/*
        echo ZButtonWidget::widget(['id' => 'sendValues',
            'config' => ['text' => 'send form',
                'btnType' => ZButtonWidget::btnType['button'],
               ]]);*/

        ZCardWidget::begin([
            'config' => [
                'title' => $this->title,
                'type' => ZCardWidget::type['dynCard'],
            ]
        ]);

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'event' => [
                'formChange' => <<<JS
                                function (event) {
                      e.preventDefault();    
                 $("#secondaryPhoneForm").click();                                      
                                }
JS
            ]
        ]);


        ZCardWidget::end();

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
