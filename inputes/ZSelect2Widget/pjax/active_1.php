<?php


use zetsoft\service\forms\ZPjax;
use zetsoft\system\assets\ZColor;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\incores\ZDepDropWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\system\Az;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\inputes\ZSelect2Widget2;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = $this->modelGet(CoreInput::class, 3);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$this->modelSave($model);
$pjax = new ZPjax();
$this->pjaxBegin($pjax);

echo \zetsoft\widgets\inputes\ZSelect2Widget_::widget([
    'name' => 'sadsda',
    'data' => [
        'mt' => 'mt',
        'mt-2' => 'mt-2',
        'mt-3' => 'mt-3',
        'btn-lg' => 'btn-lg',
        'btn-sm' => 'btn-sm',
        'btn-primary' => 'btn-primary',
        'btn-success' => 'btn-success',
        'btn-danger' => 'btn-danger',
        'btn-warning' => 'btn-warning',
        'btn-info' => 'btn-info',
        'btn-dark' => 'btn-dark',
    ],
    'config' => [
        'enableEvent' => true,
        'multiple' => true,
        'placeholder' => '123',
    ],
]);


echo date('H:i:s');

echo ZButtonWidget::widget([
    'config' => [
        'url' => '',
        'hasIcon' => true,
        'btnType' => ZButtonWidget::btnType['link'],
        'btnStyle' => ZButtonWidget::btnStyle['none'],
        'btnRounded' => false,
        'text' => 'able forever',
        'pjax' => true,
        'hidden' => false,
        'title' => 'Обновление',
        'ttSize' => ZButtonWidget::ttSize['small'],
        'ttSide' => ZButtonWidget::ttSide['bottom'],
        'btn' => false,
        'class' => 'h-100 p-0 noHover',
        'iconColor' => 'white',

    ],
    'id' => 'zselect2able',
]);
$this->pjaxEnd();


