<?php

use kartik\widgets\Select2;
use yii\web\JsExpression;
use yii\web\View;

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

// Register the formatting script
$this->registerJs($formatJs, View::POS_HEAD);

// script to parse the results into the format expected by Select2
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
// render your widget
echo Select2::widget([
    'name' => 'kv-repo-template',
    'value' => '14719648',
    'initValueText' => 'kartik-v/yii2-widgets',
    'options' => ['placeholder' => 'Search for a repo ...'],
    //'theme' => Select2::THEME_MATERIAL,
   // 'theme' => Select2::THEME_BOOTSTRAP,
    //'theme' => Select2::THEME_CLASSIC,
    'theme' => Select2::THEME_DEFAULT,
    'pluginOptions' => [

        'allowClear' => true,
        'minimumInputLength' => 1,
        'ajax' => [
            'url' => "/core/tester/restjson/api3.aspx",
            'dataType' => 'json',
            'delay' => 250,
            'processResults' => new JsExpression($resultsJs),
            'cache' => true
        ],
        'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
        'templateResult' => new JsExpression('formatRepo'),
        'templateSelection' => new JsExpression('formatRepoSelection'),
    ],
]);
