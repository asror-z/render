    <?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\editable\Editable;
use zetsoft\former\shop\SizeForm;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZEditRavWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2Widget;

$form = $this->activeBegin();

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 3);


echo ZEditRavWidget::widget([
    'model' => $model,
    'attribute' => 'jsonb_1',
    'data' => [
        '11111',
        '22222',
        '33333',
        '44444',
        '55555',
        '66666',
        '77777',
    ],
    
    //'editableValueOptions'=>['class'=>'text-success h2']
]);

$this->activeEnd();




