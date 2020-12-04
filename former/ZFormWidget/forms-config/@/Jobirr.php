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


use zetsoft\former\eyuf\EyufAdditionalEducationForm;
use zetsoft\former\eyuf\EyufHigherEducationForm;
use zetsoft\former\eyuf\EyufHigherPublicationForm;
use zetsoft\service\forms\Active;
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
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Дополнительное образование';
$action->icon = 'fa fa-rocket rss';


$model = new EyufAdditionalEducationForm();

if ($this->formModel($model) === true) {

    $this->modelPost();

     /*
      *
      *
       $company = new UserCompany();
       $company->name = $model->name;
       $company->title = $model->password;
       $company->save();
       *
       *
       *
     */

}

?>


<div class="row">
    <div class="col-md-12 col-12">

        <?
        
        $mirbo = new Active();
        $mirbo->id = 'mikrbo';
        $mirbo->formAction = '#';
        $mirbo->labelSpan = 6;
        $mirbo->enableLabel = false;
        $mirbo->pjax = true;

        $form = $this->activeBegin($mirbo);

        ZCardWidget::begin([
            'config' => [
                'title' => $this->title,
                'type' => ZCardWidget::type['dynCard'],
            ]
        ]);

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
        ]);

        ZCardWidget::end();

        $this->activeEnd();

        ?>

    </div>
</div>

