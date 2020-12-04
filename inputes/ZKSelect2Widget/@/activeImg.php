<?php
use kartik\select2\Select2;
use yii\web\JsExpression;
use yii\bootstrap4\Modal;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$data = [
    'uz' => 'Uzbekitan',
    'ad' => 'Andora',
    'ae' => 'United Arab Emirates',
    'af' => 'Afganistan',
    'ag' => 'Antigua and Barbuda',
    'ai' => 'Anguilla',
    'al' => 'Albania',
    'am' => 'Armenia',
    'ao' => 'Amgola',
    'aq' => 'Antarctica',
    'ar' => 'Argentina',
    'as' => 'American Samoa',
    'at' => 'Austria',
];


$url = Az::$app->urlManager->baseUrl . '/render/asrorz/flags/';
$format = <<< JS
function format(state) {
    if (!state.id) return state.text; // optgroup
    src = '$url' +  state.id.toLowerCase() + '.png'
    return '<img class="flag" style="width: 18px; height: 15px; margin-left: 3px; margin-right: 5px;" src="' + src + '"/>' + state.text;
}
JS;
$escape = new JsExpression("function(m) { return m; }");
$this->registerJs($format, ZView::POS_HEAD);

echo ZKSelect2Widget::widget([
    'name' => 'state_12',
    'data' => $data,
    'config' => [
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'templateResult' => new JsExpression('format'),
            'templateSelection' => new JsExpression('format'),
            'escapeMarkup' => $escape,
            'allowClear' => true
        ],
    ]
]);
