<?php


use zetsoft\models\core\CoreInput;
use zetsoft\service\cores\Date;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKDatecontrolWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'date_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDatecontrolWidget::class,
                    'options' => [
                        'name' => 'begin_time',

                        'config'=>[
                            'type'=> ZKDatecontrolWidget::format['date'],
                            'displayFormat'=> 'php:'.Date::date,
                            'saveFormat'=> 'php:'.Date::date,
                            'displayTimezone'=>'',
                            'saveTimezone'=>'',
                            'isAutoWidget'=> true,
                            'widgetOptions'=>'',
                            'disabled'=> false,
                            'readonly'=> false,
                            'saveOptions'=>'',
                            'isAjaxConversion'=> true,
                            'isAsyncRequest'=> true,
                        ]
                    ],

                ],
            ]
        ],
    ],
]);

$this->activeEnd();




