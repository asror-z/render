<?php

use zetsoft\former\eyuf\ProgramForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\testing\ZMafaWidget;
use zetsoft\widgets\testing\ZMafaWidget2;
use zetsoft\widgets\testing\ZMafaWidget_1;
use zetsoft\widgets\testing\ZMWidget;

//  $this->modelPost(true);
echo ZMWidget::widget([
    'config' => [
        'hidden' => true,
    ]
]);


?>

<?php

$model = new ProgramForm();

/** @var ZView $this */
$model->configs->filter = true;
$model->configs->pageSummary = true;

$data = Az::$app->App->eyuf->main->formByCountries($model);

echo ZArrayWidget::widget([
    'model' => $model,
    'data' => $data,
    'config' => [
        'title' => Az::l('Статистика в формате стран по программам'),
        'exportBtn' => Az::$app->forms->export->run($model, $data),

    ]
]);
