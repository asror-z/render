<?php

use kartik\builder\Form;
use yii\helpers\Url;
use zetsoft\former\deps\FilterForm;
use zetsoft\models\core\CoreInput;
use zetsoft\models\dyna\DynaMulti;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZFileInputWidget;

$model = $this->modelGet(DynaMulti::class, 5);

/** @var ZView $this */
$items = Az::$app->forms->modelz->data();

?>

<div class="row">
    <div class="col-10">
        <?
        $form = $this->activeBegin();

        if ($this->modelSave($model))
            $this->modelPost();

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
        ]);

        $this->activeEnd();
        ?>
    </div>
</div>


