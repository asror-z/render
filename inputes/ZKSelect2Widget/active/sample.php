<?php

use zetsoft\models\page\PageAction;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;

/** @var ZView $this */
$action->icon =false;
Az::$app->params['widget'] = true;

$actionId = $this->httpGet('key');
$PageAction = PageAction::findOne($actionId);



if (!$PageAction){
    $name = 'ALL/core/widget/class';}
else{
    $name = $PageAction->name;
}

$path = Root . '/webhtm/' . $name . '.php';
$path = str_replace('\\', '/', $path);


//$page = $this->renderAjaxFile("$path");

ZGrapesJsWidget::begin([
    'config' => [
        'saveFile' => $path
    ]
]);

echo ("<head>
    <meta charset=\"UTF-8\">
    <title>Select2</title>
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />
</head>
<body>

<select class=\"js-example-basic-single\" name=\"state\">
    <option value=\"AL\">Alabama</option>
    <option value=\"WY\">Wyoming</option>
    <option value=\"MY\">MIAMI</option>
    <option value=\"NY\">NEW YORK</option>
</select>


<script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>

<script type=\"application/javascript\">
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
</body>");

ZGrapesJsWidget::end();
$this->title = Az::l('Конструктор сайтов');
