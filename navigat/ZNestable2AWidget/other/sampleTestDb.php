<?php

use kartik\builder\Form;
use zetsoft\models\shop\ShopCategory;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZNestable2WidgetDb;
use zetsoft\widgets\navigat\ZNestableTwoWidget;
use zetsoft\widgets\places\ZGoogleDbWidget;

//$model = $this->modelGet(\zetsoft\models\core\CoreCategory::class, 7);
/** @var ZView $this */
/*
 * $items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

echo "value";
echo "<pre>";
print_r($model->child);
echo "</pre>";

echo  ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [

                'jsonb_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZNestable2Widget::className(),
                    'options' => [
                        'config' => [
                            'searchAutoComplete' => true,
                            'searchPlaceImageShow' => true,
                            //'mapType' => 'hybrid',
                            'zoom' => '12'
                        ]
                    ]
                ],
            ]
        ],
    ]
]);

$this->activeEnd();*/
//Az::$app->tests->nestable->getVal()
echo ZNestable2WidgetDb::widget([
    'config' => [
        //'json' => ZNestable2Widget::jsonArray['json'],
        'json' => Az::$app->tests->nestable->getVal(),
        //'json' =>ZNestable2Widget::ff['json'],
        'modelClass' =>ShopCategory::class,
    ]
]);
    $model=new $this->_config['modelClass'];
?>
<button onclick="save()">Save</button>
<script>
    function save() {
        var Nestedtext = document.getElementsByClassName('text');
        var LastNested = Nestedtext[Nestedtext.length - 1].value;
        console.log(LastNested);

        $.ajax({
            url: "\service.aspx?namespace=tests&service=Nestable&method=SaveNested&args=" + {$model} ,
            success: function (event) {
                alert('ok');

            }
        });
    }
</script>

