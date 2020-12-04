<div style="width: 500px;">
<?php

/**
 *
 *
 * Author:  Dilshodjon Olimov
 *
 *
 */

use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\themes\ZCardWidget;
$model = $this->modelGet(CoreInput::class, 3);
/** @var ZView $this */

$items = \zetsoft\system\Az::$app->forms->modelz->data();
$this->modelSave($model);
ZCardWidget::begin([
    'config' => [
        'title' => 'ZetSoft Enterprice LLC',
    ]
]);

echo ZFormWidget::widget([
    'model' => $model,
    'rows' => [
        [
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                            'config' => [
                            'url' => '/core/tester/restjson/api2.aspx',
                            'tags' =>true,
                            'multiple' => false,
                            'ajax.data' => true,
                            'ajax.result' => true,
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

ZCardWidget::end();
 ?>
</div>
