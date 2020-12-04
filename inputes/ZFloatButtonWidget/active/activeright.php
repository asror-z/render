<?
use zetsoft\dbitem\data\ButtonItem;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\former\ZIframeSpaWidget;
use zetsoft\widgets\inputes\ZFloatButtonRightWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\dbitem\core\WebItem;
use zetsoft\models\shop\ShopOrder;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZCheckDependWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZExportBtnWidget;
use zetsoft\widgets\menus\ZMmenuWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;

//Item1

$buttonItems = [];
$buttonItem = new ButtonItem();
$buttonItem->content = ZIframeSpaWidget::widget([
    'id' => $this->modelClassName,
    'model' => $this->model,
    'config' => [
        'url' => '',
        'key' => 1,
        'type' => ZIframeSpaWidget::type['view'],
        'formId' => $this->modelClassName,
        'funcName' => 'dynaView',
        'title' => 'asd',
        'src' => '/render/former/ZDynaWidget/assets/img/view.svg',
        'img' => true,
        'hasIcon' => false,
        'icon' => 'fa'
    ]
]);

$buttonItems [] = $buttonItem;

//Item2
$buttonItem = new ButtonItem();
$buttonItem->content = ZIframeSpaWidget::widget([
    'id' => $this->modelClassName,
    'model' => $this->model,
    'config' => [
        'url' => '',
        'key' => 2,
        'type' => ZIframeSpaWidget::type['view'],
        'formId' => $this->modelClassName,
        'funcName' => 'dynaView',
        'title' => 'asd',
        'src' => '/render/former/ZDynaWidget/assets/img/info.svg',
        'img' => true,
        'hasIcon' => false,
        'icon' => 'fa'
    ]
]);

$buttonItems [] = $buttonItem;

//Item3
$buttonItem = new ButtonItem();
$buttonItem->content = ZIframeSpaWidget::widget([
    'id' => $this->modelClassName,
    'model' => $this->model,
    'config' => [
        'url' => '',
        'key' => 3,
        'type' => ZIframeSpaWidget::type['view'],
        'formId' => $this->modelClassName,
        'funcName' => 'dynaView',
        'title' => 'asd',
        'src' => '/render/former/ZDynaWidget/assets/img/items.svg',
        'img' => true,
        'hasIcon' => false,
        'icon' => 'fa'
    ]
]);

$buttonItems [] = $buttonItem;

echo ZFloatButtonRightWidget::widget([
    'data' => $buttonItems,
]);
?>
