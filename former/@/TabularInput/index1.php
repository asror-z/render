<?php

use yii\bootstrap\ActiveForm;
use unclead\multipleinput\TabularInput;
use yii\helpers\Html;
use unclead\multipleinput\examples\models\Item;
use unclead\multipleinput\TabularColumn;
use zetsoft\models\auto\ChatMessage;
use zetsoft\models\user\User;
use zetsoft\system\kernels\ZView;


/** @var ZView $this */
/* @var $models Item[] */

$models = ChatMessage::find()->all();

?>

<?php

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


?>

<?= TabularInput::widget([
    'models' => $models,
    'modelClass' => ChatMessage::class,
    'cloneButton' => true,
    'sortable' => true,
    'iconSource' => TabularInput::ICONS_SOURCE_FONTAWESOME,
    'min' => 0,
    'addButtonPosition' => [
        //  TabularInput::POS_HEADER,
        TabularInput::POS_FOOTER,
        //  TabularInput::POS_ROW
    ],
    'layoutConfig' => [
        'offsetClass'   => 'col-sm-offset-4',
        'labelClass'    => 'col-sm-2',
        'wrapperClass'  => 'col-sm-10',
        'errorClass'    => 'col-sm-4'
    ],
    'attributeOptions' => [
        'enableAjaxValidation'   => true,
        'enableClientValidation' => false,
        'validateOnChange'       => false,
        'validateOnSubmit'       => true,
        'validateOnBlur'         => false,
    ],
    'form' => $form,
    'columns' => [
        [
            'name' => 'id',
            'type' => TabularColumn::TYPE_HIDDEN_INPUT
        ],
        [
            'name' => 'text',
            'title' => 'Message',
            'type' => TabularColumn::TYPE_TEXT_INPUT,
            'attributeOptions' => [
                'enableClientValidation' => true,
                'validateOnChange' => true,
            ],
            'defaultValue' => 'Test',
            'enableError' => true
        ],
        [
            'name' => 'time',
            'title' => 'Jonatilgan vaqti',
        ],
        [
            'name' => 'created_at',
            'type'  => '\kartik\date\DatePicker',
            'title' => 'Day',
            'defaultValue' => '1970/01/01',
            'options' => [
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'dd/mm/yyyy',
                    'todayHighlight' => true,
                ],

            ],
            'headerOptions' => [
                'style' => 'width: 250px;',
                'class' => 'day-css-class'
            ]
        ],
    ],
]) ?>


<?= Html::submitButton('Update', ['class' => 'btn btn-success']); ?>
<?php

$this->activeEnd();

