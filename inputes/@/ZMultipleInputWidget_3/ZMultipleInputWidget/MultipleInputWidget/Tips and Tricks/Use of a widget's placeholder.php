
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
            'id' => 'my_id',
            'allowEmptyList' => false,
            'rowOptions' => [
                'id' => 'row{multiple_index_my_id}',
            ],
            'columns' => [
                [
                    'name'  => 'category',
                    'type'  => 'dropDownList',
                    'title' => 'Category',
                    'defaultValue' => '1',
                    'items' => [
                        '1' => 'Test 1',
                        '2' => 'Test 2',
                        '3' => 'Test 3',
                        '4' => 'Test 4',
                    ],
                    'options' => [
                        'onchange' => <<< JS
$.post("list?id=" + $(this).val(), function(data){
    console.log(data);
    $("select#subcat-{multiple_index_my_id}").html(data);
});
JS
                    ],
                ],
                [
                    'name'  => 'subcategory',
                    'type'  => 'dropDownList',
                    'title' => 'Subcategory',
                    'items' => [],
                    'options'=> [
                        'id' => 'subcat-{multiple_index_my_id}'
                    ],
                ],
            ]
    ]);
    ?>
