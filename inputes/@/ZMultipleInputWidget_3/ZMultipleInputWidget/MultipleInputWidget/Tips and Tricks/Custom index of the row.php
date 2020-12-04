<?php


use kartik\builder\Form;
use unclead\multipleinput\MultipleInput;
use yii\bootstrap\Html;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo $form->field($model, 'field')->widget(MultipleInput::className(), [
            'allowEmptyList' => false,
            'data' => [
                3 => [
                    'day'       => '27.02.2015',
                    'user_id'   => 31,
                    'priority'  => 1,
                    'enable'    => 1
                ],

                'some-key' => [
                    'day'       => '27.02.2015',
                    'user_id'   => 33,
                    'priority'  => 2,
                    'enable'    => 0
                ],
            ]
        ]);
