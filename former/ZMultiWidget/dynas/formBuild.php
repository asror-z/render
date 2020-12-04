<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\models\dyna\DynaMulti;
use zetsoft\service\forms\Active;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZInputBtnWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\navigat\ZButtonWidget;


$model = new DynaMulti();

$active = new Active();
$active->id = 'dynaFilterForm';
$form = $this->activeBegin($active);

if ($this->modelSave($model)) {
    $this->paramSet(paramIframe, true);
    $this->modelPost();
    $this->urlRedirect(['/' . $this->httpGet('url'), 'dynaMulti' => $model->id], false);
}

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'topBtn' => true,
        'botBtn' => false,
    ]
]);


?>
<h3 class="text-center">Сохранённые фильтры:</h3>
<?php

$data = Az::$app->market->filterForm->getDynaFilterNames();

?>
<div class="row">
    <div class="col-md-6">

        <?
        echo ZInputBtnWidget::widget([
            'id' => 'inputBtn',
            'event' => [
                'buttonClick' => <<<JS
            function() {
                let inputValue = $('#inputBtn').val()
                console.log(inputValue)            
            }
JS,

            ]
        ]);
        ?>

    </div>

    <div class="col-md-6">
        <? echo ZSelect2Widget::widget([
            'data' => $data,
            'name' => 'name',
            'value' => null,
            'config' => [
                'placeholder' => 'pplll'
            ]
        ]);

        echo ZButtonWidget::widget([
            'config' => [
                'btn' => true,
                'btnType' => ZButtonWidget::btnType['button'],
                'btnStyle' => ZButtonWidget::btnStyle['btn-transparent'],
                'btnRounded' => true,
                'btnFloating' => false,
                'btnSize' => ZColor::btnSize['default'],
                'text' => 'text'
            ],
            'event' => [
                'click' => <<<JS
            function() {
                console.log('test')  
            }
JS,

            ]
        ]);

        ?>
    </div>
</div>

<? $this->activeEnd(); ?>


