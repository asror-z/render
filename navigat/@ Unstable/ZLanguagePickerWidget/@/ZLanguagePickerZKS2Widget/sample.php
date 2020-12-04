<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use kartik\select2\Select2;
use yii\web\JsExpression;
use yii\bootstrap4\Modal;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\navigat\ZLanguagePickerZKS2Widget;

/*// Templating example of formatting each list element
$url = \Yii::$app->urlManager->baseUrl . '/images/flags/';
$format = <<< SCRIPT
function format(state) {
    if (!state.id) return state.text; // optgroup
    src = '$url' +  state.id.toLowerCase() + '.png'
    return '<img class="flag" src="' + src + '"/>' + state.text;
}
SCRIPT;
$escape = new JsExpression("function(m) { return m; }");
$this->registerJs($format, View::POS_HEAD);
echo '<label class="control-label">Provinces</label>';*/

/*echo ZKSelect2Widget::widget([
    'name' => 'state_12',
    'data' => $data,
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'templateResult' => new JsExpression('format'),
        'templateSelection' => new JsExpression('format'),
        'escapeMarkup' => $escape,
        'allowClear' => true
    ],
]);*/


echo ZLanguagePickerZKS2Widget::widget([]);

// Disable specific values for selection (for example disable third and fourth value)
// Disable specific values for selection (for example disable third and fourth value)
