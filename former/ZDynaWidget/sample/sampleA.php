<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\user\UserCompany;
use zetsoft\models\place\PlaceCountry;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetDesign;

$model = new PlaceCountry();
$attribute = 'name';


?>
<div class="col-md-12 p-2">
<?php
echo ZDynaWidgetDesign::widget([
    'model' => $model,
    'attribute' => $attribute
]);

?>

</div>
