<?php


use zetsoft\service\forms\Ajaxer;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

/** @var ZView $this */
$active = new Ajaxer();
$active->id = 'activeFormCheck';
$market_id = $market_id ?? null;
$active->formAction = "/core/product/setFilter.aspx?category_id={$item}&market_id={$market_id}";
$active->success = <<<JS
    function (response) {
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

$model = Az::$app->market->filter->filterFormItemsSession($item, $market_id);

if (!isset($model)) {
    echo '<div class="d-flex flex-column mt-5">
        <div class="d-flex justify-content-center mt-1"><i class="fas fa-filter fa-6x text-light"></i></div>
        <div class="align-self-center text-center fp-20 text-muted my-4">Для этих продуктов отсутствует фильтр</div>
       </div>';
}

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'topBtn' => false,
        'botBtn' => false,
    ],
]);

if (isset($model))
    echo ZButtonWidget::widget([
        'config' => [
            'text' => Az::l('Сбросить все'),
            'btnType' => ZButtonWidget::btnType['link'],
            'btnSize' => ZColor::btnSize['btn-md'],
            'btnRounded' => false,
            'class' => 'text-center d-flex justify-content-center',
            'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
            'url' => '/core/product/clearFilterFromSession.aspx',
        ],
    ]);

$this->ajaxEnd();
