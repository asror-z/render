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


use zetsoft\former\files\ClassForm;
use zetsoft\former\auth\PhoneForm;
use zetsoft\former\eyuf\ExperienceForm;
use zetsoft\former\eyuf\HigherEducationForm;
use zetsoft\former\eyuf\HigherPublicationForm;
use zetsoft\system\Az;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\system\actives\ZModel;
use zetsoft\widgets\inputes\ZSelect2WidgetOLD;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Настройки Виджетов';
$action->icon = 'fa fa-rocket rss';
$this->pjaxBegin();

$model = new ClassForm();

echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'selectClass',
    ],
    'event' => [
        'complete' => <<<JS
    function(data) {
         $('#widget').html(data.responseText);
    }
JS,

    ]
]);

$model->configs->options = [
    'class' => [
        'config' => [
            'enableEvent' => true,
            'changeSubmit' => false,
        ],

        'event' => [
            'select' => <<<JS
    function() {
         selectClass('/webhtm/ALL/render/ajaxify/ZAjaxWidget/widget.aspx?widgetClass=' + $(this).val());
    }
JS,
        ]
    ]
];

?>

<div class="row">


<div class="col-md-6">

    <div class="col-md-12">

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
        ]);

        ZCardWidget::end();

        $this->activeEnd();

        ?>

    </div>
    
</div>

    <div class="col-md-6">

        <div id="widget" class="col-md-12">

        </div>
    </div>
</div>


<?
    $this->pjaxEnd();
?>
