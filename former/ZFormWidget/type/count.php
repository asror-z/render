<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\former\auth\LoginForm;
use zetsoft\former\stat\StatHistoryForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\user\UserCompany;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;

$model = new ShopOrder();


if ($model->save()){
    $model->modelPost();
    
}
?>




<div class="row">
    <div class="col-md-12 col-12">

        <?

        $form = $this->activeBegin();



        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'config' => [
                'isCnt' => true,
                'count' => 44,
                'type' => ZFormWidget::type['allbl'],
            ]
        ]);


        $this->activeEnd();

        ?>

    </div>
</div>
