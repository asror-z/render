<?php
/**
 * @author Muminov Umid
 */

use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKSliderIonWidget;


$model = $this->modelGet(CoreInput::class, 8);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);


echo ZKSliderIonWidget::widget([
    'name' => 'price_filter',
    'config' => [
        'skin' => ZKSliderIonWidget::skin['modern'],
        'min' => 12213,
        'max' =>65767,
        'from' => 7878,
        'to' => 45354,
        'inputs_show' => true,
        'title' => "Цена в",
    ],
    'event' => [
        'onfinish' => <<<JS
    function() {
            alert()
    }
JS,

        'onchange' => <<<JS
    function() {
        console.log('chamnge')
    }
JS,

    ]
]);


$this->activeEnd();

