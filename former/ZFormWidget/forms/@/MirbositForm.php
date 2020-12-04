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


use zetsoft\former\eyuf\EyufExperienceForm;
use zetsoft\former\eyuf\EyufHigherEducationForm;
use zetsoft\former\eyuf\EyufHigherPublicationForm;
use zetsoft\former\eyuf\EyufHonoursForm;
use zetsoft\models\auto\ChatMessage;
use zetsoft\system\Az;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\system\actives\ZModel;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Достижения';
$action->icon = 'fa fa-rocket rss';


$model = new EyufHonoursForm();


?>


<div class="row">
    <div class="col-md-12 col-12">

        <?
        $this->pjaxBegin();

        $form = $this->activeBegin();


        $model = new ChatMessage();
        $model->sender = $this->userIdentity()->id;
        $model->receiver = 4;
        ?>

        <div class="d-flex">


            <?= $form->field($model, 'text') ?>
            <?= $form->field($model, 'file')->widget(ZFileInputWidget::class, [

            ]);

            $model->configs->nameOn = [
                'file','text'
            ];

            $model->configs->rulesAll = [

            ];
            ?>



        </div>
        <button type="submit" onclick="<?$this->modelSave($model);?>">Отправить</button>

        <?
        $this->activeEnd();

        $this->pjaxEnd();
        ?>



    </div>
</div>

