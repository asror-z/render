<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\former\eyuf\ProgramForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\testing\ZMafaWidget;

/* echo ZMafaWidget::widget([]);*/


?>


<?php
/**
 *
 *
 *


Az::$app->request->csrfToken

 *
 */


/**         Az::$app->request->csrfToken
 *
 *
 *       _csrf: sVpd57X5ZE7nJrqAo6y51JHhX5VP9_-EFUTkruItTkSCKArQ4YgnJa0UiMjU_-aO24ITpziFmulSCK6eknwJMw==
type: Xlsx
export: 1
columns:
selector: 1

 * 
 */

$model = new ProductItemForm();
$model->configs->edit = true;

/** @var ZView $this */
/*$model->configs->filter = true;
$model->configs->summary = true;*/

//$data = Az::$app->App->eyuf->main->formByCountries($model);

$program = new ProductItemForm();
$program->name = 'Ada';
$program->type = '1';

$arr = [1, 4, 'url', ['fjkdj']];

$data[] = $program;

echo ZArrayWidget::widget([
    'model' => $model,
    'data' => $data,
    
]);
