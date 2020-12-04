<?php

/**
 * Author:  Nurmukhammadov Shakhrizod
 */

use zetsoft\former\core\CoreAcceptForm;
use zetsoft\service\forms\Active;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormBuildWidget;


$wareResult = new CoreAcceptForm();
/** @var ZView  $this */
$this->pjaxBegin();
$active = new Active();
$active->type = Active::type['vertical'];
$form = $this->activeBegin($active);


echo ZFormBuildWidget::widget([
    'model' => $wareResult,
    'form' => $form,
    'config' => [
        'isCard' => true,
        'isStepVertical' => true,
        'btnTitle' => 'Рассчитать',
        'botBtn' => false,
        'topBtnPjax' => 1,
        'parentClass' => 'd-flex justify-content-around',
        'stepType' => ZFormBuildWidget::stepType['card'],
        'blockType' => ZFormBuildWidget::blockType['naked'],
    ]
]);


$this->activeEnd();
$this->pjaxEnd();
