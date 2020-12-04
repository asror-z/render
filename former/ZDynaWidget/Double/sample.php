<?php

use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopOrderItem;
use zetsoft\widgets\former\ZDynaAblWidget;
use zetsoft\widgets\former\ZDynaWidget;

$order = new ShopOrder();

?>

<div class="col-md-12 border">

<?php

echo ZDynaAblWidget::widget([
    'model' => $order
]);

?>
</div>
<div class="mt-3 col-md-12 border border-primary">

<?php

$orderItem = new ShopOrderItem();

echo ZDynaAblWidget::widget([
    'model'=> $orderItem
]);

?>

</div>
