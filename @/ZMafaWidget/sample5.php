<?php

use zetsoft\former\eyuf\ProgramForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\testing\ZMafaWidget2;
use zetsoft\widgets\testing\ZMWidget;

//echo ZMafaWidget_1::widget([]);


?>


<?php

echo ZMWidget::widget([]);


?>

 <!--   <form method="post">
        <input type="text" name="<?/*=Az::$app->request->csrfParam*/?>" value="<?/*=Az::$app->request->csrfToken*/?>"><br><br>
        <input type="text" name="type" value="Xlsx" ><br><br>
        <input type="text" name="export"  id="export"><br><br>
        <input type="text" name="columns" value=["0","1","2","3","4","5"]><br><br>
        <input type="text" name="selector"  id="selector"><br><br>
        <input type="submit" id="setpost" value="Submit">
    </form>-->

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
        'exportBtn' => Az::$app->forms->export->run($model, $data)
    ]
]);
