
<?php
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZCustomPaginationWidget;

$query      =  \zetsoft\models\user\User::find();
//vdd($query);
$dataProvider = new ActiveDataProvider(['query' => $query ]);
?>




<?php
$this->pjaxBegin();
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);
$this->pjaxEnd();
?>
