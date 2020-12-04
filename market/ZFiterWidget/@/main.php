<?php


use zetsoft\service\forms\Ajaxer;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;


$active = new Ajaxer();
$active->id = 'activeFormCheck';
$active->formAction = "/core/product/setFilter.aspx?id={$item}";
$active->success = <<<JS
    function(response) {
        
        $('#cards-filter').html(response);
        let lS=window.localStorage;
        let items=$('.appendTo .zcol,.appendTo .zlist');
        let zcol=$('.zcol');
        let zlist=$('.zlist');
        
        if (lS.getItem('grid')==='switch_to_list') {
            zcol.hide();
            zlist.show();
            $('#switch_to_col').addClass('text-success');
            $('#switch_to_col').removeClass('btn-success');
            $('#switch_to_list').removeClass('text-success');
            $('#switch_to_list').addClass('btn-success');
        } else {
            zcol.show();
            zlist.hide();
            $('#switch_to_list').addClass('text-success')
            $('#switch_to_list').removeClass('btn-success')
            $('#switch_to_col').removeClass('text-success');
            $('#switch_to_col').addClass('btn-success');
        }
        
        $('.lds-roller').hide()
                                       
    }
JS;


$form = $this->ajaxBegin($active);

$model = Az::$app->market->filter->filterFormItemsSession($item, null);
//vdd($item);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'topBtn' => false,
        'botBtn' => false,
    ],
]);

echo ZButtonWidget::widget([
    'config' => [
        'text' => Az::l('Сбросить все'),
        'btnType' => ZButtonWidget::btnType['link'],
        'btnSize' => ZColor::btnSize['btn-md'],
        'btnRounded' => false,
        'class' => 'text-center',
        'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
        'url' => '/core/product/clearFilterFromSession.aspx',
    ],
]);

$this->ajaxEnd();
