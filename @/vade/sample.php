<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/15/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\models\page\PageBlocks;
use zetsoft\models\vade\Company;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZDetailWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;

/*ZRowWidget::begin();
ZColWidget::begin([
   // 'config' => ['width' => 12]
]);*/


/** @var ZView $this */
$model = $this->modelGet(PageBlocks::class, 1);

$this->modelSave($model);

try {
    echo ZFormWizardWidget::widget([
        'model' => $model,
        'names' => [
            'id',
            'name',
            'title',
            'photo',
            ''
        ]
    ]);
} catch (Exception $e) {
}

echo ZDetailWidget::widget([
    'model' => $model,
     'columns' => [
         'id',
         'name',
         'title',
         'photo',
     ],
]);

/*ZColWidget::end();
ZRowWidget::end();*/

