<?php


use zetsoft\former\chat\AnswerForm;
use zetsoft\former\deps\DataForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\former\eyuf\NeedForm;
use zetsoft\former\eyuf\ProductTest;
use zetsoft\former\shop\SizeForm;
use zetsoft\former\ALL\test\Test23Form;
use zetsoft\models\core\CoreInput;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\former\ZMultiWidgetNorm;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZGAccordionWidget;


$model = $this->modelGet(CoreInput::class, 1);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();

$active = new Active();
$active->id = 'formCheck';

$form = $this->activeBegin($active);
$this->modelSave($model);

//$data = array_flip(ZLang::lang);
//$data = array_merge($data, $model->accordioninputwidget);

$model = Az::$app->smart->widget->filterFormItems();

echo ZGAccordionWidget::widget([
    'config' => [
        'title' => 'Brands',
        'content' => ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ]
        ]),
    ]
]);


/*$model = Az::$app->smart->widget->getTypesFilter();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);*/

/*$model = Az::$app->smart->widget->getTypesFilter();
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'topBtn' => false,
        'botBtn' => false,
    ]
]);*/

$this->activeEnd();

?>

<script>


    $(document).on('change', 'form', function () {
        $('#checkValue').click();
    });

</script>


