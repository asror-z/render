<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<script src="/vendors/kartik-v/yii2-widget-depdrop/src/assets/js/depdrop.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" crossorigin="anonymous"></script>
<style>
    #page_module_id{
        display:block!important;
    }

</style>

<?php
use kartik\depdrop\DepDrop;
use kartik\form\ActiveForm;
use yii\helpers\Url;
use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\system\actives\ZAjaxForm;

$model = new PageModule();
$control = new PageControl();
$action = new PageAction();



$form=ActiveForm::begin();
// Parent




ActiveForm::end();
?>
