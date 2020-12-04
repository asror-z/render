<?php


use kartik\builder\Form;
use yii\web\JsExpression;
use yii\web\View;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 3);
/** @var ZView $this */

$items = \zetsoft\system\Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


$formatJs = <<< 'JS'
var formatRepo = function (repo) {
    if (repo.loading) {
        return repo.text;
    }
    var markup =
'<div class="row">' + 
    '<div class="col-sm-5">' +
        '<img src="' + repo.photo + '" class="img-rounded" style="width:30px" />' +
        '<b style="margin-left:5px">' + repo.text + '</b>' + 
    '</div>' +
    '<div class="col-sm-3"><i class="fa fa-code-fork"></i> '+repo.id+'</div>' +
    '<div class="col-sm-3"> '+repo.role+'</div>' +
    '<div class="col-sm-3"> '+repo.email+'</div>' +
    '<div class="col-sm-3"> '+repo.phone+'</div>' +
'</div>';
    if (repo.lang) {
      markup += '<p>' + repo.lang + '</p>';
    }
    return '<div style="overflow:hidden;">' + markup + '</div>';
};
var formatRepoSelection = function (repo) {
    return repo.text || repo.text;
}
JS;
$this->registerJs($formatJs, View::POS_HEAD);

$resultsJs = <<< JS
function (data, params) {
    params.page = params.page || 1;
    return {
        results: data.items,
        pagination: {
            more: (params.page * 30) < data.total_count
        }
    };
}
JS;


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                        'config' => [
                            'url' =>  '/core/tester/restjson/api3.aspx',
                            'tags' => true,
                            'multiple'=>true,
                            'ajax.result' =>  new JsExpression($resultsJs),
                            'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                            'templateResult' => new JsExpression('formatRepo'),
                            'templateSelection' => new JsExpression('formatRepoSelection'),
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();
